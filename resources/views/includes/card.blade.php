{{-- Card actualité --}}



  <div class="card mb-3 rounded-0 card__hover" >
    <div class="row d-flex">
      <div class="col-md-4">
          {{-- @if ($item->image)
              <img src="{{ asset('storage/' .$item->image) }}" class="img-fluid" alt="" srcset="">
          @else --}}
      <img src="http://placehold.it/250" class="img-fluid" alt="" srcset="">
          {{-- @endif --}}
      </div>

      <div class="col-md-8 mt-n4">
        <div class="card-body">
        <a href="{{ route('pages.show', $item->slug) }}">
          <h5 class="card-title">{{ Str::words($item->name, 6) }}</h5>
        </a>
          <span class="mt-3">Publier le {{ (new \DateTime( $item->created_at))->format("d-m-y \à\ H:i") }}</span>

            <p class="card-text mt-2 text-lowercase ">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur non dignissimos soluta facilis natus numquam? Voluptatem odio excepturi doloremque 
            </p>
            <span class="btn-danger px-3 py-1 lire" style="text-decoration: none;"><a href=""> Lire encore</a></span>

        </div>
      </div>
    </div>
</div>