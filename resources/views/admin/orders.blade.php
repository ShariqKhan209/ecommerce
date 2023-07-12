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
    {{$num = 1}}
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

                <div class="div-center">
                    <h2 class="heading">Orders</h2>

                    <div style="text-align: center">

                      <form action="{{url('search')}}" method="GET">

                        @csrf

                        <div class="m-3">
                          <input style="background-color:rgb(25, 25, 25); margin-right:10px;" type="text" placeholder="Search for a name" name="search">
                          <input type="submit" class="btn btn-outline-primary" value="Search">
                        </div>

                      </form>
                    
                    </div>

                    <table class="table">
                        <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Total Price</th>
                          <th>Status</th>
                          <th>View</th>
                          <th>Action</th>
                        </tr>
                        <tr>
                          @forelse ($orders as $orders)
                              
                          <td>{{$num++}}</td>
                          <td>{{$orders->name}}</a></td>
                          <td>{{$orders->total_price}}</td>
                            
                          {{-- @if ($orders->status == "processing")
                          <td>Processing</td>
                                                     
                          @elseif($orders->status == "delivered")
                          <td>Delivered</td>

                          @endif --}}

                          <td>{{$orders->status}}</td>
                        
                          <td><a class="btn btn-primary btn-sm" href="{{url('single_order',$orders->id)}}">View Order</a></td>
                          
                          @if ($orders->status == "processing")
                          <td><a class="btn btn-warning btn-sm" onclick="return confirm('Are you sure this order is delivered?')" href="{{url('delivered',$orders->id)}}">Mark Delivered</a></td>
                            
                        @elseif($orders->status == "delivered")
                        <td><a class="btn btn-secondary btn-sm">Delivered</a></td>

                        @else
                        <td><a class="btn btn-secondary btn-sm">Canceled</a></td>
                          @endif
                        </tr>

                          @empty
                              <tr>
                                <td colspan="16">No Records Found  </td>
                              </tr>
                          

                       @endforelse
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