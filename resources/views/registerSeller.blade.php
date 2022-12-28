@extends('layouts.main')
@section('content')

   <!-- ===================Shop Feature Section============================ -->

   <section class="shop-feature bg-gray grid">
    <div>
      <p class="fs-montserrat text-black">
        Home <span aria-hidden="true" class="margin">></span> Be a Seller
      </p>
    </div>
    <h2 class="fs-poppins fs-300 bold-700">Be a Seller</h2>
  </section>

  <!-- ===================Be a Seller======================== -->

  <section class="contact-us grid">
    <div class="contact-info">
      <div>
        <h1 class="fs-poppins text-red fs-200">Be a Seller</h1>
        <h3 class="fs-poppins text-black fs-400">Registration</h3>
        <p class="fs-montserrat fs-100">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda fugiat qui, ab porro tempore dolores quo laudantium ipsam quam nostrum perspiciatis aliquid sunt reiciendis sapiente placeat rerum minus ex repellendus.
        </p>
      </div>
      <form method="POST" action="/seller" class="contact-form grid" enctype="multipart/form-data">
        @csrf

        <div class="grid">
          <input class="form-control bg-gray text-black fs-poppins @error('toko') is-invalid @enderror" type="text" placeholder="Nama Toko" id="toko" name="toko" value="{{ old('toko') }}"/>
          @error('toko')
          <div class="invalid-feedback">
          {{ $message }}
          </div>
          @enderror
        </div>

        <div class="grid">
          <input class="form-control bg-gray text-black fs-poppins @error('npwp') is-invalid @enderror" type="text" placeholder="NPWP" id="npwp" name="npwp" value="{{ old('npwp') }}"/>
          @error('npwp')
          <div class="invalid-feedback">
          {{ $message }}
          </div>
          @enderror
        </div>

        <div class="grid">
          <input class="form-control bg-gray text-black fs-poppins @error('alamat') is-invalid @enderror" type="text" placeholder="Alamat Toko" id="alamat" name="alamat" value="{{ old('alamat') }}"/>
          @error('alamat')
          <div class="invalid-feedback">
          {{ $message }}
          </div>
          @enderror
        </div>

        <div class="grid pernyataan">
          <label for="doc" class="form-label fs-poppins fs-200 ms-4 mt-4">Surat Pernyataan</label>
          <p class="fs-poppins ms-4 mb-2">Silahkan mengisi surat pernyataan sesuai template yang diberikan</p>
          <div> 
            <a href="#" type="submit"><p class="my-3 ms-4"><i class="menu-icon mdi mdi-file-pdf mdi-36px icon-red me-2"></i>Template Surat Pernyataan</p></a>
              {{-- <a href="#" class="badge bg-danger mb-4 ms-4"><i class="menu-icon mdi mdi-file-pdf mdi-24px"></i>Template Surat Pernyataan</a> --}}
              {{-- <p class="d-inline align-self-center">Template Surat Pernyataan</p> --}}
          </div>
          <input class="form-control bg-gray text-black fs-poppins @error('doc') is-invalid @enderror" type="file" id="doc" name="doc">
          @error('doc')
          <div class="invalid-feedback">
          {{ $message }}
          </div>
          @enderror
        </div>
        {{-- <div>
          <textarea
            class="bg-gray text-black fs-poppins"
            rows="10"
            placeholder="Your Message Here"
          >
          </textarea>
        </div> --}}

        <div class="contact-btn">
          <button class="large-btn bg-red text-white fs-poppins fs-50">
            Submit
          </button>
        </div>
      </form>
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

@endsection