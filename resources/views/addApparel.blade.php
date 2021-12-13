<x-app-layout>
    
    <h2 class="h2" style="margin-left: 10%; margin-top:2.5%; ">Ajout d'appareil</h2>
      <div class="mt-10 sm:mt-0" style="width: 75%; margin:auto;">
            <form method="POST" action="{{ route('createApparel') }}">
                @csrf
    
                
                <div class="mt-4">
                    <x-jet-label for="reftype" value="{{ __('Type appareil') }}" />
                    <x-jet-input id="reftype" class="block mt-1 w-full" type="number" name="reftype" min="1" max="3"/>
                </div>
            
        
                <div class="mt-4">
                    <x-jet-label for="emplacement" value="{{ __('Emplacement') }}" />
                    <x-jet-input id="emplacement" class="block mt-1 w-full" type="text" name="emplacement" required />
                </div>
        
        
                <div class="mt-4">
                    <x-jet-label for="descriptionEmplacement" value="{{ __('Description emplacement') }}" />
                    <x-jet-input id="descriptionEmplacement" class="block mt-1 w-full" type="text" name="descriptionEmplacement" required />
                </div>
        
                <div class="mt-4">
                    <x-jet-label for="description" value="{{ __('Description appareil') }}" />
                    <x-jet-input id="description" class="block mt-1 w-full" type="text" name="description" required />
                </div>
    
                <button type="submit" class="btn btn-primary">Ajouter cet appareil</button>
            </div>
</x-app-layout>
 