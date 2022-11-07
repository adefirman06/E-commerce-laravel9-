<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="{{url ('/')}}"><img width="220" src="images/logoo.jpeg" alt="#" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url ('/')}}">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('about_me')}}">About Us</a></li>
                            <li><a href="{{ url('testimoni')}}">Testimonial</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('allproduct')}}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact_us')}}">Contact us</a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('show_cart')}}">Cart</a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url ('show_order') }}">Order</a>
                    </li>

                    <form class="form-inline">
                        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>

                    @if (Route::has('login'))

                    @auth

                    <li class="">
                        <x-app-layout>
                        </x-app-layout>

                    </li>


                    @else

                    <li class="nav-item">
                        <a class="btn btn-primary" id="logincss" href="{{ route('login')}}">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-success" href="{{ route('register')}}">Register</a>
                    </li>
                    @endauth

                    @endif

                </ul>
            </div>
        </nav>
    </div>
</header>

<!-- end header section -->