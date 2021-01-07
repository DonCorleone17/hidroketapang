@extends ('Admin.Template.base')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tanaman</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>
<div class="container">
  <div class="row">
  <a href="{{ url('Admin/tanaman/create') }}">
  	<button class="btn btn-dark ml-3">
  		Tambah Data
  	</button>
  </a>
  </div>
<div class="row">
      @foreach($list_tanaman as $tanaman)
    <div class="col-md-4 col-sm-4">
        <div class="panel panel-default" style="margin-top: 30px; margin-left: 50px;">
            <div class="panel-heading">
              <h4>
                {{$tanaman->nama}}
              </h4>
            </div>
            <div class="panel-body">
                <img style="width: 250px;" src="{{url("public/$tanaman->foto")}}">
            </div>
        </div>
    </div>
      @endforeach
</div>
</div>


@endsection