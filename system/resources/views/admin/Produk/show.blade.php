@extends('template.base')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Detail Data Produk
					</div>
					<div class="card-body">
						<h2>{{$produk->nama}}</h2>
						<hr>
						<p>
							{{$produk->harga}}  |
							Stok : {{$produk->stok}}  |
							Berat : {{$produk->berat}}gr |
							Seller : {{$produk->seller->username}} |
							Tanggal Produksi  : {{$produk->created_at->diffForHumans()}}
						</p>
						<p>
							{!! nl2br($produk->deskripsi) !!}
						</p>
						<p>
							<img src="{{url("public/$produk->foto")}}" height="155px" width = "315px">
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection