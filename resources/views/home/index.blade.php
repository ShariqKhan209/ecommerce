<x-layout>

      <div class="hero_area">

         <!-- header section -->
         @include('partials.header')

         @if (session()->has('message'))
         <div class="alert alert-success" role="alert">
             
             <button type="button" class="close" data-dismiss="alert" aria-label="Close" aria-hidden="true">
                 ˣ
             </button>
             {{session()->get('message')}}
           </div>                    
         @endif
         
         <!-- slider section -->
         @include('home.slider')
        
      </div>

      <!-- why section -->
      @include('home.why')
      
      
      <!-- arrival section -->
      @include('home.arrival')
    
      
      <!-- product section -->
      @include('home.ourproducts')
      

      <!-- subscribe section -->
      @include('home.subscribe')
      

      <!-- client section -->
      @include('home.testimonials')
      

      <!-- footer start -->
      @include('partials.footer')

</x-layout>