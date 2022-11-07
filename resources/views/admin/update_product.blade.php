<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
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

                    <h1 class="font1">Edit Produk</h1>

                    <form action="{{url ('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="div_design">
                            <label>Nama Produk :</label>
                            <input class="textin1" type="text" name="title" placeholder="Masukkan Nama Produk" value="{{$product->title}}">
                        </div>

                        <div class="div_design">
                            <label for="">Deskripsi Produk :</label>
                            <input class="textin1" type="text" name="description" placeholder="Masukkan Deskripsi Produk" value="{{$product->description}}">
                        </div>

                        <div class="div_design">
                            <label for="">Harga Produk :</label>
                            <input class="textin1" type="number" name="price" placeholder="Masukkan Harga produk" value="{{$product->price}}">
                        </div>

                        <div class="div_design">
                            <label for="">Harga Diskon :</label>
                            <input class="textin1" type="text" name="discount_price" placeholder="Masukkan harga diskon" value="{{$product->discount_price}}">
                        </div>

                        <div class="div_design">
                            <label for="">Jumlah Produk :</label>
                            <input class="textin1" type="number" min="0" name="quantity" placeholder="Masukkan Jumlah produk" value="{{$product->quantity}}" required>
                        </div>


                        <div class="div_design">
                            <label for="">Kategori Produk :</label>
                            <select class="textin1" name="category" required>

                                <option value="{{$product->category}}">{{$product->category}}</option>
                                @foreach($category as $category)
                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="div_design">
                            <label>Gambar Sekarang:</label>
                            <img style="margin: auto;" height="100" width="100" src="/product/{{$product->image}}" alt="">
                        </div>
                        <br>
                        <div class="div_design">
                            <label>Ganti Gambar Produk:</label>
                            <input type="file" name="image">
                        </div>


                        <div class="div_design">
                            <input type="submit" value="Update Product" class="btn btn-primary">
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