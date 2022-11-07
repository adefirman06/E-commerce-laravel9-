<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Produk <span>Kami</span>
            </h2>
                <br><br>
                
                <div>

                    <form action=" {{ url('product_search') }}" method="GET">
                        @csrf

                        <input  style="width: 700px" type="text" name="search" placeholder="Cari Sesuatu">
                        <input type="submit" value="cari">
                    </form>


                </div>
        </div>
        <div class="row" style="margin: auto; ">
            @foreach ($product as $products)
            <div class="col-sm-6 col-md-4 col-lg-4" >
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="{{url ('product_detail',$products->id)}}" class="option1">
                                Detail Produk
                            </a>

                            <form action="{{url ('add_cart',$products->id)}}" method="Post">

                                @csrf
                                <div class="row">

                                    <div class="col-md-3">
                                        <input type="number" name="quantity" value="1" min="1" width="100%">

                                    </div>

                                    <div class="col-md-3">
                                        <input type="submit" value="Masukan ke Keranjang">

                                    </div>

                                </div>

                            </form>

                        </div>
                    </div>
                    <div class="img-box">
                        <img src="product/{{$products->image}}" alt="" width="70%" height="150px">
                    </div>
                    <div class="detail-box">
                        <h5>
                            {{$products->title}}
                        </h5>

                        @if($products->discount_price!=null)

                        <h6 style="color: red;">
                            Diskon <br>
                            @currency($products->discount_price)
                        </h6>

                        <h6 style="text-decoration: line-through; color: blue;">
                            Harga <br>
                            @currency($products->price)
                        </h6>

                        @else

                        <h6 style="color: blue;">
                            Harga <br>
                            @currency($products->price)
                        </h6>

                        @endif

                    </div>
                </div>
            </div>
            @endforeach
            <span style="padding-top: 20px">


            </span>
        </div>
        <!-- <div class="btn-box">
              <a href="{{ url('/allproduct')}}">
                  View All products
              </a>
          </div> -->
    </div>
</section>