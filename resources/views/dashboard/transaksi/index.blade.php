@extends('dashboard.layouts.main')
@section('content')
   
  <div class="table-responsive col-lg-8 mx-5 mt-4">
    <table class="table table-striped table-sm">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Transaksi</h1>
      </div>
        @if (session()->has('success'))
      <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
      </div>
      @endif
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Type</th>
          <th scope="col">Buyer</th>
          <th scope="col">Seller</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Harga</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($transaksi as $t)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $t->product->type }}</td>
          <td>{{ $t->user->name }}</td>
          <td>{{ $t->seller->toko }}</td>
          <td>{{ $t->jumlah }}</td>
          <td>{{ currency_IDR($t->harga) }}</td>
          <td>
            @if ($t->verify == 0)
                <span class="badge bg-warning text-black"><i class="bi bi-dash-circle-dotted me-2"></i>Pending</span>
            @else
                <span class="badge bg-success"><i class="bi bi-check-circle me-2"></i>Success</span>
            @endif
          </td>
        </tr>
        @endforeach    
      </tbody>
    </table>
    <div class="d-flex justify-content-center">
      {{ $transaksi->links() }}
    </div>
  </div>

@endsection