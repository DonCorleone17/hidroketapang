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
                        <h1 class="page-header">
                            TOKO HIDROPONIK
                        </h1>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row mt-5">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    Detail Toko Hidroponik
                                <div class="card-body">
                                    <h2>{{$seller->nama}}</h2>
                                    <hr>
                                    <p>
                                        <b>Fasilitas</b> <br>
                                        {!! nl2br ($seller->fasilitas) !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <img style="width: 100%;" src="{{url("public/$seller->foto")}}" class="img-fluid">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="page-header" style="margin-top: 20px;">
                                Boking
                            </h3>
                            <form role="form">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>No. HP</label>
                                    <input class="form-control">
                                </div>
                                <a class="btn btn-dark btn-lg" role="button" href="#">Pesan</a>
                            </form>
                        </div>
                    </div>
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

@include('Client.template.js')

</body>

</html>