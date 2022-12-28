@extends('dashboard.layouts.main')

@section('content')
  
<div class="container my-5">
    <div class="row justify-content-center align-items-center">
        <div class="card"  style="width: 30rem;">
            @if ($product->photo == null)
                
            @else
                <img src="{{ asset('storage/' . $product->photo ) }}" class="card-img-top" alt="{{ $product->type }}">
            @endif
            
            <div class="card-header ">
              Detail product
            </div>
            <div class="card body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Seller : </b>{{ $product->seller->toko }}</li>
                    <li class="list-group-item"><b>Merk : </b>{{ $product->merk->name }}</li>
                    <li class="list-group-item"><b>Kategori : </b>{{ $product->category->name}}</li>
                    <li class="list-group-item"><b>Deskripsi : </b>{{ $product->deskripsi }}</li>
                    <li class="list-group-item"><b>Stok : </b>{{ $product->stok }}</li>
                    <li class="list-group-item"><b>Harga : </b>{{ currency_IDR($product->harga) }}</li>
            </div>
            <a class="btn btn-success mt-3 mb-3" href="/admin/product">kembali</a>
        </div>
    </div>
</div>


@endsection
