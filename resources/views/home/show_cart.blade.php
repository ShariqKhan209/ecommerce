<x-layout>
    @php
     $grand_total = 0;
@endphp
         
    <head>
        <style>
        body{
            margin-top:20px;
            background:#eee;
        }
        .ui-w-40 {
            width: 40px !important;
            height: auto;
        }

        .card{
            box-shadow: 0 1px 15px 1px rgba(52,40,104,.08);    
        }

        .ui-product-color {
            display: inline-block;
            overflow: hidden;
            margin: .144em;
            width: .875rem;
            height: .875rem;
            border-radius: 10rem;
            -webkit-box-shadow: 0 0 0 1px rgba(0,0,0,0.15) inset;
            box-shadow: 0 0 0 1px rgba(0,0,0,0.15) inset;
            vertical-align: middle;
        }
        </style>
    </head>

    <div class="hero_area">

       <!-- header section -->
       @include('partials.header')
       
       <div class="container px-3 my-5 clearfix">
        <!-- Shopping cart table -->
        <div class="card">
            <div class="card-header">
                <h2>Shopping Cart</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered m-0">
                    <thead>
                      <tr>
                        <!-- Set columns width -->
                        <th class="text-center py-3 px-4" style="min-width: 400px;">Product Name &amp; Details</th>
                        <th class="text-right py-3 px-4" style="width: 100px;">Price</th>
                        <th class="text-center py-3 px-4" style="width: 120px;">Quantity</th>
                        <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
                        <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
                      </tr>
                    </thead>
                    <tbody>
              
            
                        @foreach ($cart as $cart)
                            
                        


                      <tr>
                        <td class="p-4">
                          <div class="media align-items-center">
                            <img src="/products/{{$cart->image}}" class="d-block ui-w-40 ui-bordered mr-4" alt="">
                            <div class="media-body">
                              <a href="#" class="d-block text-dark">{{$cart->product_title}}</a>
                              <small>
                                <span class="text-muted">Color:</span>
                                <span class="ui-product-color ui-product-color-sm align-text-bottom" style="background:#e81e2c;"></span> &nbsp;
                                <span class="text-muted">Size: </span> EU 37 &nbsp;
                                <span class="text-muted">Ships from: </span> China
                              </small>
                            </div>
                          </div>
                        </td>
                        <td class="text-right font-weight-semibold align-middle p-4">{{$cart->price}}</td>
                        <td class="text-center font-weight-semibold align-middle p-4">{{$cart->quantity}}</td>
                        <td class="text-right font-weight-semibold align-middle p-4">{{$cart->total_price}}</td>
                        <td class="text-center align-middle px-0"><a href="{{url('remove_cart_product',$cart->id)}}" class="shop-tooltip close float-none text-danger" title="Remove Product" data-original-title="Remove">×</a></td>
                      </tr>
            
                      @php
                      $grand_total = $grand_total + $cart->total_price
                      @endphp
                      
                      @endforeach

                    </tbody>
                  </table>
                </div>
                <!-- / Shopping cart table -->
            
                <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
                  <div class="mt-4">
                    <label class="text-muted font-weight-normal">Promocode</label>
                    <input type="text" placeholder="" class="form-control">
                  </div>
                  <div class="d-flex">
                    <div class="text-right mt-4 mr-5">
                      <label class="text-muted font-weight-normal m-0">Discount</label>
                      <div class="text-large"><strong>$0</strong></div>
                    </div>
                    <div class="text-right mt-4">
                      <label class="text-muted font-weight-normal m-0">Total price</label>
                      <div class="text-large"><strong>${{$grand_total}}</strong></div>
                    </div>
                  </div>
                </div>
            
                <div class="float-right">
                  <button type="button" class="btn btn-lg btn-default md-btn-flat mt-2 mr-3">Back to shopping</button>
                  <a href="{{url('checkout')}}"><button type="button" class="btn btn-lg btn-outline-primary mt-2">Checkout</button></a>
                </div>
            
              </div>
          </div>
      </div>
       
      
    </div>
    
    <!-- footer start -->
    @include('partials.footer')

</x-layout>     