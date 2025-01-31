<div class="container px-0">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    @section('titles')
        <title>{{__('Inventario')}} {{__('Torre')}} {{$tower->name}} - D'Toscana</title>
        <meta name="description" content="{{__('Echa un vistazo a nuestros condominios en D’Toscana, Nuevo Vallarta, con nuestro plano interactivo. Visualiza cada unidad en el edificio, revisa su ubicación exacta y características destacadas para encontrar el espacio perfecto que se adapte a tu estilo de vida en la Riviera Nayarit.')}}">
    @endsection

    <div class="row justify-content-evenly mt-0 mt-lg-5 mb-4 mb-lg-5">

        <h1 class="col-12 col-lg-2 text-center text-lg-start position-relative py-4 py-lg-0 title-inventory mb-4 mb-lg-0">
            <div class="fs-4 z-2 position-relative">{{__('Torre')}}</div>
            <div class="fs-1 fw-bold z-2 position-relative">{{$tower->name}}</div>

            <img src="{{asset('/img/tower-name-bg.webp')}}" alt="" class="w-100 h-100 object-fit-cover position-absolute start-0 top-0 z-1 d-block d-lg-none">
        </h1>

        <div class="col-12 col-lg-10">
            <h2 class="fs-2">{{__('Todas las comodidades en un solo lugar')}}</h2>
            <p>{{__('Selecciona las características de la unidad que deseas y comprueba disponibilidad')}}</p>
        </div>

    </div>

    <div class="row justify-content-between mb-6">
        

        {{-- Pestañas --}}
        <div class="col-12 col-lg-7 order-2 order-lg-1">

            <div class="d-flex fs-4 mb-3 fw-light justify-content-center">
                <div class="me-3 me-lg-4">
                    <i class="fa-solid text-success fa-square"></i> {{__('Disponible')}}
                </div>

                <div class="me-3 me-lg-4">
                    <i class="fa-solid text-warning fa-square"></i> {{__('Apartado')}}
                </div>

                <div>
                    <i class="fa-solid text-danger fa-square"></i> {{__('Vendido')}}
                </div>
            </div>

            <div class="tab-content" id="pills-tabContent">
    
                @php $j = 0; @endphp 
    
                @foreach ($sections as $section)
                    <div class="tab-pane fade @if($j==0) show active @endif" id="pills-{{$section->id}}" role="tabpanel" aria-labelledby="pills-{{$section->id}}-tab" tabindex="0">
    
                        <div class="position-relative">
                            
                            <img src="{{ asset('media/'.$section->render_path) }}" alt="{{__('Torre')}} {{$tower->name}} {{$section->view}} - D'Toscana" class="w-100 rounded-2 shadow">
    
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="position-absolute start-0 top-0 px-0" viewBox="{{$section->viewbox}}">
        
                                @foreach ($section->units as $unit)
                    
                                    <a href="#unit-modal-{{$unit->id}}" data-bs-toggle="modal" data-bs-target="#unit-modal-{{$unit->id}}" class="text-decoration-none link-light {{ strtolower($unit->status) }}-class" >
                                        
                                        @isset($unit->shape->form_type)
                                            @if ($unit->shape->form_type == 'rect')
                                                <rect x="{{$unit->shape->rect_x ?? '0'}}" y="{{$unit->shape->rect_y ?? '0'}}" width="{{$unit->shape->width ?? '0'}}" height="{{$unit->shape->height ?? '0'}}"/>
                                            @else
                                                <polygon class="" points="{{$unit->shape->points ?? '0,0'}}"></polygon>
                                            @endif
                                        @endisset

                                        @php
                                            if ( in_array($unit->unit_type_id, [7,8] )  ) {
                                                $font_size = '18';
                                            }
                                            elseif($unit->unit_type_id == 9){
                                                $font_size = '24';
                                            }
                                            else {
                                                $font_size = '26';
                                            }
                                            
                                        @endphp
                                        
                                        <text x="{{$unit->shape->text_x ?? '0'}}" y="{{$unit->shape->text_y ?? '0' }}"
                                            font-size="{{$font_size}}" fill="#fff" class="fw-light">
                    
                                            <tspan class="fw-normal">{{$unit->name}}</tspan>
                                            
                                        </text>
                                    </a>   
                                    
                                @endforeach
                
                            </svg>
    
                        </div>
    
                    </div>

                    {{-- Modals --}}
                    @foreach ($section->units as $unit)
                        <div class="modal fade" id="unit-modal-{{$unit->id}}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                
                                <div class="modal-content bg-sand">
                
                                    <div class="modal-header">
                                        <div class="modal-title fs-4">{{__('Unidad')}} {{$unit->name}} - {{__('Torre')}} {{$unit->section->tower->name}}</div>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                
                                    <div class="modal-body text-center">
                                        @php
                                            $blueprints = $unit->unitType->getMedia('blueprints');

                                            if( count($blueprints) == 0 ){
                                                $blueprints = $unit->getMedia('isometrics');
                                            }
                                        @endphp

                                        @if ( isset($blueprints[0]) )
                                            <img src="{{ $blueprints[0]->getUrl('thumb') }}" alt="{{__('Unidad')}} {{$unit->name}} {{__('Torre')}} {{$unit->tower_name}}" class="w-100" loading="lazy">
                                        @endif
                
                                        <div class="d-flex justify-content-center fs-5 mt-4">
                
                                            <div class="me-3">
                                                <i class="fa-solid fa-bed"></i> {{$unit->unitType->bedrooms}}@if($unit->unitType->flexrooms == 1).5 @endif
                                            </div>
                            
                                            <div class="me-3">
                                                <i class="fa-solid fa-bath"></i> {{$unit->unitType->bathrooms}}
                                            </div>
                                            
                                            <div class="me-3">
                                                <i class="fa-solid fa-house"></i> {{$unit->const_total}} {{__('m²')}}
                                            </div>
                                        </div>
                
                                        <div class="fw-light fs-3">
                                            ${{ number_format($unit->price) }} {{$unit->currency}}
                                        </div>
                                    </div>
                
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-red" data-bs-dismiss="modal">{{__('Cerrar')}}</button>
                                        <a href="{{route('unit', ['name'=>$unit->name, 'tower_name'=>$unit->section->tower->name, 'contact' => request()->query('contact') ] )}}" wire:navigate class="btn btn-red">{{__('Más información')}}</a>
                                    </div>
                                </div>
                
                            </div>
                        </div>
                    @endforeach
    
                    @php $j++; @endphp 
                @endforeach
    
            </div>

            @auth
                <a href="{{route('saved', ['contact'=>request()->query('contact')] )}}" class="btn btn-red my-3" wire:navigate>
                    <i class="fa-solid fa-heart"></i> {{__('Unidades Guardadas')}}
                </a>
            @endauth

        </div>

        {{-- Navegacion --}}
        <div class="col-12 col-lg-5 align-self-center order-1 order-lg-2">
            
            <div class="text-center fs-4 fw-light mb-2 d-none d-lg-block">{{__('Selecciona el tipo de inventario')}}</div>

            <ul class="nav nav-pills justify-content-center mb-5 d-none d-lg-flex">

                <li class="nav-item">
                    <a class="nav-link rounded-start-5 rounded-end-0 fs-5 @if( strpos($route, 'tower') != false ) active @endif" wire:navigate href="{{route('tower', ['name'=>'Lucca', 'contact'=>request()->query('contact') ] )}}">
                        <i class="fa-solid fa-border-all"></i> {{__('Gráfico')}}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link rounded-start-0 rounded-end-5 fs-5 @if( strpos($route, 'search') != false ) active @endif" wire:navigate href="{{ route('search', ['contact'=>request()->query('contact')] ) }}">
                        <i class="fa-solid fa-list"></i> {{__('Lista')}}
                    </a>
                </li>

            </ul>


            <div class="text-center mb-2 fs-4 fw-light">
                <i class="fa-solid fa-eye"></i> {{__('Selecciona la vista')}}
            </div>
            <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab" role="tablist">
    
                @php $i = 0; @endphp 
        
                @foreach ($sections as $section)
                    <li class="nav-item @if($i==0) me-1 me-lg-3 @endif mb-2 mb-lg-0" role="presentation">
                        <button class="nav-link @if($i==0) active @endif" id="pills-{{$section->id}}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{$section->id}}" type="button" role="tab" aria-controls="pills-{{$section->id}}" aria-selected="true">
                            {{$section->view}}
                        </button>
                    </li>
                    @php $i++; @endphp 
                @endforeach
                
            </ul>

        </div>


    </div>

    {{-- Formulario de contacto --}}
    <livewire:contact-form />

</div>
