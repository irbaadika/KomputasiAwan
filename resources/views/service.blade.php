@extends('layouts.main')
@section('content')
    <!-- ===================Shop Feature Section============================ -->

    <section class="shop-feature bg-gray grid">
        <div>
            <p class="fs-montserrat text-black">
                Home <span aria-hidden="true" class="margin">></span> Service
            </p>
        </div>
        <h2 class="fs-poppins fs-300 bold-700">Service</h2>
    </section>

    <!-- ===================Service======================== -->

    <section class="contact-us grid">
        <div class="contact-info">
            <div>
                {{-- <h1 class="fs-poppins text-red fs-200">Service</h1> --}}
                <h3 class="fs-poppins text-black fs-400">Service</h3>
                <p class="fs-montserrat fs-100">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda fugiat qui, ab porro tempore dolores
                    quo laudantium ipsam quam nostrum perspiciatis aliquid sunt reiciendis sapiente placeat rerum minus ex
                    repellendus.
                </p>
            </div>
            <form method="POST" action="/service" class="contact-form grid" enctype="multipart/form-data">
                @csrf
                <input class="form-control" type="hidden" id="seller_id" name="seller_id" value="{{ $seller->id }}" />
                <input class="form-control" type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}" />
                <div class="grid">
                    <input class="form-control bg-gray text-black fs-poppins @error('type') is-invalid @enderror"
                        type="text" placeholder="Tipe Laptop" id="type" name="type"
                        value="{{ old('type') }}" />
                    @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="grid">
                    <input class="form-control bg-gray text-black fs-poppins @error('merk') is-invalid @enderror"
                        type="text" placeholder="Merk Laptop" id="merk" name="merk"
                        value="{{ old('merk') }}" />
                    @error('merk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="grid">
                    <input class="form-control bg-gray text-black fs-poppins @error('phone') is-invalid @enderror"
                        type="text" placeholder="No Hp" id="phone" name="phone" value="{{ old('phone') }}" />
                    @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="grid">
                    <label for="alamat_id" class="fs-poppins ms-4 mt-3">Alamat</label>
                    <select class="form-select alamat bg-gray text-black fs-poppins" name="alamat_id">
                        @foreach ($alamat as $a)
                            @if (old('alamat_id') == $a->id)
                                <option value="{{ $a->id }}" selected>{{ $a->jalan }} Kel.{{ $a->kelurahan }}
                                    Kec.{{ $a->kecamatan }} Kota {{ $a->kota }} {{ $a->kodePos }}</option>
                            @else
                                <option value="{{ $a->id }}">{{ $a->jalan }} Kel.{{ $a->kelurahan }}
                                    Kec.{{ $a->kecamatan }} Kota {{ $a->kota }} {{ $a->kodePos }}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('alamat_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="grid">
                    <label for="keterangan" class="fs-poppins ms-4 mt-3">Keterangan</label>
                    <textarea class="form-control bg-gray text-black fs-poppins @error('keterangan') is-invalid @enderror" id="keterangan"
                        name="keterangan" value="{{ old('keterangan') }}" rows="3"></textarea>
                    @error('keterangan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="grid pernyataan">
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input class="form-control bg-gray text-black fs-poppins @error('photo') is-invalid @enderror"
                        type="file" id="photo" name="photo" onchange="previewImage()">
                    @error('photo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="contact-btn">
                    <button class="large-btn bg-red text-white fs-poppins fs-50">
                        Submit
                    </button>
                </div>
            </form>
        </div>


    </section>
@endsection
