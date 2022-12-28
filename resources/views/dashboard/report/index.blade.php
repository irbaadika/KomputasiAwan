@extends('dashboard.layouts.main')
@section('content')
    <div class="table-responsive col-lg-8 mx-5 mt-4">
        <table class="table table-striped table-sm">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Data Pengaduan</h1>
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
                    <th scope="col">Buyer</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($report as $r)
                    <!-- Modal -->
                    <div class="modal fade " id="orderModal{{ $r->id }}"
                        aria-labelledby="orderModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="orderModalLabel">Laporan Pengaduan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="card text-center">
                                    <img src="{{ asset('storage/' . $r->bukti) }}" class="card-img-top"
                                        alt="{{ $r->subject }}">
                                        <h5 class="card-title mt-3">{{ $r->subject }}</h5>
                                        <p class="card-text mt-2 mb-4">{{ $r->content }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $r->seller->toko }}</td>
                        <td>{{ $r->user->name }}</td>
                        <td>{{ $r->subject }}</td>
                        <td>
                            <a href="#orderModal{{ $r->id }}" data-bs-toggle="modal" class="badge bg-info"><span class="menu-icon mdi mdi-eye"></span></a>
                            {{-- <a href="/admin/report/{{ $r->id }}/edit" class="badge bg-warning"><span class="menu-icon mdi mdi-circle-edit-outline"></span></a>
            <form action="/admin/report/{{ $r->id }}" method="post" class="d-inline">
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
            {{ $report->links() }}
        </div>
    </div>
@endsection
