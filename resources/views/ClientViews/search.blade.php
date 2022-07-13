    @foreach ($ecoles as $ecole)
    <div class="col">
        <div class="card rounded-0 product-card">
            <img src="{{ asset('')}}assets/images/ecole/{{ $ecole->logo_img }}" class="card-img-top" alt="{{ $ecole->nom }}">
            <div class="card-body">
                <div class="product-info">
                    <a href="{{ asset('')}}liste-ecoles-prives-meknes/{{ $ecole->id }}">
                        <h6 class="product-name mb-2">{{ $ecole->nom }}</h6>
                    </a>
                    <div class="product-action mt-2">
                        <div class="d-grid gap-2">
                            <a href="{{ asset('')}}liste-ecoles-prives-meknes/{{ $ecole->id }}" class="btn btn-light btn-ecomm">	<i class="bx bxs-cart-add"></i>{{ __('btn school') }}</a>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
