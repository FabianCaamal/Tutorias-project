<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> @yield('title') </title>

  <!-- Custom styles for this template-->
  <link href="{{ asset('estilos-plantilla/css/sb-admin-2.min.css')}} " rel="stylesheet">

</head>

<body id="page-top">

  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        @yield('main-content')
      </div>
    </div>
  </div>

</body>

</html>