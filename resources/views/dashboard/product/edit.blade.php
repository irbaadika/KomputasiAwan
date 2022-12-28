@extends('dashboard.layouts.main')
@section('content')
   
  <div class="col-lg-8 mx-5 mt-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Produk</h1>
      </div>
      <form method="post" action="/admin/product/{{ $product->id }}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="merk_id" class="form-label">Merk</label>
           <select class="form-select" name="merk_id" >
              @foreach ($merk as $m)
              @if (old('merk_id', $product->merk_id) == $m->id)
                <option value="{{ $m->id }}" selected>{{ $m->name }}</option>
              @else
                <option value="{{ $m->id }}">{{ $m->name }}</option>
              @endif
              @endforeach
           </select>
          </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type Produk</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ old('type', $product->type) }}">
              @error('type')
              <div class="invalid-feedback">
              {{ $message }}
              </div>
              @enderror
          </div>
          <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi Singkat</label>
            <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" value="{{ old('deskripsi', $product->deskripsi) }}">
              @error('deskripsi')
              <div class="invalid-feedback">
              {{ $message }}
              </div>
              @enderror
          </div>
          <div class="mb-3">
            <label for="category_id" class="form-label">Kategori</label>
           <select class="form-select" name="category_id" >
              @foreach ($category as $c)
              @if (old('category_id', $product->category_id) == $c->id)
                <option value="{{ $c->id }}" selected>{{ $c->name }}</option>
              @else
                <option value="{{ $c->id }}">{{ $c->name }}</option>
              @endif
              @endforeach
           </select>
          </div>
          <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="text" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{ old('stok', $product->stok) }}">
              @error('stok')
              <div class="invalid-feedback">
              {{ $message }}
              </div>
              @enderror
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga', $product->harga) }}">
              @error('harga')
              <div class="invalid-feedback">
              {{ $message }}
              </div>
              @enderror
          </div>
          <div class="mb-3">
            <label for="photo" class="form-label @error('photo') is-invalid @enderror">Photo Admin</label>
            <input type="hidden" name="oldPhoto" value="{{ $product->photo }}">
            @if ($product->photo)
            <img src="{{ asset('storage/' . $product->photo) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
            <img class="img-preview img-fluid mb-3 col-sm-5">
            @endif
            <input class="form-control" type="file" id="photo" name="photo"  onchange="previewImage()">
            @error('photo')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror
          </div>
          
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>

@endsection