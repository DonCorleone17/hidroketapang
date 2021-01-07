<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

@include('Client.template.head')

<body>
    <div id="wrapper">
        @include('Client.template.nav')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <img src="{{url('public')}}/Client/assets/img/logo.png" style="width: 330px;">
                        <p>
                            Website yang dibuat untuk memudahkan Anda menemukan Tanaman Hidroponik dengan kualitas Nomor 1 di seputaran Kota Ketapang
                        </p>
                        <p>
                            <a class="btn btn-dark btn-lg" role="button" href="{{url('Client/seller')}}"> Temukan Lebih Banyak </a>
                        </p>
                    </div>
                </div>
            </div>
                <!-- /. ROW  -->
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <footer><p>HIDROKETAPANG 2020 | Hak Cipta Dilindungi</p></footer>
    </div>
        <!-- /. PAGE WRAPPER  -->
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
@include('Client.template.js')


</body>

</html>