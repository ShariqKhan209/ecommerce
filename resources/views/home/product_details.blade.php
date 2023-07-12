<x-layout>

    <div class="hero_area">

       <!-- header section -->
       @include('partials.header')
      
      

    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="/products/{{$product->image}}" alt="..." /></div>
                <div class="col-md-6">
                    <div class="small mb-1">SKU: BST-498</div>
                    <h1 class="display-5 fw-bolder" style="font-size: 30px;">{{$product->title}}</h1>
                    <div class="fs-5 mb-5">
                        @if ($product->discounted_price != null)
                            <span style="text-decoration: line-through">${{$product->price}}</span>
                            <span>${{$product->discounted_price}}</span>
                        @else
                        <span>${{$product->price}}</span>
                            
                        @endif
                        
                    </div>
                    <p class="lead">{{$product->description}}</p>
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
        </div>
    </section>
    <!-- Related items section-->
    <section class="py-5 bg-light">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4">Related products</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                @foreach ($similar_products as $similar_products)
                    
                

                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="/products/{{$similar_products->image}}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{$similar_products->title}}</h5>
                                <!-- Product price-->
                                @if ($similar_products->discounted_price != null)
                            <span style="text-decoration: line-through">${{$similar_products->price}}</span>
                            <span>${{$similar_products->discounted_price}}</span>
                        @else
                        <span>${{$similar_products->price}}</span>
                            
                        @endif
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{url('product_details',$similar_products->id)}}">View Product</a></div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </section>

</div>
    

    <!-- footer start -->
    @include('partials.footer')

</x-layout>