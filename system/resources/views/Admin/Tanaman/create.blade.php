@extends ('Admin.Template.base')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Tambah Produk Tanaman
				</div>
				<div class="card-body">
					<form action="{{ url('Admin/tanaman') }}" method="post" enctype="multipart/form-data">
						@csrf

					<div class="form-group">
						<label for="" class="control-label"> Nama Tanaman </label>
						<input type="text" class="form-control" name="nama">
					</div>
						<div class="row">
							<div class="col-md-12">
								<div class="card-body">
									<div class="form-group">
										<label for="" class="control-label"> Foto </label>
										<input type="file" class="form-control" name="foto" accept="image/*">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 mb-5">
								<button type="submit" class="btn btn-primary" style="float: right;"><i class="fa fa-save"> Simpan </i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection