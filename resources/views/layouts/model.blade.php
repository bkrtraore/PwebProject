<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/css/main.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CQC SA Home</title>
  </head>
  <header>
    <div class="overlay"></div>

    <video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" playsinline autoplay muted loop>
        <source src="/images/cloud.mp4" type="video/mp4">
      </video>
  
  
    <!-- The header content -->
    <div class="container h-100">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100">
             <center><img class="fit-picture" src="/images/logo.jpg"></center>
        </div>
      </div>
    </div>
  </header>
  <body>
    
   <nav class="navbar navar-expand-sm fixed-top bg-primary">
      <div class="container-fluid" >
        
        <div class="navbar-header" style="display: flex; flex-direction: row;">
    
         <a class="nav-link text-light bg-primary " href="{{route('welcome')}}"><strong>Accueil</strong></a>
         <a class="nav-link text-light bg-primary " href="{{route('contact')}}"><strong>Nous contacter</strong></a>

         </div>
        <div class="d-flex justify-content-end">
          @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Tableau de bord</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Se connecter</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">S'inscrire</a>
                        @endif

                        
                    @endauth
                    <a href="{{ url('/videos') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Vidéos</a>
                </div>
            @endif
        </div>
      </div>
   </nav>
    
    @yield('contenu') 

    <footer class="bg-primary text-center text-white">
      <div class="text-center p-3">
       <p> © 2021 Copyright: CQC SA by La Brigade Fantôme</p>
      </div>
      </footer>
  </body>
</html>
