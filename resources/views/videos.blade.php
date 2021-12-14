<x-guest-layout>
  
    <div class="pt-4 bg-gray-100">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <a href="{{ url('welcome') }}">
                <img src="{{ URL::asset('images/logo.jpg') }} " width="400em" height="auto">
            </a>
            <div class="container bg-secondary ">
                <div class="row">
                  <div class="col-sm">
                    <a href="{{ url('video1') }}" class="list-group-item list-group-item-action ">Installer son lave linge</a>
                    <a href="#" class="list-group-item list-group-item-action">Vérifier son évier</a>
                    <a href="#" class="list-group-item list-group-item-action">Installer son lave-vaisselle</a>
                  </div>
                  <div class="col-sm">
                    <a href="#" class="list-group-item list-group-item-action ">Réduire sa consommation : 5 conseils</a>
                    <a href="#" class="list-group-item list-group-item-action">Comment être plus économe ?</a>
                    <a href="#" class="list-group-item list-group-item-action">La veilleuse qui consomme moins</a>
                  </div>
                </div>
              </div>
             </div>
        </div>
    </div>

    <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50" style="position: absolute; width: 100%">
        <div class="container text-center">
          <small>Copyright &copy; Your Website</small>
        </div>
    </footer>

</x-guest-layout>
