<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <base href="">
    <title>A simple, clean, and responsive HTML invoice template</title>

    <style>
        @media print {
            .invoice-box {
                max-width: unset;
                box-shadow: none;
                border: 0px;
            }
        }

        .invoice-box rtl {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .invoice-box.rtl table {
            text-align: right;
        }

        .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="images/logoo.jpeg" style="width: 100%; max-width: 300px" />
                            </td>

                            <td>
                                Invoice #: 123<br />
                                Created: January 1, 2015<br />
                                Due: February 1, 2015
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                JualanAja.Inc.<br />
                                Pengasinan Depok<br />
                                Struk Belanja
                            </td>

                            <td>
                                Rumah Gemilang Indonesia<br />
                                Ade Firmansyah & M.Innaka Akbar<br />
                                Kelompok 3
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>



            <tr class="heading">
                <td>Customer</td>

                <td></td>
            </tr>

            <tr class="item">
                <td>Nama </td>

                <td>{{$order->name}}</td>
            </tr>

            <tr class="item">
                <td>Id</td>

                <td>{{$order->user_id}}</td>
            </tr>
            <tr class="item">
                <td>Email</td>

                <td>{{$order->email}}</td>
            </tr>
            <tr class="item">
                <td>Nomer Telepon</td>

                <td>{{$order->phone}}</td>
            </tr>
            <tr class="item">
                <td>Alamat</td>

                <td>{{$order->address}}</td>
            </tr>

            <tr class="heading">
                <td>Produk</td>

                <td></td>
            </tr>



            <tr class="item">
                <td>Nama</td>

                <td>{{$order->product_title}}</td>
            </tr>

            <tr class="item">
                <td>Id</td>

                <td>{{$order->id}}</td>
            </tr>

            <tr class="item">
                <td>Harga</td>

                <td>@currency($order->price)</td>
            </tr>

            <tr class="item">
                <td>Jumlah</td>

                <td>{{$order->quantity}}</td>
            </tr>


            <tr class="heading">
                <td>Pembayaran</td>

                <td></td>
            </tr>

            <tr class="details">
                <td>Status</td>

                <td>{{$order->payment_status}}</td>
             
            </tr>

            <tr class="total">
                <td></td>

                <td>Total: @currency($order->price)</td>
            </tr>
        </table>
    </div>
</body>

</html>