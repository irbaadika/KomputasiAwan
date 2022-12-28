@extends('dashboard.layouts.main')
@section('content')
   
  <div class="col-lg-8 mx-5 mt-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Seller</h1>
      </div>
      <form method="post" action="/admin/seller/{{ $user->seller->id }}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ $user->id }}">
        <div class="mb-3">
            <label for="name" class="form-label">Nama Seller</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $user->name) }}">
              @error('name')
              <div class="invalid-feedback">
              {{ $message }}
              </div>
              @enderror
          </div>
        <div class="mb-3">
            <label for="toko" class="form-label">Nama Toko</label>
            <input type="text" class="form-control @error('toko') is-invalid @enderror" id="toko" name="toko" value="{{ old('toko', $user->seller->toko) }}">
              @error('toko')
              <div class="invalid-feedback">
              {{ $message }}
              </div>
              @enderror
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', $user->phone) }}">
              @error('phone')
              <div class="invalid-feedback">
              {{ $message }}
              </div>
              @enderror
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email) }}">
              @error('email')
              <div class="invalid-feedback">
              {{ $message }}
              </div>
              @enderror
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat', $user->seller->alamat) }}">
              @error('alamat')
              <div class="invalid-feedback">
              {{ $message }}
              </div>
              @enderror
          </div>
          <div class="mb-3">
            <label for="npwp" class="form-label">NPWP</label>
            <input type="text" class="form-control @error('npwp') is-invalid @enderror" id="npwp" name="npwp" value="{{ old('npwp', $user->seller->npwp) }}">
              @error('npwp')
              <div class="invalid-feedback">
              {{ $message }}
              </div>
              @enderror
          </div>
          
          <div class="mb-3">
            <label for="photo" class="form-label @error('photo') is-invalid @enderror">Photo Seller</label>
            <input type="hidden" name="oldPhoto" value="{{ $user->seller->photo }}">
            @if ($user->seller->photo)
            <img src="{{ asset('storage/' . $user->seller->photo) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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

  <script>

    function previewImage(){
      const image = document.querySelector('#photo');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
      }

    }
    
  </script>

@endsection