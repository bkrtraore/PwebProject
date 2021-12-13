<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mon tableau de bord') }}
        </h2>
       
        <div class="row">
              <div class="col">
                  <a href="/addApparel">
                    <button type="button" class="btn btn-primary">Ajouter un appareil</button>
                  </a>
                </div>
              <div class="col">
                
              </div>
              <div class="col">
                <a href="/addAppart">
                  <button type="button" class="btn btn-primary">Ajouter un appartement</button>
                </a>
              </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>