@extends('dashboardSeller.layouts.main')

@section('content')
  
<div class="container my-5">
    <div class="row justify-content-center align-items-center">
        <div class="card"  style="width: 30rem;">
            @if ($service->photo == null)
                
            @else
                <img src="{{ asset('storage/' . $service->photo ) }}" class="card-img-top" alt="{{ $service->type }}">
            @endif
            
            <div class="card-header ">
              Detail service
            </div>
            <div class="card body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Buyer : </b>{{ $service->user->name }}</li>
                    <li class="list-group-item"><b>Type : </b>{{ $service->type }}</li>
                    <li class="list-group-item"><b>Merk : </b>{{ $service->merk }}</li>
                    <li class="list-group-item"><b>Phone : </b>{{ $service->phone }}</li>
                    <li class="list-group-item"><b>Alamat : </b>{{ $service->alamat->jalan }} kel.{{ $service->alamat->kelurahan }} kec.{{ $service->alamat->kecamatan }} Kota {{ $service->alamat->kota }} Kode Pos {{ $service->alamat->kodePos }}</li>
                    <li class="list-group-item"><b>Keterangan : </b>{{ $service->keterangan }}</li>
            </div>
            <a class="btn btn-success mt-3 mb-3" href="/sellerService">kembali</a>
        </div>
    </div>
</div>


@endsection
