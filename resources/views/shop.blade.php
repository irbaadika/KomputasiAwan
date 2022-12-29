@extends('layouts.main')
@section('content')
    <!-- ===================Shop Feature Section============================ -->

    <section class="shop-feature bg-gray grid">
      <div>
        <p class="fs-montserrat text-black">
          Home <span aria-hidden="true" class="margin">></span> Product
        </p>
      </div>
      <h2 class="fs-poppins fs-300 bold-700">Product</h2>
    </section>

    <!-- ===================Section 2---------------------- -->

   

    <main class="shop-main-container grid">
      <!-- -------------------Inner Section=============== -->

      <div>
        <div class="shop-title flex">
          {{-- <div>
            <h2 class="fs-poppins fs-300">Shop</h2>
            <p class="fs-montserrat">Showing 1-9 of 10 results</p>
          </div> --}}
          <div>
            <select name="text" id="" class="fs-poppins bg-black text-white">
              <option value="">Default Sorting</option>
              <option value="">Short By popularity</option>
              <option value="">Short By Average rating</option>
              <option value="">Short By latest</option>
              <option value="">Short By price: Low To High</option>
              <option value="">Short By price: High To Low</option>
            </select>
          </div>
        </div>
        <!-- ---------------End----Inner Section=============== -->

        <!-- ==============Shop-product====================== -->

        <section class="shop-product grid">
          @foreach ($product as $p)
            <div class="product-list grid">
              <img src="{{ asset('https://storage.googleapis.com/komputawan/' . $p->photo) }}" alt="" />
              <p class="fs-montserrat bold-600">{{ $p->type }}</p>
              <div class="shop-btn flex">
                {{-- <button class="bg-red text-white fs-montserrat">
                </button> --}}
                <a href="/product/{{ $p->id }}" class="btn btn-danger bg-red text-white fs-montserrat">Add To Cart</a>
                <p class="fs-montserrat bold-700">{{ currency_IDR($p->harga) }}</p>
              </div>
            </div>
          @endforeach
          <div class="product-list grid">
            <img src="image/p-3.png" alt="" />
            <p class="fs-montserrat bold-600">Asus ZenBook 2 Pro</p>
            <div class="shop-btn flex">
              <button class="bg-red text-white fs-montserrat"><a href="/product">Add To Cart</a>
              </button>
              <p class="fs-montserrat bold-700">$ 995.00</p>
            </div>
          </div>

          <div class="product-list grid">
            <img src="image/p-1.png" alt="" />
            <p class="fs-montserrat bold-600">Asus TUF Gaming</p>
            <div class="shop-btn flex">
              <button class="bg-red text-white fs-montserrat">
                Add To Cart
              </button>
              <p class="fs-montserrat bold-700">$ 995.00</p>
            </div>
          </div>
          <div class="product-list grid">
            <img src="image/p-2.png" alt="" />
            <p class="fs-montserrat bold-600">Lenovo Legion 5</p>
            <div class="shop-btn flex">
              <button class="bg-red text-white fs-montserrat">
                Add To Cart
              </button>
              <p class="fs-montserrat bold-700">$ 995.00</p>
            </div>
          </div>
          <div class="product-list grid">
            <img src="image/p-4.png" alt="" />
            <p class="fs-montserrat bold-600">Asus ROG Strix</p>
            <div class="shop-btn flex">
              <button class="bg-red text-white fs-montserrat">
                Add To Cart
              </button>
              <p class="fs-montserrat bold-700">$ 995.00</p>
            </div>
          </div>

          <div class="product-list grid">
            <img src="image/p-3.png" alt="" />
            <p class="fs-montserrat bold-600">Laptop</p>
            <div class="shop-btn flex">
              <button class="bg-red text-white fs-montserrat">
                Add To Cart
              </button>
              <p class="fs-montserrat bold-700">$ 995.00</p>
            </div>
          </div>
          <div class="product-list grid">
            <img src="image/p-3.png" alt="" />
            <p class="fs-montserrat bold-600">Laptop</p>
            <div class="shop-btn flex">
              <button class="bg-red text-white fs-montserrat">
                Add To Cart
              </button>
              <p class="fs-montserrat bold-700">$ 995.00</p>
            </div>
               <!-- ===============Pop-Up========================== -->

               <div class="pup-up">
                <p class="fs-poppins">Sell</p>
            </div>

            <!-- ===============Pop-Up========================== -->
          </div>
          <div class="product-list grid">
            <img src="image/p-3.png" alt="" />
            <p class="fs-montserrat bold-600">Laptop</p>
            <div class="shop-btn flex">
              <button class="bg-red text-white fs-montserrat">
                Add To Cart
              </button>
              <p class="fs-montserrat bold-700">$ 995.00</p>
            </div>
          </div>
        </section>

        <div class="next-page fs-poppins flex ">
            <span class="bg-red text-white active bold-800">1</span>
            <span class="bold-800 text-black">2</span>
            <span><i class="uil text-red uil-angle-double-right"></i></span>
        </div>
      </div>
      <!-- ==============Shop-product====================== -->
      <section>
        <div class="sidebar-search text-black bg-gray flex">
          <input
            type="text"
            placeholder="Search Here"
            class="fs-montserrat bg-gray"
          />
          <div>
            <i class="uil bg-red text-white uil-search"></i>
          </div>
        </div>

        <aside class="sidebar-category">
          <div class="category-list flex">
            <h3 class=" fs-poppins bold-700 fs-200">Product Categories</h3>
            <i id="arrow" class="uil uil-angle-right" data-category="false"></i>
          </div>

          <div class="shop-category-list">
            <ul id="side-nav" class="sidebar-nav grid" data-category="false">
              <li>
                <a class="fs-montserrat text-black bold-500" href="#"
                  >Earphone</a
                >
              </li>
              <li>
                <a class="fs-montserrat text-black bold-500" href="#"
                  >Gadgets</a
                >
              </li>
              <li>
                <a class="fs-montserrat text-black bold-500" href="#">Gaming</a>
              </li>
              <li>
                <a class="fs-montserrat text-black bold-500" href="#"
                  >Headphone</a
                >
              </li>
              <li>
                <a class="fs-montserrat text-black bold-500" href="#">Laptop</a>
              </li>
              <li>
                <a class="fs-montserrat text-black bold-500" href="#"
                  >Speaker</a
                >
              </li>
              <li>
                <a class="fs-montserrat text-black bold-500" href="#"
                  >Uncategorized</a
                >
              </li>
            </ul>
          </div>
        </aside>
      </section>
    </main>
@endsection
