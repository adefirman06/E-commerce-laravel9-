<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <style type="text/css">
        .font1 {
            margin: auto;
            font-size: 30px;
        }

        .center {
            margin: auto;
            width: 50%;
        }

        h2 {
            text-align: center;
            font-size: 40px;
            color: white;
        }

        th {
            background-color: white;
            font-family: bold;
        }

        td {
            color: white;
        }
    </style>

</head>

<body>
    <div class="container-scroller" style="margin: auto;">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.header')

        <!-- partial -->


        <div class="main-panel" style="margin: auto;">
            <div class="content-wrapper" style="margin: auto;">
                <h1 class=" font1"> Daftar Produk</h1>
                @if(session()->has('message'))

                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}

                </div>
                @endif

                <table class="table table-bordered table-dark" style="margin: auto;">
                    <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Deskripsi</th>
                            <th>Kuantitas</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Potongan Harga</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $product)
                        <tr>
                            <td>{{$product->title}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->category}}</td>
                            <td>@currency($product->price)</td>
                            <td>{{$product->discount_price}}</td>
                            <td>
                                <img sco src=" /product/{{$product->image}}">
                    </td>
                    <td>
                        <a onclick="return confirm('Yakin mau di hapus ?')" class="btn btn-danger" href="{{url('delete_product',$product->id)}}">Hapus</a>
                        <a class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a>
                    </td>




                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>


        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <!-- End custom js for this page -->
    </div>
    @include('admin.js')
    </div>
</body>

</html>