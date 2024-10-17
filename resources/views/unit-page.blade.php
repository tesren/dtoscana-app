<div>
    
    @section('titles')
        <title>{{__('Condominio')}} {{$unit->name}} - D'Toscana Nuevo Vallarta</title>
        <meta name="description" content="">
    @endsection

    @php

        $images = $unit->getMedia('gallery');
        
        if ( count($images) <= 0) {
            $images = $unit->unitType->getMedia('gallery');
        }

        $blueprints = $unit->unitType->getMedia('blueprints');

        $status_class = $this->unit->status;

        switch ($status_class) {
            case 'Disponible':
                $status_class = 'bg-success';
                break;

            case 'Apartada':
                $status_class = 'bg-warning';
                break;

            case 'Vendida':
                $status_class = 'bg-danger';
                break;
            
            default:
                $status_class = 'bg-success';
                break;
        }
    @endphp


    {{-- Inicio --}}
    <div class="row justify-content-evenly mt-4 mb-6">
        @if ( count($images) > 1 )

            @for ($i=1; $i < count($images); $i++)
                <img src="{{ $images[$i]->getUrl('large') }}" alt="{{__('Condominio')}} {{$unit->name}} - D'Toscana Nuevo Vallarta" class="d-none" data-fancybox="gallery">
            @endfor

            <div class="col-12 col-lg-7 position-relative">
                <img src="{{ $images[0]->getUrl('large') }}" alt="{{__('Condominio')}} {{$unit->name}} - D'Toscana Nuevo Vallarta" class="w-100 object-fit-cover h-100" data-fancybox="gallery">

                <a href="#gallery" class="badge bg-glass rounded-pill fw-light fs-4 position-absolute start-0 bottom-0 ms-1 ms-lg-5 mb-3 mb-lg-5 text-blue text-decoration-none" style="width: fit-content;">
                    <i class="fa-regular fa-images"></i> 1/{{count($images)}}
                </a>
            </div>

            <div class="col-12 col-lg-4">
                <img src="{{ $images[1]->getUrl('large') }}" alt="{{__('Condominio')}} {{$unit->name}} - D'Toscana Nuevo Vallarta" class="w-100 object-fit-cover" style="height: 76vh;" data-fancybox="gallery">
                <a href="#lead_form" class="btn btn-red fs-5 py-3 px-3 px-lg-4 rounded-4 w-100">{{__('¿Necesitas más información?')}}</a>
            </div>
        
        @else

            <div class="col-12 col-lg-7 position-relative">
                <img src="{{ asset('img/interiors/dtoscana-1.webp') }}" alt="{{__('Condominio')}} {{$unit->name}} - D'Toscana Nuevo Vallarta" class="w-100 object-fit-cover rounded-4 h-100" data-fancybox="gallery">

                <a href="#gallery" class="badge bg-glass rounded-pill fw-light fs-4 position-absolute start-0 bottom-0 ms-1 ms-lg-5 mb-3 mb-lg-5 text-blue text-decoration-none" style="width: fit-content;">
                    <i class="fa-regular fa-images"></i> 1/14
                </a>
            </div>

            <div class="col-12 col-lg-4">
                <img src="{{ asset('img/interiors/dtoscana-2.webp') }}" alt="{{__('Condominio')}} {{$unit->name}} - D'Toscana Nuevo Vallarta" class="w-100 object-fit-cover rounded-4 mb-3" data-fancybox="gallery" style="height: 76vh;">
                <a href="#lead_form" class="btn btn-red fs-5 py-3 px-3 px-lg-4 rounded-4 w-100">{{__('¿Necesitas más información?')}}</a>
            </div>

            @for ($i=1; $i < 15; $i++)
                <img src="{{ asset('/img/interiors/dtoscana-'.$i.'.webp') }}" alt="{{__('Condominio')}} {{$unit->name}} - D'Toscana Nuevo Vallarta" class="d-none" data-fancybox="gallery">
            @endfor
            
        @endif
    



    </div>


    {{-- Info general --}}
    <div id="info" class="row justify-content-evenly mb-5">

        <div class="col-12 col-lg-6 px-4 px-lg-3">
            <h1>
                {{__('Unidad')}} {{$unit->name}}
                @auth
                    @if ( !null == $unit->users()->wherePivot('unit_id', $unit->id)->wherePivot('user_id', auth()->user()->id)->first() )

                        <button wire:click="removeUnit({{$unit->id}})" class="btn btn-link link-danger fs-3" title="{{__('Quitar de Favoritos')}}">
                            <i class="fa-solid fa-heart"></i>
                        </button>

                    @else

                        <button wire:click="saveUnit({{$unit->id}})" class="btn btn-link link-danger fs-3"  title="{{__('Agregar a Favoritos')}}">
                            <i class="fa-regular fa-heart"></i>
                        </button>

                    @endif
                @endauth
                
            </h1>

            <p class="fw-light fs-5 mb-5">
                {{__("Increíble condominio que fusiona lujo, confort y vistas asombrosas. Con un diseño amplio y contemporáneo, esta propiedad ofrece :bedrooms recámaras, :bathrooms baños, y un total de :area m². Disfruta de asombrosas áreas comunes con espléndidos ambientes, todo en una ubicación exclusiva en Bucerías, Nayarit. Experimenta un estilo de vida costero de primer nivel en D'Toscana Nuevo Vallarta.", 
                [
                    'bedrooms' => $unit->unitType->bedrooms,
                    'bathrooms' => $unit->unitType->bathrooms,
                    'area' => $unit->const_total
                ])}}
            </p>

            <h2>{{__('Características')}}</h2>

            <div class="row fs-5 fw-light mb-5">

                <div class="col-12 col-lg-3 mb-1">
                    <i class="fa-solid fa-bed"></i> {{$unit->unitType->bedrooms}} {{__('Recámaras')}}
                </div>

                <div class="col-12 col-lg-3 mb-1 col-xxl-2">
                    <i class="fa-solid fa-bath"></i> {{$unit->unitType->bathrooms}} {{__('Baños')}}
                </div>

                <div class="col-12 col-lg-3 mb-1 col-xxl-2">
                    <i class="fa-solid fa-turn-up"></i> {{__('Piso')}} {{$unit->floor}}
                </div>

                <div class="col-12 col-lg-3 mb-1">
                    <i class="fa-solid fa-building"></i> {{__('Torre')}} {{$unit->section->tower->name}}
                </div>

            </div>

            <h2 class="fs-5 text-yellow">{{__('Dimensiones')}}</h2>

            <div class="row mb-5 fw-light fs-5">
                <div class="col-12 col-lg-3 mb-3">
                    <i class="fa-solid fa-ruler-combined"></i> Interior: {{$unit->interior_const}} {{__('m²')}}
                </div>

                <div class="col-12 col-lg-3 mb-3">
                    <i class="fa-solid fa-maximize"></i> Exterior: {{$unit->exterior_const}} {{__('m²')}}
                </div>

                @isset($unit->garden)
                    <div class="col-12 col-lg-3 mb-1">
                        <i class="fa-solid fa-seedling"></i> {{__('Jardín')}}: {{$unit->garden}} {{__('m²')}}
                    </div>
                @endisset

                @isset($unit->parking_area)
                    <div class="col-12 col-lg-4 mb-1">
                        <i class="fa-solid fa-car"></i> {{__('Estacionamiento')}}: {{$unit->parking_area}} {{__('m²')}}
                    </div>
                @endisset


                <div class="col-12 col-lg-3">
                    <i class="fa-solid fa-house"></i> Total: {{$unit->const_total}} {{__('m²')}}
                </div>
            </div>

        </div>

        <div class="col-12 col-lg-5 col-xxl-4 align-self-center text-center text-lg-start">

            @if ($unit->status == 'Disponible')
                <div class="badge {{$status_class}} fs-5 fw-light rounded-pill mb-3">
                    {{__($unit->status)}}
                </div>
                <div class="fs-1 mb-1 lh-1">${{number_format($unit->price)}} {{$unit->currency}}</div>
            @else
                <div class="badge {{$status_class}} fs-3 fw-light rounded-pill mb-3">
                    {{__('Unidad')}} {{__($unit->status)}}
                </div>
            @endif

            <div class="text-yellow fs-4 fw-light mb-6">{{__('Unidad tipo:')}} {{$unit->unitType->name}}</div>
        </div>

    </div>

    {{-- Planos --}}
    <div class="row justify-content-evenly mb-6">

        <div class="col-12 col-lg-5">
            {{-- Distribución --}}
            
            @if ( count($blueprints) > 0 )
                <h3 class="fw-light">{{__('Distribución')}}</h3>
                <img class="w-100 mb-5" src="{{ $blueprints[0]->getUrl('medium') }}" alt="Distribución de la unidad {{$unit->name}} de Quadrant Bucerías" data-fancybox="blueprints" loading="lazy">
            @endif

        </div>

        <div class="col-1"></div>

        <div class="col-12 col-lg-5 col-xxl-4 align-self-center mb-5" style="background-image: url('{{asset('img/blueprint-bg.webp')}}'); background-repeat: no-repeat; background-position: center; background-size: contain;">

          <h3 class="fw-light">{{__('Localización')}}</h3>
            

        </div>

    </div>

    {{-- formulario de contacto --}}
    <livewire:contact-form />

    @script
        <script>
            Fancybox.bind("[data-fancybox]", {
                // Your custom options
            });
        </script>
    @endscript

</div>