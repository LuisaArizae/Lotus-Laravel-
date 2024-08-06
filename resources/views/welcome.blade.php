<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Basic -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Site Metas -->
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
      
        <title>LotusTasks</title>
        <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

      
      
        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap.css') }}" />
        {{--  <!-- progress barstle -->
        <link rel="stylesheet" href="css/css-circular-prog-bar.css">  --}}
        <!-- fonts style -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,600&display=swap" rel="stylesheet">
        <!-- font wesome stylesheet -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <!-- Custom styles for this template -->
        <link href="{{asset('assets/style.css')}}" rel="stylesheet" />
        <!-- responsive style -->
        <link href="{{asset('assets/responsive.css')}}" rel="stylesheet" />

      
        <link rel="stylesheet" href="css/css-circular-prog-bar.css">
      
      
      </head>


  <div class="top_container">
    <!-- Header section starts -->

<body>
    <div class="top_container">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp" style="width: 75pt;" alt="logo">
            <a class="navbar-brand" href="#">
              <span>
                LotusTasks
              </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              
              <span class="navbar-toggler-icon">                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp" style="width: 75pt;" alt="logo">
                </span>
            </button>
  
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                    @if (Route::has('login'))
                
                    @auth
                    <a href="{{ url('/dashboard') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Dashboard
                    </a>
                    @else
                    <a href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Register
                        </a>
          @endif
        @endauth
      </nav>
    @endif

    
                </ul>
              </div>
          </nav>
        </div>
      </header>
      <section class="hero_section ">
        <div class="hero-container container">
          <div class="hero_detail-box">
            <h1>
                Recuerda lo que eres y mejora continuamente.
            </h1>
            <p>
              ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua. Ut enim ad minim veniam
            </p>
            <div class="hero_btn-continer">
              <a href="" class="call_to-btn btn_white-border">
                Saber mas
              </a>
            </div>
          </div>
          <div class="hero_img-container">
            <div>
              <img src="{{asset('images/1.png')}}" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- end header section -->
  
    <div class="common_style">
  
      <!-- about section -->
      <section class="about_section">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="about_img-container">
                <img src="images/about.png" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="about_detail-box">
                <h3>
                  Conquista Tu Día: Domina Tus Tareas con LotusTasks
                </h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                  ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                </p>
                <div class="">
                  <a href="" class="call_to-btn btn_white-border">
                    Saber mas
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  
  
      <!-- end about section -->
  
      <!-- admission section -->
      <section class="admission_section">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="admission_detail-box">
                <h3>
                  Organizate con nosotros

                </h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                  ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                </p>
                <div class="">
                  <a href="" class="call_to-btn btn_white-border">
                    Saber mas
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="admission_img-container">
                <img src="images/admission.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>
  
  
  
      <!-- end admission section -->
  
      <!-- why section -->
      <section class="why_section">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="why_img-container">
                <img src="images/why.png" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="why_detail-box">
                <h3>
                  Desata Tu Potencial: Planifica y Ejecuta con Eficiencia
                </h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                  ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                </p>
                <div class="">
                  <a href="" class="call_to-btn btn_white-border">
                    Saber mas
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  
  
      <!-- end why section -->
  
      <!-- determine section -->
      <section class="determine_section">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="determine_detail-box">
                <h3>
                  De Sueños a Realidades: Haz que Cada Tarea Cuente
                </h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                  ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                </p>
                <div class="">
                  <a href="" class="call_to-btn btn_white-border">
                    Saber mas
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="determine_img-container">
                <img src="images/determine.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>
  
  
      <!-- end determine section -->
  
    </div>
  
  
    <!-- client section -->
    <section class="client_section layout_padding">
      <h2 class="">
        Testimonios
      </h2>
      <div class="container">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-3">
                          <div class="client_img-box">
                            <img src="images/client.png" alt="">
                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="client_detail-box">
                            <h5>
                              Alex Du
                            </h5>
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                              ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            </p>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-3">
                          <div class="client_img-box">
                            <img src="images/client.png" alt="">
                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="client_detail-box">
                            <h5>
                              Alex Du
                            </h5>
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                              ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            </p>
                          </div>
                        </div>
                      </div>
                </div>
                
              </div>
            </div>
       
      </div>
    </section>
  
  
    <!-- end client section -->
  

  
    <!-- footer section -->
    <section class="container-fluid footer_section">
      <p>
        Copyright &copy; 2019 All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </section>
    <!-- footer section -->
  
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    @yield('hero') <!-- Section for hero content -->
  </div>

  <div class="common_style">
    @yield('content') <!-- Section for specific content -->
  </div> 

  <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>

  
   
  </body>
  
  </html>
</body>
</html>
