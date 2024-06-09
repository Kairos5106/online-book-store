<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style type="text/css">
        .div-centre {
            text-align: center;
            padding-top: 40px;
        }
        .h2font {
            font-size: 40px;
            padding-bottom: 40px;
        }
        .input_color {
            color: black;
            border: none;
            padding: 20px;
            width: 50%;
            margin-bottom: 20px;
        }
        .center {
            margin: auto;
            width: 50%;
            text-align: center;
            padding: 10px;
            margin-top: 30px;
            border: 3px solid white;
        }
        .img-size {
            width: 150px;
            height: 150px;
        }
        .table-header {
            background-color: gray;
        }
    </style>

  </head>
  <body>
    <div class="container-scroller">
      @include('admin.sidebar')
      <div class="container-fluid page-body-wrapper">
        @include('admin.header')
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="div-centre">

                    <!-- Show any message if the session has one -->
                    @if(session()->has('message'))
                        <div class="alert alert-success">
        
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        
                            {{ session()->get('message') }}
        
                        </div>
                    @endif

                    <h2 class="h2font">Show Products</h2>

                    <table class="center">

                        <tr class="table-header">
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Image</th>
                        </tr>

                    @foreach ($data as $data)

                    <tr>

                        <td>{{$data->id}}</td>
                        <td>{{$data->title}}</td>
                        <td>{{$data->description}}</td>
                        <td>{{$data->category}}</td>
                        <td>{{$data->quantity}}</td>
                        <td>{{$data->price}}</td>
                        <td>
                            <image class="img_size" src="/product/{{$data->image}}"></image>
                        </td>

                    </tr>
                        
                    @endforeach

                    </table>

                </div>
            </div>
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>