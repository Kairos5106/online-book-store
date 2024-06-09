<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style>
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
    </style>
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.sidebar')
      <div class="container-fluid page-body-wrapper">
        @include('admin.header')
        <div class="main-panel">
            <div class="content-wrapper">

                <!-- Show any message if the session has one -->
                @if(session()->has('message'))
                    <div class="alert alert-success">

                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                        {{ session()->get('message') }}

                    </div>
                @endif

                <div class="div-centre">
                    <h2 class="h2font">Add Book Categories</h2>
                    <form action="{{url('/add_category')}}" method="POST">
                        
                        @csrf

                        <input class="input_color" type="text" name="category" placeholder="Insert new category">
                        <input class="btn btn-primary" type="submit" value="Add Category">
                    </form>
                </div>   
            </div>
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
@include('admin.script')
  </body>
</html>