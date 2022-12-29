@extends('dashboardSeller.layouts.main')
@section('content')


<div class="container mx-5 mt-4">
 

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h1 class="h2">Data Product</h1>
      </div>
        @if (session()->has('successAdd'))
      {{-- <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
      </div> --}}
      <script>
        $(document).ready(function(){
          $(".modal-title").text("Success !!");
          $(".modal-body p").text("{{ session('successAdd') }}");
          $("#myModal1").modal('show');
        });
      </script>
        @elseif(session()->has('success'))
        <script>
          $(document).ready(function(){
            $(".modal-title").text("Success!!");
            $(".modal-body p").text("{{ session('success') }}");
            $("#myModal").modal('show');
          });
        </script>
        @endif

    <div class="row">
        @if ($product -> count())
            @foreach ($product as $p)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div style="max-height: 500px; overflow:hidden">
                            <img src="{{ asset('https://storage.googleapis.com/komputawan/' . $p->photo) }}" class="card-img-top" alt="{{ $p->type }}">
                        </div>
                        <div class="card-body">
                        <h5 class="card-title">{{ $p->type }}</h5>
                        <p class="card-text">{{ $p->merk->name }}</p>
                        <p class="card-text mb-4">{{ currency_IDR($p->harga) }}</p>
                        {{-- <p class="card-text"><small class="text-muted">Last updated {{ $p->created_at->diffForHumans() }}</small></p> --}}
                        <a href="/sellerProduct/{{ $p->id }}" class="badge bg-info"><span class="menu-icon mdi mdi-eye"></span></a>
                        <a href="/sellerProduct/{{ $p->id }}/edit" class="badge bg-warning"><span class="menu-icon mdi mdi-circle-edit-outline"></span></a>
                        <form action="/sellerProduct/{{ $p->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin?')" ><span class="menu-icon mdi mdi-backspace"></button>
                        </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
        <hr class="hr hr-blurry w-100" />
        <h3>Product belum tersedia</h3>
        @endif
        <div class="d-flex justify-content-center">
          {{ $product->links() }}
        </div>
        <div id="myModal" class="modal fade ">
          <div class="modal-dialog">
              <div class="modal-content ">
                  <div class="modal-header bg-success text-center">
                      <h5 class="modal-title"></h5>
                      
                  </div>
                  <div class="modal-body">
              <p></p>
              
                  </div>
              </div>
          </div>
        </div>
    </div>
   
</div>


@endsection