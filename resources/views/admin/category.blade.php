<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
        .div_center {
            text-align: center;
            padding-top: 40px;
        }

        .h2_font {
            font-size: 40px;
            padding-bottom: 40px;

        }

        .input_color {
            color: black;

        }

        #center {
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 1px solid white;
            color: white;

        }

        td {
            padding: 10px;
            text-align: center;
        }

        th {
           
            text-align: center;
            color: black;
            font-family: bold;
        }

        thead {
            background-color: white;
            color: black;
        }

    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.header')

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @if(session()->has('message'))

                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}

                </div>
                @endif

                <div class="div_center">
                    <h2 class="h2_font"> Add Category</h2>

                    <form action="{{url('/add_category') }}" method="POST">
                        @csrf

                        <input class="input_color" type="text" name="category" placeholder="Masukan Nama Kategori">
                        <input type="submit" name="submit" class="btn btn-primary" value="Add Category">
                    </form>

                </div>

                <table id="center" class="table table-striped">

                    <thead>
                        <th>Nama Kategori</th>
                        <th>Action</th>
                    </thead>

                    @foreach ($data as $data)

                    <tr>
                        <td>{{$data->category_name}}</td>
                        <td>
                            <a onclick="return confirm('Yakin mau di hapus ?')" class="btn btn-danger" href="{{url ('/delete_category',$data->id) }}"> Delete</a>
                            <a class="btn btn-primary" href="">Edit</a>
                        </td>
                    </tr>
                    @endforeach

                </table>

            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <!-- End custom js for this page -->
        @include('admin.js')
</body>

</html>