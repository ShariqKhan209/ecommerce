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
    .table{
      margin: auto;
      text-align: center;
      width: 80%;
      color: whitesmoke;
    }
    .center-div{
      text-align: center;
    }
  </style>
  {{$num=1}}
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

            <div class="center-div">

              <h2 class="heading">All Products</h2>

            <table class="table">
              <tr style="background-color: rgb(47, 47, 47)">
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Category</th>
                <th>Price</th>
                <th>Dis Price</th>
                <th>Quantity</th>
                <th>Action</th>
              </tr>
              
              @foreach ($product as $product)
              
              <tr>
                <td>
                  {{$num++}}
                </td>
                <td>
                  {{$product->title}}
                </td>
                <td maxlength="20">
                  {{ Illuminate\Support\Str::limit($product->description, 20) }}
                </td>
                <td>
                  {{$product->category}}
                </td>
                <td>
                  {{$product->price}}
                </td>
                <td>
                  {{$product->discounted_price}}
                </td>
                <td>
                  {{$product->quantity}}
                </td>
                <td>
                  <a class="btn btn-primary btn-sm" href="{{url('edit_product',$product->id)}}">Edit</a><a class="btn btn-danger btn-sm ml-2" onclick="return confirm('Are you sure you want to delete: {{$product->title}}')"  href="{{url('delete_product',$product->id)}}">Delete</a>
                </td>
              </tr>
              @endforeach
              
            </table>
          </div>
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