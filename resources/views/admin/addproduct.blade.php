@include('admin.head')
<head>
    <style>
        .heading{
      text-align: center;
      color: whitesmoke;
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

  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')

        <div class="main-panel">
            <div class="content-wrapper">

                @if (session()->has('message'))
                <div class="alert alert-success" role="alert">
                    
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" aria-hidden="true">
                        ˣ
                    </button>
                    {{session()->get('message')}}
                  </div>                    
                @endif
                  <h2 class="heading">Add Product</h2>
        <form method="POST" action="/save_product" enctype="multipart/form-data" class="form">
            @csrf
            <div class="mb-6">
                <label
                    for="title"
                    class="inline-block text-lg mb-2"
                    >Product Title</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="title"
                    value="{{old('title')}}"
                />
                
                @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>                    
                @enderror

            </div>

            <div class="mb-6">
                <label
                    for="description"
                    class="inline-block text-lg mb-2"
                >
                    Product Description
                </label>
                <textarea
                    class="border border-gray-200 rounded p-2 w-full"
                    name="description"
                    rows="4"
                    placeholder=""
                >
                    {{old('description')}}
                </textarea>

            <div class="mb-6">
                <label
                    for="price"
                    class="inline-block text-lg mb-2"
                    >Price</label
                >
                <input
                    type="number"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="price"
                    placeholder=""
                    value="{{old('price')}}"
                />
                 
                @error('price')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>                    
                @enderror
                
            </div>

            <div class="mb-6">
                <label for="discounted_price" class="inline-block text-lg mb-2"
                    >Discounted Price</label
                >
                <input
                    type="number"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="discounted_price"
                    value="{{old('discounted_price')}}"
                />
                 
                @error('discounted_price')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>                    
                @enderror
                
            </div>

            <div class="mb-6">
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

                @foreach ($category as $category)
                <option value="{{$category->category}}">{{$category->category}}</option>
                @endforeach
                
                 
                @error('category')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>                    
                @enderror
                
            </div>

            

            

            <div class="mb-6">
                <input type="submit" class="btn btn-primary mt-3 mr-10" name="submit" value="Add Product">
            </div>

            </div>
        </form>

            </div></div>

          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    @include('admin.scripts')
  </body>
</html>