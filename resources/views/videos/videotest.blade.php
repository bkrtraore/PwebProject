<x-guest-layout>
  
    <div class="pt-4 bg-gray-100">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0" style="width:75%; margin:auto;">
            <a href="{{ url('welcome') }}">
                <img src="{{ URL::asset('images/logo.jpg') }} " width="245em" height="auto">
            </a>
            <iframe width="50%" height="400px" src="https://www.youtube.com/embed/9rb9b_EPOeA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border-radius: 5px; border: 2px solid-black"></iframe>    
            <textarea placeholder="Nous laisser un commentaire..." class="lg-textarea form-control" name="story" style="width: 50%;"></textarea>
            <button type="button" class="btn btn-secondary" style="margin-left: auto;">Soumettre</button>
        </div>    
    </div>
        
</x-guest-layout>
