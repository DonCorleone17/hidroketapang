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
                            TANAMAN
                        </h1>
                    </div>
                </div>

                <div class="row">
                    @foreach($list_tanaman as $tanaman)
                    <div class="col-md-4 col-sm-4">
                        <div class="panel panel-default" style="margin-top: 30px;">
                            <div class="panel-heading">
                            <h3>
                                {{$tanaman->nama}}
                            </h3>
                            </div>
                            <div class="panel-body">
                                <img style="width: 280px;" src="{{url("public/$tanaman->foto")}}">
                            </div>
                        </div>
                    </div>
                    @endforeach
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