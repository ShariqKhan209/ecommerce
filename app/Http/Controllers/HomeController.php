<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;

class HomeController extends Controller
{

    public function index(){
        $products = product::paginate(6);
        return view('home.index',compact('products'));
    }

    public function redirect(){

        if(Auth::id()){

        $usertype = Auth::user()->usertype;
        if($usertype == '1'){
            $products = product::all()->count();
            $users = user::all()->count();
            $orders = order::all()->count();
            $delivered = order::where('status','=','delivered')->get()->count();
            $pending = order::where('status', '=', 'processing')->get()->count();
            $user = Auth::user();
            $username = $user->name;
            

            $totalrevenue = 0;
            $price = order::all();
            foreach ($price as $price){
                $totalrevenue = $totalrevenue + $price->total_price;
            }

            return view('admin.home',compact('products','users','totalrevenue','orders','delivered','pending','username'));
        }
        else{
            $products = product::paginate(6);
        return view('home.index',compact('products'));
        }
    }
    else{
        return redirect('login');
    }
    }

    public function product_details($id){
        $product = product::find($id);
        $similar_products = product::where('category','=',$product->category)->paginate(4);
        return view('home.product_details',compact('product','similar_products'));
    }

    public function add_to_cart(Request $request, $id){
        if(Auth::id()){

           $user = Auth::user();
           $userid = $user->id;
           $product = product::find($id);

           $product_already_exist = cart::where('product_id','=',$id)->where('user_id','=',$userid)->get('id')->first();

           if($product_already_exist){
            $cart = cart::find($product_already_exist)->first();

            $quantity = $cart->quantity;
            $cart->quantity = $quantity + $request->quantity;

            if($product->discounted_price != null){
                $cart->price = $product->discounted_price;
                $cart->total_price = $product->discounted_price * $cart->quantity;
               }
               else{
                $cart->price = $product->price;
                $cart->total_price = $product->price * $cart->quantity;
               }

               $cart->save();
           return redirect()->back();

           }

           else{

           $cart = new cart();
           $cart->name = $user->name;
           $cart->phone = $user->phone;
           $cart->address = $user->address;
           $cart->email = $user->email;
           $cart->product_title = $product->title;
           

           if($product->discounted_price != null){
            $cart->price = $product->discounted_price;
            $cart->total_price = $product->discounted_price * $request->quantity;
           }
           else{
            $cart->price = $product->price;
            $cart->total_price = $product->price * $request->quantity;
           }
           
           $cart->image = $product->image;
           $cart->quantity = $request->quantity;
           $cart->product_id = $product->id;
           $cart->user_id = $user->id;
           $cart->status = 'processing';

           $cart->save();
           return redirect()->back();
        }
        }
       else{
        return redirect('login');
       }
        
    }

    public function show_cart(){

        if (Auth::id()) {
            $id = Auth::user()->id;
            $cart = cart::where('user_id', '=', $id)->get();
            return view('home.show_cart', compact('cart'));
        }
        else{
            return redirect('login');
        }
        
    }

    public function remove_cart_product($id){
        $product = cart::find($id);
        $product->delete();
        return redirect()->back();
    }

    public function proceed_order(Request $request){

        $user = Auth::user();
        $userid = $user->id;

        $data = cart::where('user_id', '=', $userid)->get();

        foreach ($data as $data) {

            $order = new order;

            $order->name = $request->name;
            $order->phone = $request->phone;
            $order->address = $request->address;
            $order->email = $request->email;
            $order->user_id = $data->user_id;
            $order->product_id = $data->product_id;
            $order->product_title = $data->product_title;
            $order->product_price = $data->price;
            $order->quantity = $data->quantity;
            $order->total_price = $data->total_price;
            $order->image = $data->image;
            $order->status = 'processing';

            $order->save();

            $cart_id = $data->id;
            $cart = cart::find($cart_id);
            $cart->delete();
        }
        $order = order::all();

        return view('home.show_order', compact('order'))->with('message', 'Your order have been placed successfully');

    }

    public function checkout(){
        return view('home.checkout');
    }

    public function show_order(){

        if (Auth::id()) {
            $id = Auth::user()->id;
            $order = order::where('user_id', '=', $id)->get();
            return view('home.show_order', compact('order'));
        }
        else{
            return redirect('login');
        }
        
    }

    public function remove_order_product($id){
        $product = order::find($id);
        $product->status = 'canceled';
        $product->save();
        return redirect()->back();
    }

    public function all_products(){
        $products = product::paginate(9);
        return view('home.all_products', compact('products'));
    }

    public function search_product(Request $request){
        $searched_text = $request->search;
        $products = product::where('title', 'LIKE', "%$searched_text%")->orWhere('category', 'LIKE', "%$searched_text%")->paginate(10);
        return view('home.all_products', compact('products'));
    }

    public function contact(){
        return view('home.contact');
    }

    public function about(){
        return view('home.about');
    }

    public function blog(){
        return view('home.blog');
    }

    
}
