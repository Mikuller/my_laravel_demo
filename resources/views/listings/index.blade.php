<x-layout>

     @include('partials._hero')
     @include('partials._search')
     <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
         @unless (count($Listings) == 0)
            @foreach ($Listings as $listing)
              <x-listing-card :listing="$listing" />
            @endforeach      
         @else{
            <h2>No Listings Found</h2> }
         @endunless
     </div>


</x-layout>
