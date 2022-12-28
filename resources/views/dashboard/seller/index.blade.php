@extends('dashboard.layouts.main')
@section('content')
   
  
  
  <div class="table-responsive col-lg-8 mx-5 mt-4">
    {{-- <a href="/dashboard/product/create" class="btn btn-primary mb-3">Tambah seller</a> --}}
    @if ($user->count())
    <table class="table table-striped table-sm">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Seller</h1>
      </div>
        @if (session()->has('success'))
      <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
      </div>
      @endif
      <thead>
        <tr>
          <th scope="col">Pemilik</th>
          <th scope="col">Nama Toko</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">NPWP</th>
          <th scope="col">Verify</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($user as $u)

        <tr>
          <td>{{ $u->name }}</td>
          <td>{{ $u->seller->toko }}</td>
          <td>{{ $u->email }}</td>
          <td>{{ $u->phone }}</td>
          <td>{{ $u->seller->npwp }}</td>
          <td>       
              @if( $u->seller->verify  == 0)
              <form action="/verifySeller/{{ $u->id }}" method="get" class="d-inline">
              @csrf
              {{-- <input type="hidden" name="id" value="{{ $u->id }}"> --}}
              <button type="submit" class="badge bg-warning border-0" >Verify</button>
              </form>

              @else
              <form action="/blockSeller/{{ $u->id }}" method="get" class="d-inline">
              @csrf
              {{-- <input type="hidden" name="id" value="{{ $u->id }}"> --}}
              <button type="submit" class="badge bg-success border-0" >Verified</button>
              </form>

              @endif
            
          </td>
          <td>
            <a href="/admin/seller/{{ $u->id }}" class="badge bg-info"><span class="menu-icon mdi mdi-eye"></span></a>
            {{-- <a href="/admin/seller/{{ $u->id }}/edit" class="badge bg-warning"><span class="menu-icon mdi mdi-circle-edit-outline"></span></a> --}}
            <form action="/admin/seller/{{ $u->seller->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ $u->id }}">
              <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin?')" ><span class="menu-icon mdi mdi-backspace"></button>
            </form>
          </td>
        </tr>
        
        @endforeach    
      </tbody>
    </table>
    @else
    <hr class="hr hr-blurry w-100" />
    <h3>Seller belum tersedia</h3>
    @endif
    <div class="d-flex justify-content-center">
      {{ $user->links() }}
    </div>
  </div>

@endsection