@extends ('Admin.Template.base')
@section('content')

<div class="container-fluid">
	<div class="row mt-5">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					Detail Toko Hidroponik
				<div class="card-body">
					<h2>{{$seller -> nama}}</h2>
					<hr>
					<p>
						<h3><b>{{($seller->harga)}}</b></h3> <br>
					
				
						Alamat : {{($seller->alamat)}}  | <br>
					
				
						Owner : {{($seller->owner)}} | <br>
					</p>
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
	</div>
</div>
</div>

@endsection