<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link rel="shortcut icon" href="images/favicon.jpeg" type="">
    <title>Onlineku - toko online masa kini</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />
    <style type="text/css">
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }

        .about-section {
            padding: 50px;
            text-align: center;
            background-color: #474e5d;
            color: white;
        }

        .container {
            padding: 0 16px;
        }

        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: #555;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }
    </style>
</head>

<body>
    <div class="hero_area">
        <!-- ?/header -->
        @include('home.header')
        <!-- slider section -->
        <section class="inner_page_head">
            <div class="container_fuild">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <h3>About us</h3>
                            <p>Kami kelompok 3 workshop webdev</p>
                            <p>Membuat web belanja online secara sederhana.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <h2 style="text-align:center; margin: auto; padding: 30px;">Kelompok 3</h2>
        <div class="row" style="margin: auto;  padding-bottom: 20px;">
            <div class="column" style="margin: auto;">
                <div class="card" style="align-items: center;">
                    <img src=" images/client1.jpg" alt="Jane" style="width: 90%; padding-bottom: 20px;">
                    <div class="container" style="padding: 20px;">
                        <h2 style="text-align: center;">Ade Firmansyah</h2>
                        <p class="title">Proggrammer</p>
                        <p>Jadi Proggrammer cita cita saya</p>
                        <p>Ade.firmansyah06062@gmail.com</p>
                        <p><button class="button">Contact</button></p>
                    </div>
                </div>
            </div>

            <div class="column" style="margin: auto;">
                <div class="card" style="align-items: center;">
                    <img src=" images/client2.jpg" alt=" Mike" style="width:90%;">
                    <div class="container" style="padding: 20px;">
                        <h2 style="text-align: center;">M. Innaka Akbar Lubis</h2>
                        <p class=" title">Art Director</p>
                        <p>jadi programmer cita cita saya.</p>
                        <p>kakaakbar299@gmail.com</p>
                        <p><button class="button"">Contact</button></p>
                    </div>
                </div>
            </div>


        </div>

        <!-- end client ection -->
        <!-- footer start -->

        <!-- footer end -->
        <div class=" cpy_">
                                <p class="mx-auto">© 2022 All Rights Reserved By <a href="https://html.design/">TKJ27</a><br>

                                    Distributed By <a href="https://KELOMPOK 3.com/" target="_blank">KELOMPOK 3</a>

                                </p>
                    </div>
                    <!-- jQery -->
                    <script src="home/js/jquery-3.4.1.min.js"></script>
                    <!-- popper js -->
                    <script src="home/js/popper.min.js"></script>
                    <!-- bootstrap js -->
                    <script src="home/js/bootstrap.js"></script>
                    <!-- custom js -->
                    <script src="home/js/custom.js"></script>
</body>

</html>