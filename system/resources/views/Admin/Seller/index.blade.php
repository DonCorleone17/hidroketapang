@extends ('Admin.Template.base')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Toko Hidroponik</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mt-5">
            <div class="card">
              <div class="card-header">
					<h2>
					Data Toko Hidroponik
					</h2>
					<hr>
					<a href="{{ url('Admin/seller/create') }}">
					<button class="btn btn-primary" style="float: right;"> Tambah Data
					</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th> No </th>
                    <th> Aksi </th>
                    <th> Nama Toko Hidroponik </th>
                    <th> Alamat </th>
                    <th> Harga </th>
                  </tr>
                  </thead>
                 <tbody>
                  	@foreach($list_seller as $seller)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                    	<div class="btn btn-group">
							         <a href="{{ url('Admin/seller', $seller->id) }}" class="btn btn-primary"><i class="fa fa-info"></i></a>

							         <a href="{{ url('Admin/seller', $seller->id) }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>

							         @include ('Admin.Template.utils.delete', ['url' => url('Admin/seller', $seller->id)])
						          </div>
                    </td>
                    <td>{{$seller->nama}}</td>
                    <td>{{$seller->alamat}}</td>
                    <td>{{$seller->harga}}</td>
                  </tr>
                  @endforeach
              	</tbody>
                </table>
              	</div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
       	 </div>
    	</div>
	</div>
</section>

@endsection