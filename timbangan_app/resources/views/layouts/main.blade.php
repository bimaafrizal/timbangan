<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    {{-- style --}}
    <link rel="stylesheet" href="css/sb-admin-2.min.css">
    <title>test</title>
  </head>
  <body>
    {{-- @include('partials.navbar') --}}
      <div class="container-fluid mt-5">
          @yield('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Bootstrap core JavaScript-->
        <script src="jquery/jquery.min.js"></script>
        {{-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
    
        <!-- Core plugin JavaScript-->
        <script src="jquery/jquery.easing.min.js"></script>
    
        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>
    
        <!-- Page level plugins -->
        {{-- <script src="jquery/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap4.min.js"></script> --}}
    
        <!-- Page level custom scripts -->
        <script src="js/datatables-demo.js"></script>
    
  </body>
</html>
