@extends('dashboard.layouts.main')
@section('content')
   
  <div class="table-responsive col-lg-8 mx-5 mt-4">
    <table class="table table-striped table-sm">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Produk</h1>
      </div>
        @if (session()->has('success'))
      <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
      </div>
      @endif
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Seller</th>
          <th scope="col">Merk</th>
          <th scope="col">Type</th>
          <th scope="col">Kategori</th>
          <th scope="col">Stok</th>
          <th scope="col">Harga</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($product as $p)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $p->seller->toko }}</td>
          <td>{{ $p->merk->name }}</td>
          <td>{{ $p->type }}</td>
          <td>{{ $p->category->name }}</td>
          <td>{{ $p->stok }}</td>
          <td>{{ currency_IDR($p->harga) }}</td>
          <td>
            <a href="/admin/product/{{ $p->id }}" class="badge bg-info"><span class="menu-icon mdi mdi-eye"></span></a>
            <a href="/admin/product/{{ $p->id }}/edit" class="badge bg-warning"><span class="menu-icon mdi mdi-circle-edit-outline"></span></a>
            <form action="/admin/product/{{ $p->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin?')" ><span class="menu-icon mdi mdi-backspace"></button>
            </form>
          </td>
        </tr>
        @endforeach    
      </tbody>
    </table>
    <div class="d-flex justify-content-center">
      {{ $product->links() }}
    </div>
  </div>

@endsection