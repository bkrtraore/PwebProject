<x-app-layout>
    
    <h2 class="h2" style="margin-left: 10%; margin-top:2.5%; ">Ajout d'appartement</h2>
      <div class="mt-10 sm:mt-0" style="width: 75%; margin:auto;">
            <form method="POST" action="{{ route('createAppart') }}">
                @csrf
    
                
                <div class="mt-4">
                    <x-jet-label for="reftype" value="{{ __('Type appartement') }}" />
                    <x-jet-input id="reftype" class="block mt-1 w-full" type="number" name="reftype" min="1" max="3" required placeholder="T1,T2, ou T3"/>
                </div>
            
        
                <div class="mt-4">
                    <x-jet-label for="refMaison" value="{{ __('Numéro immeuble') }}" />
                    <x-jet-input id="refMaison" class="block mt-1 w-full" type="number" name="refMaison" min="1" max="3" required />
                </div>
        
        
                <div class="mt-4">
                    <x-jet-label for="refSecurite" value="{{ __('Niveau de sécurité') }}" />
                    <x-jet-input id="refSecurite" class="block mt-1 w-full" type="number" name="refSecurite" min="1" max="3" required  placeholder="Niveau 1, 2 ou 3"/>
                </div>
        
                <div class="mt-4">
                    <x-jet-label for="nbhabitants" value="{{ __('Nombre habitants') }}" />
                    <x-jet-input id="nbhabitants" class="block mt-1 w-full" type="number" name="nbhabitants" min="0" max="9" required />
                </div>
    
                <button type="submit" class="btn btn-primary">Ajouter cet appartement</button>
            </div>
    
        
</x-app-layout>
