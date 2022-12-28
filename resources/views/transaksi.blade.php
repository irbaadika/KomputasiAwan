@extends('layouts.main')
@section('content')
    <!-- ===================Shop Feature Section============================ -->
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
    <section class="shop-feature bg-gray grid">
        <div>
            <p class="fs-montserrat text-black">
                Home <span aria-hidden="true" class="margin">></span> Transactions
            </p>
        </div>
        <h2 class="fs-poppins fs-300 bold-700">Transactions</h2>
    </section>

    <!-- ===============================Cart Section=================== -->

    <section class="table">
        @if ($transaksi->count())
            <table>
                <thead class="thead fs-poppins text-black bold-700 bg-very-light-gray">
                    <tr>
                        <td>Image</td>
                        <td>Product</td>
                        <td>Quantity</td>
                        <td>Harga</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($transaksi as $t)
                        <tr>
                            <td>
                                <a href="/product/{{ $t->product->id }}"> <img src="{{ asset('storage/' . $t->product->photo) }}" alt="" style="height: 200px; "></a>
                            </td>
                            <td>{{ $t->product->type }}</td>
                            <td>{{ $t->jumlah }} pcs</td>
                            <td>{{ currency_IDR($t->harga) }}</td>
                            <td>
                                @if ($t->verify == 0)
                                <h4><span class="badge bg-warning text-black"><i class="bi bi-dash-circle-dotted me-2"></i>Menunggu Verifikasi...</span></h4>
                                @else
                                <h4><span class="badge bg-success"><i class="bi bi-check-circle me-2"></i>Transaksi Selesai</span><h4>
                                @endif
                            </td>
                        </tr>
                    @endforeach
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    {{$transaksi->links()}}
                </ul>
            </nav>
        @else
            <h3 class="fs-poppins text-black text-center">Belum ada Tranasaksi</h3>
        @endif
        </tbody>

    </section>

@endsection
