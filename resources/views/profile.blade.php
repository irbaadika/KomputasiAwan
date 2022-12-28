@extends('layouts.main')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">
        <div class="box fs-montserrat">
            @if ($user->photo == null)
                <img src="{{ asset('image/profile.png') }}" alt="{{ $user->username }}">
            @else
                <img src="{{ asset('storage/' . $user->photo) }}" alt="{{ $user->username }}">
            @endif
            <div class="mt-3">
                {{-- <a href="#buttonPhoto" data-toggle="modal" data-target="#buttonPhoto">Change profile</a> --}}
                <button type="button" class="btn btn-secondary" style="border: none; background:none; padding: 0;"
                    data-bs-toggle="modal" data-bs-target="#buttonPhoto">
                    Change Profile
                </button>
            </div>

            {{-- <p class="mt-2">Change profile</p> --}}
        </div>
        <div class="About fs-montserrat">
            <ul>
                <h1>Profile </button></h1>
            </ul>
            <ul>
                <h3>Name<button class="tombol button btn-sm mx-3 text-light bg-primary border-0" data-bs-toggle="modal"
                        data-bs-target="#buttonName">edit</button></h3>
                <li>{{ $user->name }}</li>
            </ul>
            <ul>
                <h3>Username<button class="tombol button btn-sm mx-3 text-light bg-primary border-0" data-bs-toggle="modal"
                        data-bs-target="#buttonUsername">edit</button></h3>
                <li>{{ $user->username }}</li>
            </ul>
            <ul>
                <h3>Email<button class="tombol button btn-sm mx-3 text-light bg-primary border-0" data-bs-toggle="modal"
                        data-bs-target="#buttonEmail">edit</button></h3>
                <li>{{ $user->email }}</li>
            </ul>
            <ul>
                <h3>Alamat<button class="tombol button btn-sm mx-3 text-light bg-primary border-0" data-bs-toggle="modal"
                        data-bs-target="#buttonAlamat">edit</button></h3>
                @if ($user->alamat_id == null)
                    <li>
                        <button class="tombol button btn-sm mx-3 text-light bg-primary border-0 mt-3" data-bs-toggle="modal"
                            data-bs-target="#buttonAlamat">Tambah Alamat</button>
                    </li>
                @else
                    <li>{{ $user->alamat->jalan }} kel.{{ $user->alamat->kelurahan }} kec.{{ $user->alamat->kecamatan }}
                        Kota {{ $user->alamat->kota }} Kode Pos {{ $user->alamat->kodePos }} </li>
                @endif

            </ul>
            <ul>
                <h3>Phone<button class="tombol button btn-sm mx-3 text-light bg-primary border-0" data-bs-toggle="modal"
                        data-bs-target="#buttonPhone">edit</button></h3>
                <li>{{ $user->phone }}</li>
            </ul>
        </div>
    </div>

    <!-- ================map===================== -->
    {{-- <div>
      <div class="map">
        <h4 class="fs-poppins fs-200 text-red">
          Google Maps API Key Is Messing
        </h4>
        <p class="fs-montserrat fs-100">
          In order to use google maps on your website, you have to create an
          api key and insert it in customizer "Google Maps API Key" field.
        </p>
      </div>
    </div> --}}
    </section>

    <!-- ===========Support Section==================== -->

    {{-- <section class="suport-container grid">
    <div class="support-info grid">
      <div class="suport-img grid">
        <img src="/image/sup-1.svg" alt="" />
      </div>
      <div>
        <p class="fs-100">
          <span class="fs-200 fs-poppins bold-700">Email:</span
          > info@yourdomain.com
        </p>
        <p class="fs-poppins fs-100">info@samplemail.com</p>
      </div>
    </div>
    <div class="support-info grid">
      <div class="suport-img grid">
        <img src="/image/sup-2.svg" alt="" />
      </div>
      <div>
        <p class="fs-100">
          <span class="fs-200 fs-poppins bold-700">Phone:</span
          > +99 (0) 101 0000 888
        </p>
        <p class="fs-poppins fs-100">+99 (0) 101 0000 888</p>
      </div>
    </div>
    <div class="support-info grid">
      <div class="suport-img grid">
        <img src="/image/sup-3.svg" alt="" />
      </div>
      <div>
        <p class="fs-100">
          <span class="fs-200 fs-poppins bold-700">Address:</span
          > Patricia C. 4401 Waldeck
        </p>
        <p class="fs-poppins fs-100">Street Grapevine Nashville, Tx 76051</p>
      </div>
    </div>
  </section> --}}

    <!-- ===================Contact Us======================== -->


    <!-- Modal -->
    <div class="modal fade" id="buttonPhoto" tabindex="-1" aria-labelledby="buttonPhotoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="buttonPhotoLabel">Change Profile</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="/admin/buyer/{{ $user->id }}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="photo" class="form-label @error('photo') is-invalid @enderror">Photo
                                Profile</label>
                            {{-- <img class="img-preview img-fluid mb-3 col-sm-5"> --}}
                            {{-- <input class="form-control" type="text" id="id" name="id" value="{{ $user->id }}"> --}}
                            <input type="hidden" name="oldPhoto" value="{{ $user->photo }}">
                            @if ($user->photo)
                                <img src="{{ asset('storage/' . $user->photo) }}"
                                    class="img-preview img-fluid mb-3 col-sm-5 d-block">
                            @else
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                            @endif
                            <input class="form-control" type="file" id="photo" name="photo"
                                onchange="previewImage()">
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
                <form method="post" action="/admin/buyer/{{ $user->id }}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="type" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name', $user->name) }}">
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

    <div class="modal fade" id="buttonUsername" tabindex="-1" aria-labelledby="buttonUsernameLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="buttonUsernameLabel">Change Username</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="/admin/buyer/{{ $user->id }}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="type" class="form-label">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror"
                                id="username" name="username" value="{{ old('username', $user->username) }}">
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
                <form method="post" action="/admin/buyer/{{ $user->id }}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="type" class="form-label">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                id="email" name="email" value="{{ old('email', $user->email) }}">
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
                <form method="post" action="/admin/buyer/{{ $user->id }}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="type" class="form-label">Phone Number</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                id="phone" name="phone" value="{{ old('phone', $user->phone) }}">
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
                    <h1 class="modal-title fs-5" id="buttonAlamatLabel">Change Address</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @if ($alamat->count())
                    <form method="post" action="/admin/buyer/{{ $user->id }}" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="alamat_id" class="form-label">Alamat</label>
                                    <select class="form-select" name="alamat_id">
                                        @foreach ($alamat as $a)
                                            @if (old('alamat_id') == $a->id)
                                                <option value="{{ $a->id }}" selected>{{ $a->jalan }}</option>
                                            @else
                                                <option value="{{ $a->id }}">{{ $a->jalan }}
                                                    Kel.{{ $a->kelurahan }} Kec.{{ $a->kecamatan }} Kota
                                                    {{ $a->kota }} {{ $a->kodePos }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#tambahAlamat">Tambah Alamat</button>
            </div>
        @else
            <div class="modal-body">
                <div class="mb-3">
                    Kosong
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#tambahAlamat">Tambah Alamat</button>
            </div>
            @endif

        </div>
    </div>
    </div>

    <div class="modal fade" id="tambahAlamat" tabindex="-1" aria-labelledby="tambahAlamatLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="buttonAlamatLabel">Tambah Alamat</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="/alamat">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <input type="hidden" class="form-control @error('user_id') is-invalid @enderror"
                                id="user_id" name="user_id" value="{{ $user->id }}">

                            <label for="type" class="form-label">Jalan</label>
                            <input type="text" class="form-control @error('jalan') is-invalid @enderror"
                                id="jalan" name="jalan">

                            <label for="type" class="form-label">Kelurahan</label>
                            <input type="text" class="form-control @error('kelurahan') is-invalid @enderror"
                                id="kelurahan" name="kelurahan">

                            <label for="type" class="form-label">Kecamatan</label>
                            <input type="text" class="form-control @error('kecamatan') is-invalid @enderror"
                                id="kecamatan" name="kecamatan">

                            <label for="type" class="form-label">Kota</label>
                            <input type="text" class="form-control @error('kota') is-invalid @enderror" id="kota"
                                name="kota">

                            <label for="type" class="form-label">Provinsi</label>
                            <input type="text" class="form-control @error('provinsi') is-invalid @enderror"
                                id="provinsi" name="provinsi">

                            <label for="type" class="form-label">KodePos</label>
                            <input type="text" class="form-control @error('kodePos') is-invalid @enderror"
                                id="kodePos" name="kodePos">
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
