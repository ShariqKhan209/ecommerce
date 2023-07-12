@include('admin.head')
  <head>
    <style type="text/css">
        .heading{
          text-align: center;
          color: whitesmoke;
          font-size: 30px;
          font-family:Georgia, 'Times New Roman', Times, serif;
        }
        .div-center{
          text-align: center;
        }
        .table{
          margin: auto;
          width: 40%;
          font-size: 20px;
          color: whitesmoke;
          border: none solid wheat;
          margin-top: 30px;
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

        <!-- partial -->
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

        <div class="div-center">
        <h2 class="heading">Add New Category</h2>
        &nbsp;
        <form action="{{url('add_category')}}" method="POST">
            @csrf
            <input style="color:black;" type="text" name="category" placeholder="Name of category"><br>
            <input type="submit" class="btn btn-primary mt-3 mr-10" name="submit" value="Add Category">
        </form>

        <table class="table">
          <tr>
            <th>Id</th>
            <th>Category Name</th>
            <th>Action</th>
          </tr>
          <tr>
            @foreach ($categories as $category)
                
            <td>{{$num++}}</td>
            <td>{{$category->category}}</td>
            <td><a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete: {{$category->category}}')" href="{{url('delete_category',$category->id)}}">Delete</a></td>
          </tr>
         @endforeach
        </table>

        </div>
            </div></div>

          <!-- content-wrapper ends -->

          

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