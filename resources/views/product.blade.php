@extends('layouts.main')
@section('content')
    <!-- ==================Single Product-============================= -->

    <form  method="post" action="/cart">
      @csrf
      @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      {{-- <script>
        $(document).ready(function(){
          $(".modal-title").text("{{ session('success') }}");
          $(".modal-body p").text("Silahkan hubungi administrator untuk aktivasi akun anda agar bisa masuk");
          $("#myModalSuccess").modal('show');
        });
      </script> --}}
      @endif
    <section class="single-product grid">
      <input type="hidden" class="form-control" id="product_id" name="product_id" value="{{ $product->id }}">
      <input type="hidden" class="form-control" id="harga" name="harga" value="{{ $product->harga }}">
      <div>
        <img src="{{ asset('storage/' . $product->photo) }}" alt="" />
      </div>
      <div class="product-info grid">
        <h4 class="fs-poppins">{{ $product->merk->name }}</h4>
        <h1 class="fs-poppins fs-400 blod-900">{{ $product->type }}</h1>
        <div class="star-icon flex">
          <div>
            
            {{-- <i class="uil text-red uil-star"></i>
            <i class="uil text-red uil-star"></i>
            <i class="uil text-red uil-star"></i>
            <i class="uil text-red uil-star"></i>
            <i class="uil uil-star"></i> --}}
          </div>
          <div>
            {{-- <p class="fs-montserrat fs-100">(1 customer review)</p> --}}
          </div>
        </div>

        <div class="price">
          <p class="bold-700 fs-poppins fs-300">{{ currency_IDR($product->harga) }}</p>
        </div>

        <div>
          <p class="fs-montserrat lineheight">
            There are many variations passages of Lorem Ipsum available, but the
            majority have suffered alteration words some form by injected or
            randomized which don’t even slightly believable. If you are going to
            use a passage of Lorem Ipsum, you need to be sure there isn’t
            anything
          </p>
        </div>

        <div>
          <p class="fs-montserrat">Sisa stok {{ $product->stok }} buah</p>
        </div>
        <div class="product-add-cart flex">
          <input name="jumlah" type="number" min="0" max="10" class="bg-gray fs-poppins"/>
          <button class="product-btn large-btn bg-red text-white fs-poppins fs-50" type="submit">
            Add to cart
          </button>
        </div>

        <div>
          <p class="fs-montserrat text-red">
            <span class="text-black">Category: </span>{{ $product->category->name }}
          </p>
        </div>

        <div class="toko">
          <img src="{{ asset('image/profile.png') }}" alt="logo"/>
          <a href="/toko/{{ $product->seller_id }}"><p class="fs-montserrat">{{ $product->seller->toko }}</p></a>  
        </div>
      </div>
    </section>
  </form>

    <!-- ==================Single Product-============================= -->

    <!-- ==============Product Description====================== -->

    <section class="product-description grid">
      <div class="product-taps flex">
        <a id="dis-tab" class="fs-poppins fs-200 text-black bold-700 active-tab"
          >Description</a
        >
        <a
          id="rev-tab"
          class="fs-poppins fs-200 text-black bold-700 tabs-light-text"
          >Reviews(1)</a
        >
      </div>

      <div class="description grid" data-tab="false">
        <h3 class="text-black fs-poppins fs-300">Description</h3>
        <p class="fs-montserrat lineheight">
          There are many variations passages of Lorem Ipsum available, but the
          majority have suffered alteration words some form by injectedor
          randomized which don’t even slightly believable. If you are going to
          use a passage of Lorem Ipsum, you need to be sure there isn’t anything
          embarrassing hidden in the middle of text. All the Lorem Ipsum
          generators on the Internet tend to repeat predefined chunks as
          necessary, making this the first true generator on the Internet. It
          uses a dictionary of over 200 Latin words, combined with a handful of
          model sentence structures, to generate Lorem Ipsum which looks
          reasonable. The generated Lorem Ipsum is therefore always free from
          repetition, injected humour, or non-characteristic words etc.
        </p>
      </div>

      <article class="reviews-container" data-tab="false">
        <div class="reviews">
          <p class="text-black fs-poppins fs-200 bold-700">
            1 review for Rockey Mountain
          </p>
        </div>
        <div id="post-reviews">
          <div
            id="display-reviews"
            class="display-reviews bg-very-light-gray flex"
          >
            <div>
              <i class="uil text-black uil-user-circle"></i>
            </div>
            <div>
              <div class="connent-box">
                <i class="uil text-red uil-star"></i>
                <i class="uil text-red uil-star"></i>
                <i class="uil text-red uil-star"></i>
                <i class="uil text-red uil-star"></i>
                <i class="uil uil-star"></i>
                <p class="fs-poppins fs-200">
                  <span class="bold-700">Paul </span>- October 7, 2019
                </p>
                <p class="fs-poppins fs-200">Hello</p>
              </div>
              <div class="flex likes-icon">
                <i class="uil bg-gray uil-thumbs-up"></i>
                <i class="uil bg-gray uil-thumbs-down"></i>
                <span id="count-like" class="bg-white fs-poppins">0</span>
              </div>
            </div>
          </div>
        </div>

        <div class="grid">
          <div class="reviews">
            <p class="text-black fs-poppins fs-200">Add a review</p>
          </div>

          <div class="message grid">
            <p class="fs-montserrat">Your review</p>
            <textarea
              type="text"
              rows="10"
              class="bg-very-light-gray fs-montserrat"
            ></textarea>
          </div>
        </div>
        <div class="review-btn flex">
          <button id="add-connent" class="large-btn bg-red text-white fs-poppins fs-50">
            Submit
          </button>
        </div>
      </article>
    </section>

    <div id="myModalSuccess" class="modal fade ">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content ">
              <div class="modal-header bg-success">
                  <h5 class="modal-title"></h5>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
          <p></p>
          
              </div>
          </div>
      </div>
    </div>
    @endsection