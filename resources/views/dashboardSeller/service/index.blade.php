@extends('dashboardSeller.layouts.main')
@section('content')
    <div class="table-responsive col-lg-8 mx-5 mt-4">
        <table class="table table-striped table-sm">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Data Service</h1>
            </div>
            @if (session()->has('success'))
                <div class="alert alert-success col-lg-12" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Buyer</th>
                    <th scope="col">Type</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($service as $s)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $s->user->name }}</td>
                        <td>{{ $s->type }}</td>
                        <td>{{ $s->merk }}</td>
                        <td>{{ $s->phone }}</td>
                        <td>{{ $s->alamat->kota }}</td>
                        <td>
                            <a href="sellerService/{{ $s->id }}" class="badge bg-info"><span class="menu-icon mdi mdi-eye"></span></a>
                            {{-- <a href="/admin/service/{{ $s->id }}/edit" class="badge bg-warning"><span class="menu-icon mdi mdi-circle-edit-outline"></span></a>
            <form action="/admin/service/{{ $s->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin?')" ><span class="menu-icon mdi mdi-backspace"></button>
            </form> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $service->links() }}
        </div>
    </div>
@endsection
