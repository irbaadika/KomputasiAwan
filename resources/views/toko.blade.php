@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="card my-3 d-block" style="width: 90rem; position: relative;">
            <div class="card-body tokop">
                <div class="row fs-montserrat">
                    <div class="col-md-2 d-flex justify-content-center">
                        @if ($seller->photo == null)
                            <img src="{{ asset('image/shop.png') }}" alt="" style="height: 100px; border-radius: 5%;">
                        @else
                            <img src="{{ asset('storage/' . $seller->photo) }}" alt="" style="height: 100px; border-radius: 5%;">
                        @endif

                    </div>
                    {{-- <div class="vr"></div> --}}
                    <div class="col-md-4 border-start border-end">
                        <h1 class="my-1 ms-4"> <b> {{ $seller->toko }} </b></h1>
                        <div>
                            <a href="/service/{{ $seller->id }}" class="btn btn-secondary ms-4"><i class="bi bi-wrench-adjustable-circle-fill me-2"></i>Service</a>
                            <a href="/report/{{ $seller->id }}" class="btn btn-danger ms-1"><i class="bi bi-exclamation-diamond-fill me-2"></i>Report</a>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center" >
                        <div class="col-md-4 justify-content-center" style="align-items: center;">
                            <h6 class="me-5 mt-3 d-block" style="align-items: center;">Total Produk</h6>
                            <h2 class="d-block" style="align-items: center;"><b> {{ $product->count() }} Produk </b></h2>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <section class="shop-product grid">
            @foreach ($product as $p)
            <div class="product-list grid">
                <img src="{{ asset('storage/' . $p->photo) }}" alt="{{ $p->type }}" />
                <p class="fs-montserrat bold-600">{{ $p->type }}</p>
                <div class="shop-btn flex">
                  <a href="/product/" class="btn btn-danger bg-red text-white fs-montserrat">Add To Cart</a>
                  <p class="fs-montserrat bold-700">{{ currency_IDR($p->harga) }}</p>
                </div>
              </div>
            @endforeach
        </section>
    </div>




    <!-- =================Product Section======================= -->
@endsection
