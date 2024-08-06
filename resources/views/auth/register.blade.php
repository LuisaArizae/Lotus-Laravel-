<!doctype html>
<html lang="en">
<head>
    <title>Registrar una cuenta </title>
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

                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="form-outline mb-4">
                                            <label for="name" class="form-label">{{ __('Nombre') }}</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label for="email" class="form-label">{{ __('Correo Electrónico') }}</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label for="password-confirm" class="form-label">{{ __('Confirmar Contraseña') }}</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>

                                        <div class="text-center pt-1 mb-1 pb-1">
                                            <button type="submit" class="btn btn-primary btn-block fa-lg btn-gradient mb-3">
                                                {{ __('Registrar') }}
                                            </button>
                                        </div>
                                    </form>
                                    <div class="text-center">
                                        <p>¿Ya tienes una cuenta? <a href="{{ route('login') }}" style="color: #ba438f;">Iniciar sesión</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pb-6">
                            <div class="bottom-section pt-5 text-center">
                                <img src="{{ asset('images/vectorLogin.png') }}" alt="Descripción de la imagen" width="80%">
                                <p class="mb-3">¿No tienes una cuenta?</p>
                                <a href="{{ route('register') }}" class="btn btn-outline-danger">Crear una</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
