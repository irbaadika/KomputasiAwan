<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
    
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- Icon -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
    <!-- icon -->

    <!-- Google fonts End -->

    <!-- custon style Sheet & JavaScript -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <script src="{{ asset('js/index.js') }}" defer></script>
    <!-- custon style Sheet & JavaScript -->
    <title>Ecommerce Website</title>
    {{-- <link rel="shortcut icon" href="images/favicon.png" /> --}}
    <img src="https://storage.googleapis.com/komputawan/favicon.png" alt="logo.png">
  </head>
  <body class="home">
    @include('layouts.header')

    <!-- ===========Hero Section===================== -->

    @yield('content')

    @include('layouts.footer')
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
  </body>
</html>
