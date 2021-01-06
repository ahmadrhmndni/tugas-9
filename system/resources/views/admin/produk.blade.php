@extends('template.base')

@section('content')

<div class="card my-3">
	<div class="container">
		<h4>Halaman Produk</h4>
	</div>
  <div class="card-body">
    <div class="container">
    	<div class="col-12">
    		<div class="row row-cols-1 row-cols-md-3">

<!-- Daftar produk ( Bisa di hapus dari sini) -->

@foreach($list_produk as $produk)
			  <div class="col mb-4">
			    <div class="card h-100">
			      <img src="{{url('public/img/asus1.jpg')}}" class="       img-thumbnail card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">{{$produk->nama}}</h5>
			        <p class="card-text">AMD A4-9125, 4G, 1TB HDD/256GPpcle</p>
			        <p class="text-danger">Rp 3.899.000</p>
			        <button class="btn btn-primary">Pesan</button>
			      </div>
			    </div>
			  </div>

@endforeach
<!-- sampai disini -->

			</div>
    	</div>
    </div>
  </div>
</div>


@endsection