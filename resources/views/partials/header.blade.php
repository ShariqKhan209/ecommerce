<header class="header_section">
    <div class="container">
       <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="/"><img width="250" src="/home/images/ssmart-r.png" alt="#" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav">
                <li class="nav-item">
                   <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{url('all_products')}}">Products</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{url('blog')}}">Blog</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{url('contact')}}">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('show_cart')}}">Cart</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{url('show_order')}}">Order</a>
               </li>
                
                <form class="form-inline">
                   <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                   <i class="fa fa-search" aria-hidden="true"></i>
                   </button>
                </form>

                @if (Route::has('login'))
                <div>
                    @auth

                    <li class="nav-item">
                            
                        <x-app-layout>
                           
                        </x-app-layout>
                    </li>
                    
                     <!-- <a href="{{ url('/redirect') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a> -->
                    @else
                        
                    <a href="{{ route('login') }}"><button class="btn btn-secondary" style="background-color: #f7444e">Login</button></a>
                    <!-- <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>-->

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}"><button class="btn btn-secondary" style="background-color: #f7444e">Register</button></a>
                        <!-- <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a> -->
                        @endif
                    @endauth
                </div>
                @endif
             </ul>
          </div>
       </nav>
    </div>
 </header>