<div>
    
    @section('titles')
        <title>{{__('Condominio')}} {{$unit->name}} - D'Toscana Nuevo Vallarta</title>
        <meta name="description" content="{{__('Descubre los detalles de este condominio en venta en D’Toscana, Nuevo Vallarta: :bedrooms recámaras, :bathrooms baños y :area m² de lujo en la Riviera Nayarit. Con acabados premium, vistas panorámicas y acceso a amenidades exclusivas como alberca infinity, gimnasio y roof garden. ¡Explora tu nuevo hogar ideal!', 
                [
                    'bedrooms' => $unit->unitType->bedrooms,
                    'bathrooms' => $unit->unitType->bathrooms,
                    'area' => $unit->const_total
                ])}}">
    @endsection

    @php

        $images = $unit->getMedia('unitgallery');
        
        if ( count($images) <= 0) {
            $images = $unit->unitType->getMedia('gallery');
        }

        $blueprints = $unit->unitType->getMedia('blueprints');

        if( count($blueprints) == 0 ){
            $blueprints = $unit->getMedia('isometrics');
        }

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

            <div class="col-12 col-lg-7 position-relative">
                <img src="{{ $images[0]->getUrl('large') }}" alt="{{__('Condominio')}} {{$unit->name}} - D'Toscana Nuevo Vallarta" class="w-100 object-fit-cover rounded-4 h-100" data-fancybox="gallery" style="max-height: 85vh;">

                <a href="#gallery" class="badge bg-glass rounded-pill fw-light fs-4 position-absolute start-0 bottom-0 ms-4 ms-lg-5 mb-3 mb-lg-5 text-blue text-decoration-none" style="width: fit-content;">
                    <i class="fa-regular fa-images"></i> 1/{{count($images)}}
                </a>
            </div>

            <div class="col-12 col-lg-4">
                <img src="{{ $images[1]->getUrl('large') }}" alt="{{__('Condominio')}} {{$unit->name}} - D'Toscana Nuevo Vallarta" class="w-100 object-fit-cover rounded-4 mb-3 d-none d-lg-block" style="height: 76vh;" data-fancybox="gallery">
                <a href="#lead_form" class="btn btn-red fs-5 py-3 px-3 px-lg-4 rounded-4 w-100">{{__('¿Necesitas más información?')}}</a>
            </div>

            @if ( count($images) > 2 )
                @for ($i=2; $i < count($images); $i++)
                    <img src="{{ $images[$i]->getUrl('large') }}" alt="{{__('Condominio')}} {{$unit->name}} - D'Toscana Nuevo Vallarta" class="d-none" data-fancybox="gallery">
                @endfor
            @endif
        
        @else

            <div class="col-12 col-lg-7 position-relative">
                <img src="{{ asset('img/interiors/dtoscana-1.webp') }}" alt="{{__('Condominio')}} {{$unit->name}} - D'Toscana Nuevo Vallarta" class="w-100 object-fit-cover rounded-4 h-100" data-fancybox="gallery" style="max-height: 85vh;">

                <a href="#gallery" class="badge bg-glass rounded-pill fw-light fs-4 position-absolute start-0 bottom-0 ms-4 ms-lg-5 mb-3 mb-lg-5 text-blue text-decoration-none" style="width: fit-content;">
                    <i class="fa-regular fa-images"></i> 1/14
                </a>
            </div>

            <div class="col-12 col-lg-4">
                <img src="{{ asset('img/interiors/dtoscana-2.webp') }}" alt="{{__('Condominio')}} {{$unit->name}} - D'Toscana Nuevo Vallarta" class="w-100 object-fit-cover rounded-4 d-none d-lg-block" data-fancybox="gallery" style="height: 76vh;">
                <a href="#lead_form" class="btn btn-red fs-5 py-3 px-3 px-lg-4 rounded-4 w-100 mt-3">{{__('¿Necesitas más información?')}}</a>
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
                {{__('Descubre los detalles de este condominio en venta en D’Toscana, Nuevo Vallarta: :bedrooms recámaras, :bathrooms baños y :area m² de lujo en la Riviera Nayarit. Con acabados premium, vistas panorámicas y acceso a amenidades exclusivas como alberca infinity, gimnasio y roof garden. ¡Explora tu nuevo hogar ideal!', 
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

                @if( isset($unit->exterior_const) and $unit->exterior_const != 0)
                    <div class="col-12 col-lg-3 mb-3">
                        <i class="fa-solid fa-maximize"></i> Exterior: {{$unit->exterior_const}} {{__('m²')}}
                    </div>
                @endif

                @if( isset($unit->garden) and $unit->garden != 0)
                    <div class="col-12 col-lg-3 mb-1">
                        <i class="fa-solid fa-seedling"></i> {{__('Jardín')}}: {{$unit->garden}} {{__('m²')}}
                    </div>
                @endif

                @if( isset($unit->parking_area) and $unit->parking_area != 0 )
                    <div class="col-12 col-lg-4 mb-1">
                        <i class="fa-solid fa-car"></i> {{__('Estacionamiento')}}: {{$unit->parking_area}} {{__('m²')}}
                    </div>
                @endif


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

        <div class="col-12 col-lg-6">
            {{-- Distribución --}}
            <h3 class="fw-light">{{__('Distribución')}}</h3>
            <img class="w-100 mb-5" src="{{ asset('/img/planos/'.$unit->name.'.jpg') }}" alt="Distribución de la unidad {{$unit->name}} de D'Toscana" data-fancybox="blueprints" loading="lazy">
            
            @if ( count($blueprints) > 0 )
                <img class="d-none" src="{{ $blueprints[0]->getUrl('medium') }}" alt="Distribución de la unidad {{$unit->name}} de D'Toscana" data-fancybox="blueprints" loading="lazy">
            @endif

            @if (count($blueprints) > 1)
                <img src="{{$blueprints[1]->getUrl('medium')}}" alt="Distribución de la unidad {{$unit->name}} de D'Toscana" class="d-none" data-fancybox="blueprints" loading="lazy">
            @endif

        </div>

        <div class="col-12 col-lg-5 col-xxl-4 align-self-center mb-5" style="background-image: url('{{asset('img/blueprint-bg.webp')}}'); background-repeat: no-repeat; background-position: center; background-size: contain;">

          <h3 class="fw-light">{{__('Localización')}}</h3>

          <div class="position-relative">

            <img src="{{ asset('media/'.$unit->section->render_path ) }}" alt="D'Toscana, {{$unit->section->tower->name}}, Unidad {{$unit->name}}" class="w-100 shadow rounded-2" loading="lazy">
    
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="position-absolute start-0 top-0" viewBox="{{$unit->section->viewbox}}">
                
                {{-- unidad marcada --}}
                @isset($unit->shape->form_type)
                    @if ($unit->shape->form_type == 'rect')
                        <rect class="marked-unit" x="{{$unit->shape->rect_x ?? '0'}}" y="{{$unit->shape->rect_y ?? '0'}}" width="{{$unit->shape->width ?? '0'}}" height="{{$unit->shape->height ?? '0'}}"/>
                    @else
                        <polygon class="marked-unit" points="{{$unit->shape->points ?? '0,0'}}"></polygon>
                    @endif
                @endisset
                
                <text x="{{$unit->shape->text_x ?? '0'}}" y="{{$unit->shape->text_y ?? '0' }}"
                    font-size="26" fill="#fff" class="fw-light">

                    <tspan class="fw-normal">{{$unit->name}}</tspan>
                    
                </text>
                

            </svg>

          </div>

        </div>

    </div>

    <div class="row justify-content-center mb-6">

        {{-- Planes de pago --}}
        @if( $unit->status != 'Vendida' )
            <div class="col-12 col-lg-8 order-2 order-lg-1 px-2 px-lg-0">

                <div class="px-0 shadow">

                    <h4 class="fs-4 mb-3 text-center d-block d-lg-none pt-4">{{__('Planes de Pago')}}</h4>

                    <ul class="position-relative nav nav-pills px-3 px-lg-5 pb-4 pt-0 pt-lg-4 justify-content-center justify-content-lg-start z-3" id="pills-tab" role="tablist">
        
                        <li class="me-3 d-none d-lg-flex">
                            <h4 class="fs-4 mb-0 align-self-center">{{__('Planes de Pago')}}</h4>
                        </li>
        
                        @php
                            $i = 0;
                        @endphp
        
                        @foreach ($unit->paymentPlans as $plan)
        
                            <li class="nav-item me-1" role="presentation">
                                <button class="nav-link rounded-pill @if($i==0) active @endif" id="pills-{{$plan->id}}-tab" data-bs-toggle="pill" data-bs-target="#pills-plan-{{$plan->id}}" type="button" role="tab">
                                    @if (app()->getLocale() == 'en')
                                        {{$plan->name_en}}
                                    @else
                                        {{$plan->name}}
                                    @endif
                                </button>
                            </li>
        
                            @php
                                $i++;
                            @endphp
                        @endforeach
                        
                    </ul>
        
                    <div class="tab-content position-relative" id="pills-tabContent">

                        @php $i = 0; @endphp
                        @foreach ($unit->paymentPlans as $plan)
        
                            @php
                                if($plan->discount > 0 and $plan->additional_discount > 0){
                                    $discounted_price = $unit->price * ( (100 - $plan->discount)/100 );
                                    $final_price = $discounted_price * ( (100 - $plan->additional_discount)/100 );

                                    $additional_discount_total = $discounted_price - $final_price;
                                }
                                elseif($plan->discount > 0){
                                    $final_price = $unit->price * ( (100 - $plan->discount)/100 );
                                }
                                else{
                                    $final_price = $unit->price;
                                }
                            @endphp 
        
                            <div class="tab-pane pb-3 fade @if($i==0) show active @endif" id="pills-plan-{{$plan->id}}" role="tabpanel" tabindex="0">
                                
                                <div class="py-4 bg-red text-center">
                                    <div>{{__('Precio Final')}}</div>
                                    <div class="fs-2">${{ number_format($final_price) }} {{ $unit->currency }}</div>
                                </div>
        
                                @isset($plan->discount)
                                    <div class="d-flex justify-content-between my-3 px-2 px-lg-4 fw-light">
                                        <div class="fs-4">{{__('Precio de lista')}}</div>
                                        <div class="text-decoration-line-through fs-4">${{ number_format($unit->price) }} {{ $unit->currency }}</div>
                                    </div>
                                
                                    <div class="d-flex justify-content-between mb-3 px-2 px-lg-4 fw-light">
                                        <div class="fs-4">{{__('Descuento')}} ({{$plan->discount}}%)</div>
                                        <div class="fs-4">${{ number_format( $unit->price * ($plan->discount/100) ) }} {{ $unit->currency }}</div>
                                    </div>

                                    @isset($plan->additional_discount)
                                        <div class="d-flex justify-content-between mb-3 px-2 px-lg-4 fw-light">
                                            <div class="fs-4">{{__('Descuento adicional')}} ({{$plan->additional_discount}}%)</div>
                                            <div class="fs-4">${{ number_format( $additional_discount_total ) }} {{ $unit->currency }}</div>
                                        </div>
                                    @endisset

                                    <hr class="">
                                @endisset

                                
        
                                @isset($plan->down_payment)
                                    <div class="d-flex justify-content-between mb-3 px-2 px-lg-4 fw-light mt-3">
                                        <div class="fs-4">
                                            {{__('Enganche')}} ({{$plan->down_payment}}%)
                                            <div class="fs-6 fw-light d-none d-lg-block">{{__('A la firma del contrato de promesa de compra-venta')}}.</div>
                                        </div>
                                        <div class="fs-4">${{ number_format( $final_price * ($plan->down_payment/100) ) }} {{ $unit->currency }}</div>
                                    </div>
                                @endisset
        
                                @isset($plan->second_payment)
                                    <div class="d-flex justify-content-between mb-3 px-2 px-lg-4 fw-light">
                                        <div class="fs-4">
                                            {{__('Segundo pago')}} ({{$plan->second_payment}}%)
                                            <div class="fs-6 fw-light d-none d-lg-block">{{__('Sesenta días después del enganche')}}.</div>
                                        </div>
                                        <div class="fs-4">${{ number_format( $final_price * ($plan->second_payment/100) ) }} {{ $unit->currency }}</div>
                                    </div>
                                @endisset
                                
                                @isset($plan->months_percent)
                                    <div class="d-flex justify-content-between mb-3 px-2 px-lg-4 fw-light">
                                        <div class="fs-4">
                                            {{$plan->months_amount}} {{__('Mensualidades')}} ({{$plan->months_percent}}%)
                                            @if ($plan->during_const)
                                                <div class="fs-6 fw-light d-none d-lg-block">{{$plan->months_amount}} {{__('Pagos mensuales durante la construcción')}}.</div>
                                            @endif
                                        </div>
                                        <div class="fs-4">${{ number_format( $final_price * ($plan->months_percent/100) ) }} {{ $unit->currency }}</div>
                                    </div>
                                @endisset
        
                                @isset($plan->closing_payment)
                                    <div class="d-flex justify-content-between px-2 px-lg-4 fw-light">
                                        <div class="fs-4">
                                            {{__('Pago Final')}} ({{$plan->closing_payment}}%)
                                            <div class="fs-6 fw-light d-none d-lg-block">{{__('A la entrega física de la propiedad')}}.</div>
                                        </div>
                                        <div class="fs-4">${{ number_format( $final_price * ($plan->closing_payment/100) ) }} {{ $unit->currency }}</div>
                                    </div>
                                @endisset
        
                            </div>
        
                            @php $i++; @endphp
                        @endforeach
                    </div>
                </div>
                
                <div class="mt-2">
                    <ul class="fs-6 fw-light">
                        <li>
                            {{__('Se requiere un depósito de $100,000 (cien mil pesos) para apartar la unidad.')}}
                        </li>

                        <li>
                            {{__('El contrato de promesa de compra-venta tendrá que firmarse en un plazo máximo de diez días a partir del depósito de los $100,000.00 pesos.')}}
                        </li>

                        <li>{{__('El depósito es 100% reembolsable. Los reembolsos tendrán un tiempo estimado de retorno de 15 días.')}}</li>

                        <li>
                            {{__('En caso de no proceder con la compra de la unidad en el tiempo establecido (firma de contrato y pago de enganche), la unidad quedará disponible.')}}
                        </li>

                        <li>
                            {{__('Precios, descuentos y condiciones de pago sujetos a cambios sin previo aviso.')}}
                        </li>
                    </ul>
                </div>

            </div>
        @endif

    </div>

    {{-- formulario de contacto --}}
    <div class="row justify-content-center">

        <div class="col-12 col-lg-10 col-xxl-9">
            <livewire:contact-form />
        </div>

    </div>


    <div class="position-fixed bottom-0 start-0 ms-1 ms-lg-3 z-3">
        @if (session('saved'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{__(session('saved'))}} <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('removed'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{__(session('removed'))}} <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    @script
        <script>
            Fancybox.bind("[data-fancybox]", {
                // Your custom options
            });
        </script>
    @endscript

</div>