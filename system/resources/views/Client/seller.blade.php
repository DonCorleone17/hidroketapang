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
                            HIDROKETAPANG
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="container">  
                        @foreach($list_seller as $seller)
                    <div class="col-md-5 col-sm-5">
                        <div class="card" style="margin-bottom: 20px;">
                            <img style="width: 100%;" src="{{url("public/$seller->foto")}}" class="img-fluid">
                            <div class="card-body">
                                <h3 class="card-title">
                                   <b> {{$seller->nama}} </b>
                                </h3>
                                <p class="card-text">
                                    <h3><b>{{($seller->harga)}}</b></h3> <br>
                    
                
                                    Alamat : {{($seller->alamat)}}  | <br>
                    
                
                                    Owner : {{($seller->owner)}} | <br>
                                </p>
                                <a href="{{url('Client/desc', $seller->id)}}" class="btn btn-dark"> Info Lebih Lanjut </a>
                            </div>
                        </div>
                    </div>
                        @endforeach
                    </div>
                </div>
                <!-- /. ROW  -->
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <footer><p>HIDROPONIK 2020 | Hak Cipta Dilindungi</p></footer>
    </div>
        <!-- /. PAGE WRAPPER  -->
    <!-- /. WRAPPER  -->

@include('Client.template.js')

</body>

</html>