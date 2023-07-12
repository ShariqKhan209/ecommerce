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
                <h2>Order Placed</h2>
            </div>
            @if (session()->has('message'))
       <div class="alert alert-success" role="alert">
           
           <button type="button" class="close" data-dismiss="alert" aria-label="Close" aria-hidden="true">
               ˣ
           </button>
           {{session()->get('message')}}
         </div>                    
       @endif
            <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered m-0">
                    <thead>
                      <tr>
                        <!-- Set columns width -->
                        <th class="text-center py-3 px-4" style="min-width: 400px;">Product Name &amp; Details</th>
                        <th class="text-right py-3 px-4" style="width: 100px;">Status</th>
                        <th class="text-center py-3 px-4" style="width: 120px;">Quantity</th>
                        <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
                        <th class="text-right py-3 px-4" style="width: 100px;">Cancel</th>
                      </tr>
                    </thead>
                    <tbody>
              
            
                        @foreach ($order as $order)
                            
                        


                      <tr>
                        <td class="p-4">
                          <div class="media align-items-center">
                            <img src="/products/{{$order->image}}" class="d-block ui-w-40 ui-bordered mr-4" alt="">
                            <div class="media-body">
                              <a href="#" class="d-block text-dark">{{$order->product_title}}</a>
                              <small>
                                <span class="text-muted">Color:</span>
                                <span class="ui-product-color ui-product-color-sm align-text-bottom" style="background:#e81e2c;"></span> &nbsp;
                                <span class="text-muted">Size: </span> EU 37 &nbsp;
                                <span class="text-muted">Ships from: </span> China
                              </small>
                            </div>
                          </div>
                        </td>
                        <td class="text-right font-weight-semibold align-middle p-4">{{$order->status}}</td>
                        <td class="text-center font-weight-semibold align-middle p-4">{{$order->quantity}}</td>
                        <td class="text-right font-weight-semibold align-middle p-4">{{$order->total_price}}</td>

                        @if($order->status=='processing')
                        <td class="text-center align-middle px-0"><a href="{{url('remove_order_product',$order->id)}}" class="shop-tooltip close float-none text-danger" onclick="return confirm('Are you sure to cancel this product?')">×</a></td>
                        @else
                        <td class="text-center font-weight-semibold align-middle p-4">Not Allowed</td>
                        @endif

                    </tr>
                      
                      @endforeach

                    </tbody>
                  </table>
                
   

</x-layout>     