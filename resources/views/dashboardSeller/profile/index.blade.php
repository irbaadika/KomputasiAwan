@extends('dashboardSeller.layouts.main')
@section('content')
    <div class="container mx-5 my-3">
        @if (session()->has('success'))
            <div class="alert alert-success col-lg-12" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box fs-montserrat mt-5">
                        @if ($seller->photo == null)
                            <img src="{{ asset('image/profile.png') }}" alt="{{ $seller->toko }}">
                        @else
                            <img src="{{ asset('storage/' . $seller->photo) }}" alt="{{ $seller->toko }}">
                        @endif
                        <div class="mt-3">
                            {{-- <a href="#buttonPhoto" data-toggle="modal" data-target="#buttonPhoto">Change profile</a> --}}
                            <button type="button" class="btn btn-secondary text-light"
                                style="border: none; background:none; padding: 0;" data-bs-toggle="modal"
                                data-bs-target="#buttonPhoto">
                                Change Profile
                            </button>
                        </div>

                        {{-- <p class="mt-2">Change profile</p> --}}
                    </div>
                </div>
                <div class="col">
                    <div class="About fs-montserrat">
                        <ul>
                            <h1>Profile </button></h1>
                        </ul>
                        <ul>
                            <h3>Nama Pemilik<button class="tombol button btn-sm mx-3 text-light bg-primary border-0"
                                    data-bs-toggle="modal" data-bs-target="#buttonName">edit</button></h3>
                            <li>{{ $seller->user->name }}</li>
                        </ul>
                        <ul>
                            <h3>Nama Toko<button class="tombol button btn-sm mx-3 text-light bg-primary border-0"
                                    data-bs-toggle="modal" data-bs-target="#buttonToko">edit</button></h3>
                            <li>{{ $seller->toko }}</li>
                        </ul>
                        <ul>
                            <h3>Email<button class="tombol button btn-sm mx-3 text-light bg-primary border-0"
                                    data-bs-toggle="modal" data-bs-target="#buttonEmail">edit</button></h3>
                            <li>{{ $seller->user->email }}</li>
                        </ul>
                        <ul>
                            <h3>Alamat<button class="tombol button btn-sm mx-3 text-light bg-primary border-0"
                                    data-bs-toggle="modal" data-bs-target="#buttonAlamat">edit</button></h3>
                            <li>{{ $seller->alamat }}</li>
                        </ul>
                        <ul>
                            <h3>Phone<button class="tombol button btn-sm mx-3 text-light bg-primary border-0"
                                    data-bs-toggle="modal" data-bs-target="#buttonPhone">edit</button></h3>
                            <li>{{ $seller->user->phone }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="buttonPhoto" tabindex="-1" aria-labelledby="buttonPhotoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="buttonPhotoLabel">Change Profile</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="/admin/seller/{{ $seller->id }}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="photo" class="form-label @error('photo') is-invalid @enderror">Photo
                                Profile</label>
                            {{-- <img class="img-preview img-fluid mb-3 col-sm-5"> --}}
                            {{-- <input class="form-control" type="text" id="id" name="id" value="{{ $seller->id }}"> --}}
                            <input type="hidden" name="oldPhoto" value="{{ $seller->photo }}">
                            @if ($seller->photo)
                                <img src="{{ asset('storage/' . $seller->photo) }}"
                                    class="img-preview img-fluid mb-3 col-sm-5 d-block">
                            @else
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                            @endif
                            <input class="form-control" type="file" id="photo" name="photo"
                                onchange="previewImage()">
                            @error('photo')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="buttonName" tabindex="-1" aria-labelledby="buttonNameLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="buttonNameLabel">Change Name</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="/admin/seller/{{ $seller->id }}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="type" class="form-label">Nama</label>
                            <input type="hidden" class="form-control" id="user_id" name="user_id"
                                value="{{ $seller->user->id }}">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name', $seller->user->name) }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="buttonToko" tabindex="-1" aria-labelledby="buttonTokoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="buttonTokoLabel">Change Nama Toko</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="/admin/seller/{{ $seller->id }}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="type" class="form-label">Nama Toko</label>
                            <input type="text" class="form-control @error('toko') is-invalid @enderror" id="toko"
                                name="toko" value="{{ old('toko', $seller->toko) }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="buttonEmail" tabindex="-1" aria-labelledby="buttonEmailLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="buttonEmailLabel">Change Email</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="/admin/seller/{{ $seller->id }}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="type" class="form-label">Email</label>
                            <input type="hidden" class="form-control" id="user_id" name="user_id"
                                value="{{ $seller->user->id }}">
                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                id="email" name="email" value="{{ old('email', $seller->user->email) }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="buttonAlamat" tabindex="-1" aria-labelledby="buttonAlamatLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="buttonAlamatLabel">Change Alamat</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="/admin/seller/{{ $seller->id }}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="type" class="form-label">Alamat</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                id="alamat" name="alamat" value="{{ old('alamat', $seller->alamat) }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="buttonPhone" tabindex="-1" aria-labelledby="buttonPhoneLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="buttonPhoneLabel">Change Phone Number</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="/admin/seller/{{ $seller->id }}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="type" class="form-label">Phone Number</label>
                            <input type="hidden" class="form-control" id="user_id" name="user_id"
                                value="{{ $seller->user->id }}">
                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                id="phone" name="phone" value="{{ old('phone', $seller->user->phone) }}">
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
