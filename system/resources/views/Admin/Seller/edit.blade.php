@extends ('Admin.Template.base')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Edit Data Toko Hidroponik
				</div>
				<div class="card-body">
					<form action="{{ url('Admin/seller') }}" method="post" enctype="multipart/form-data">
						@csrf

					<div class="form-group">
						<label for="" class="control-label"> Nama Toko Hidroponik </label>
						<input type="text" class="form-control" value="{{$seller->nama}}" name="nama">
					</div>
				<div class="row">
					<div class="col-md-3">
						<div class="card-body">
							<div class="form-group">
								<label for="" class="control-label"> Harga </label>
								<input type="text" class="form-control" value="{{$seller->harga}}" name="harga">
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card-body">
							<div class="form-group">
								<label for="" class="control-label"> Pemilik </label>
								<input type="text" class="form-control" value="{{$seller->owner}}" name="owner">
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card-body">
							<div class="form-group">
								<label for="" class="control-label"> Alamat </label>
								<input type="text" class="form-control" value="{{$seller->alamat}}" name="alamat">
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card-body">
							<div class="form-group">
								<label for="" class="control-label"> Foto </label>
								<input type="file" class="form-control" name="foto" accept="image/*">
							</div>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label for="" class="control-label"> Fasilitas </label>
						<textarea name="fasilitas" id="fasilitas" class="form-control"></textarea>
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

@push('style')
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('script')
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
	<script>
		$(document).ready(function() {
  		$('#fasilitas').summernote();
		});
	</script>
@endpush