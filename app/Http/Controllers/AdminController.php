<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function view_category(){
        $categories = Category::all();
        return view('admin.category', compact('categories'));
    }

    public function add_category(Request $request){
        $data = new Category;
        $data->category = $request->category;

        $data->save();

        return redirect()->back()->with('message', 'Category Added');
    }

    public function delete_category($id){
        $data = category::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Category Deleted Successfully');

    }

    public function show_product(){
        $product = product::all();

        
        return view('admin.products', compact('product'));
    }

    public function add_product(){
        $category = category::all();
        return view('admin.addproduct', compact('category'));
    }

    public function save_product(Request $request){

        $product = new product;

        $product->title = $request->title;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->discounted_price = $request->discounted_price;
        $product->quantity = $request->quantity;

        $image = $request->image;
        $imagename = time(). '-' .$image->getClientOriginalExtension();
        $request->image->move('Products', $imagename);
        $product->image = $imagename;

        $product->save();
        return redirect()->back()->with('message', 'Product Added Successfully');
    }

    public function delete_product($id){
        $data = product::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }

    public function edit_Product($id){
        $product=product::find($id);
        $category=category::all();
        return view('admin.edit_product', compact('product', 'category'));
    }

    public function update_product(Request $request, $id){
        $product = product::find($id);

        $product->title = $request->title;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->discounted_price = $request->discounted_price;
        $product->quantity = $request->quantity;

        $image = $request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('Products', $imagename);
            $product->image = $imagename;
        }

        $product->save();

        $product = product::all();

        return view('admin.products', compact('product'))->with('message', 'Product Updated Successfully');
    }

    public function view_orders(){
        $orders = order::all();
        return view ('admin.orders', compact('orders'));
    }

    public function single_order($id){
        $order = order::find($id);
        return view ('admin.single_order', compact('order'));
    }

    public function delivered($id){
        $delivered = order::find($id);
        $delivered->status = "delivered";
        $delivered->save();
        return redirect()->back();
    }

    public function search(Request $request){
        $searchData = $request->search;
        $orders = order::where('name', 'LIKE', "%$searchData%")->get();
        return view('admin.orders', compact('orders'));
    }

}

