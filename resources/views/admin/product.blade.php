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

        .font1 {
            font-size: 40px;
            padding-bottom: 40px;
        }

        .textin1 {
            color: black;
            padding-bottom: 20px;
        }

        label {
            display: inline-block;
            width: 200px;
        }

        .div_design {
            padding-bottom: 15px;
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

                <div class=div_center>

                    <h1 class="font1">Tambah Produk</h1>

                    <form action="{{url ('/add_product')}}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="div_design">
                            <label>Nama Produk :</label>
                            <input class="textin1" type="text" name="title" placeholder="Masukkan Nama Produk" required="">
                        </div>

                        <div class="div_design">
                            <label for="">Deskripsi Produk :</label>
                            <input class="textin1" type="text" name="description" placeholder="Masukkan Deskripsi Produk" required>
                        </div>

                        <div class="div_design">
                            <label for="">Harga Produk :</label>
                            <input class="textin1" type="number" name="price" placeholder="Masukkan Harga produk" required>
                        </div>

                        <div class="div_design">
                            <label for="">Harga Diskon :</label>
                            <input class="textin1" type="text" name="discount_price" placeholder="Masukkan harga diskon">
                        </div>

                        <div class="div_design">
                            <label for="">Jumlah Produk :</label>
                            <input class="textin1" type="number" min="0" name="quantity" placeholder="Masukkan Jumlah produk" required>
                        </div>


                        <div class="div_design">
                            <label for="">Kategori Produk :</label>
                            <select class="textin1" name="category" required>
                                <option value="" selected="">Pilih Kategori Disini</option>
                                @foreach($category as $category)
                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="div_design">
                            <label>Gambar Produk:</label>
                            <input type="file" name="image" required>
                        </div>

                        <div class="div_design">
                            <input type="submit" value="Add Product" class="btn btn-primary">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    @include('admin.js')
    </div>
</body>

</html>