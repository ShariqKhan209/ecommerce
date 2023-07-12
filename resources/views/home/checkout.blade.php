<x-layout>
    @include('partials.header')
    <head>
        <style>
            .heading{
          text-align: center;
          color: rgb(67, 66, 66);
          font-size: 30px;
          font-family:Georgia, 'Times New Roman', Times, serif;
          margin-bottom: 20px;
        }
            .form{
                width: 50%;
                margin: auto;
                color: rgb(117, 117, 117);
            }
        </style>
    </head>
     
    <h2 class="heading">Checkout</h2>
        <form method="POST" action="/proceed_order" enctype="multipart/form-data" class="form">
            @csrf
            <div class="mb-6">
                <label
                    for="name"
                    class="inline-block text-lg mb-2"
                    >Name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="name"
                    value="{{old('name')}}"
                />
                
                @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>                    
                @enderror

            </div>

            <div class="mb-6">
                <label
                    for="address"
                    class="inline-block text-lg mb-2"
                >
                    Address
                </label>
                <textarea
                    class="border border-gray-200 rounded p-2 w-full"
                    name="address"
                    type="number"
                    rows="3"
                    placeholder=""
                >
                    {{old('address')}}
                </textarea>

            <div class="mb-6">
                <label
                    for="phone"
                    class="inline-block text-lg mb-2"
                    >Phone</label
                >
                <input
                    type="number"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="phone"
                    placeholder=""
                    value="{{old('phone')}}"
                />
                 
                @error('phone')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>                    
                @enderror
                
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2"
                    >Email</label
                >
                <input
                    type="email"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="email"
                    value="{{old('email')}}"
                />
                 
                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>                    
                @enderror
                
            </div>

            {{-- <div class="mb-6">
                <label for="quantity" class="inline-block text-lg mb-2"
                    >Quantity</label
                >
                <input
                    type="number"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="quantity"
                    value="{{old('quantity')}}"
                />
                 
                @error('quantity')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>                    
                @enderror
                
            </div>

            <div class="mb-6">
                <label
                    for="image"
                    class="inline-block text-lg mb-2"
                >
                    Product Image
                </label>
                <input
                    type="file"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="image"
                />
                 
                @error('image')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>                    
                @enderror
                
            </div>

            <div class="mb-6">
                <label
                    for="category"
                    class="inline-block text-lg mb-2"
                >
                    Choose Category
                </label>
                <select
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="category"
                    
                >

                <option value="" selected="">Select a category</option>

               
                
                 
                @error('category')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>                    
                @enderror
                
            </div> --}}

            

            

            <div class="mb-6">
                <input type="submit" class="btn btn-primary mt-3 mr-10" name="submit" value="Confirm Order">
            </div>

            </div>
        </form>

            

    @include('partials.footer')
</x-layout>