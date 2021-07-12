<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <style>
    body{
      
      background-image: url(img/fondo.png);
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
  </style>

  <title>Tutorias</title>

  <link href="{{asset('estilos-plantilla/css/sb-admin-2.min.css')}}" rel="stylesheet"> 

</head>

<body>

  <div class="container">
  <br><br>
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <!-- <div class="col-lg-6 d-none d-lg-block"></div> -->
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                  <img src="{{ asset('img/logoUtp2.png') }}" alt="" width="250px">
                    <h1 class="h4 text-gray-900 mb-4"> Plataforma Web - Control Tutorías </h1>
                  </div>

                  <form class="user" method="post" action="{{ url('/validate')}}">
                  @csrf
                    <div class="form-group" >
                      <input type="text" name="email" value="{{ old('email')}}" required="true" class="form-control form-control-user" placeholder="Correo">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" required="true" class="form-control form-control-user" placeholder="Contraseña">
                      {!! $errors->first('error', ':message') !!}
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Recuerdame</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">Entrar</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

</body>

</html>
