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
          font-size: 30px;
          color: whitesmoke;
          border: none solid wheat;
          margin-top: 30px;
        }
        .img{
          width:30%; margin:auto; padding:30px;
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

                    <h2 class="heading">Order for {{$order->name}} </h2>

                    <img src="products/{{$order->image}}" class="img" alt="">
                    
                    <table class="table">
                        <tr>
                          <td>User Name</td>
                          <td>{{$order->name}}</td>
                        </tr>
                        <tr>
                            <td>User Id</td>
                            <td>{{$order->user_id}}</td>
                          </tr>
                          <tr>
                            <td>Address</td>
                            <td>{{$order->address}}</td>
                          </tr>
                          <tr>
                            <td>Phone</td>
                            <td>{{$order->phone}}</td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td>{{$order->email}}</td>
                          </tr>
                          <tr>
                            <td>Product Name</td>
                            <td>{{$order->product_title}}</td>
                          </tr>
                          <tr>
                            <td>Product Id</td>
                            <td>{{$order->product_id}}</td>
                          </tr>
                          <tr>
                            <td>Product Price</td>
                            <td>${{$order->product_price}}</td>
                          </tr>
                          <tr>
                            <td>Quantity</td>
                            <td>{{$order->quantity}}</td>
                          </tr>
                          <tr>
                            <td>Total Price</td>
                            <td>${{$order->total_price}}</td>
                          </tr>

                      </table>
                    
                      <div style="margin-top: 20px">
                      @if ($order->status == "processing")
                          <a class="btn btn-warning" onclick="return confirm('Are you sure this order is delivered?')" href="{{url('delivered',$order->id)}}">Mark Delivered</a></td>
                            
                        @elseif($order->status == "delivered")
                        <a class="btn btn-secondary">Delivered</a>

                        @else
                        <a class="btn btn-secondary">Canceled</a>

                    </div>
                        
                          @endif
                      
                       
                      

        

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