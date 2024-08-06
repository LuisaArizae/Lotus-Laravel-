<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/estilos.css') }}">
    
</head>
<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-1 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-4 mx-md-4 form-container">
                                    <div>
                                        <div class="text-center">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp" style="width: 185px;" alt="logo">
                                            <h4 class="mt-1 mb-4 pb-1">LotusTasks</h4>
                                        </div>

                                        <form action="{{route('login')}}" method="POST">
                                            @csrf 
                                        <center><p>Por favor, ingresa tus credenciales de acceso</p></center>
                                       
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label lblLogin"  for="form2Example11">Usuario:</label>
                                            <input type="email" name="email" id="form2Example11" class="form-control" placeholder="Ingresa tu usuario" />
                                        </div>
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label lblLogin" name="password" for="form2Example22">Contraseña:</label>
                                            <input type="password" name="password" id="form2Example22" class="form-control" placeholder="Ingresa tu contraseña" />
                                        </div>
                                        <div class="text-center pt-1 mb-1 pb-1">
                                            <button href="" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg btn-gradient mb-3" type="submit">Ingresar</button>
                                        </form>
                                        <p><a href="{{ route('welcome') }}" style="color: #ba438f;">Volver</a></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 pb-6 ">
                                <div class="bottom-section pt-5">
                                    <img src="{{asset('images/vectorLogin.png')}}" alt="Descripción de la imagen" width="80%">
                                    <p class="mb-3">¿No tienes una cuenta?</p>
                                    <a href="{{route('register')}}" type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-danger">Crear una</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>