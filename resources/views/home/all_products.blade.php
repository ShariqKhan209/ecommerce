<x-layout>

    <div>
        <!-- header section -->
        @include('partials.header')
    </div>
<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             Our <span>products</span>
          </h2>
       </div>
       
       <div style="text-align: center">
        <form action="{{url('search_product')}}" method="GET">
            @csrf
            <input style="width:50%;" type="text" placeholder="Search for a product" name="search">
            <input type="submit" value="Search" class="btn btn-sm btn-primary">
        </form>
       </div>


       <div class="row">
         @foreach ($products as $product)            
          <div class="col-sm-6 col-md-4 col-lg-4">
             <div class="box">
                <div class="option_container">
                  
                      
                  
                   <div class="options">
                      <a href="{{url('product_details',$product->id)}}" class="option1">
                      Details
                      </a>
                      {{-- <a href="" class="option2">
                      Add to Cart
                      </a> --}}
                      <form action="{{url('add_to_cart',$product->id)}}" method="POST">
                        @csrf
                      <div class="d-flex">
                        <input class="form-control text-center me-3" style="border-radius: 100px 100px; max-width:3rem;" id="inputQuantity" type="num" value="1" name="quantity"/>
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Add to cart
                        </button>
                    </div>
                  </form>
                   </div>
                </div>
                <div class="img-box">
                   <img src="products/{{$product->image}}" alt="">
                </div>
                <div class="detail-box">
                   <h5>
                     {{$product->title}}
                   </h5>

                   @if ($product->discounted_price != null)
                     <h6>
                        ${{$product->discounted_price}}
                      </h6>
                      <h6 style="text-decoration: line-through;">
                        ${{$product->price}}
                      </h6>
                                          
                   @else 
                     <h6>
                        ${{$product->price}}
                      </h6>
                   
                       
                  
                       
                   @endif
                   
                </div>
             </div>
          </div>
          
          @endforeach

          <span style="margin: 20px 0px 0px 20px">
          {!!$products->withQueryString()->links('pagination::bootstrap-5')!!}
         </span>

       </div>
       
    </div>
 </section>

 @include('partials.footer')
</x-layout>