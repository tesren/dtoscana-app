<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    @section('titles')
        <title>{{__('Inventario')}} - D'Toscana</title>
        <meta name="description" content="{{__('Encuentra tu condominio ideal en D’Toscana, Nuevo Vallarta, con nuestro buscador avanzado. Filtra por precio, número de recámaras, superficie, vista y más para descubrir la propiedad que mejor se adapta a tu estilo de vida. Explora opciones exclusivas con amenidades de lujo, vistas panorámicas y acabados de alta calidad en la Riviera Nayarit.')}}">
    @endsection


    <div class="row justify-content-center mt-0 mt-lg-5 mb-4 mb-lg-5">

        <div class="col-12 col-lg-6 col-xxl-5">
            <h1 class="fs-2">{{__('Todas las comodidades en un solo lugar')}}</h1>
            <p>{{__('Selecciona las características de la unidad que deseas y comprueba disponibilidad')}}</p>
        </div>

        <div class="col-12 col-lg-3 align-self-center">
            <div class="d-flex fs-5 fw-light">
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
        </div>

    </div>

    <div class="container mb-6">

        {{-- Formulario de búsqueda --}}
        <div class="row justify-content-center mb-5">

            <div class="col-12 px-2 px-lg-0">
                <form wire:submit="search">
    
                    <div class="rounded-2 input-group shadow-4" id="search_input_group">
                                
                        <div class="form-floating mb-3 mb-lg-0">
        
                            <select class="form-select" id="floor" wire:model="floor" aria-label="{{__('Piso')}}">
                                <option value="0">{{__('Cualquier piso')}}</option>
            
                                @for ($i=1; $i<=5; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                                <option value="10">PH</option>
        
                            </select>
        
                            <label for="floor">{{__('Piso')}}</label>
                        </div>

                        <div class="form-floating mb-3 mb-lg-0">
                            <select class="form-select" id="tower" wire:model="tower" aria-label="{{__('Torre')}}">
                                <option value="0">{{__('Cualquier Torre')}}</option>

                                @foreach ($towers as $tower)
                                    <option value="{{$tower->id}}">{{ $tower->name }}</option>
                                @endforeach
                                
                            </select>
                            <label for="tower">{{__('Torre')}}</label>
                        </div>
        
                        <div class="form-floating mb-3 mb-lg-0">
                            <select class="form-select" id="bedrooms" wire:model="bedrooms" aria-label="{{__('Recámaras')}}">
                                <option value="0">{{__('Cualquier cantidad')}}</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            <label for="bedrooms">{{__('Recámaras')}}</label>
                        </div>
    
                        <div class="form-floating mb-3 mb-lg-0">
                            <select class="form-select" id="unit_type" wire:model="unit_type" aria-label="{{__('Tipo')}}">
                                <option value="0">{{__('Cualquier tipo')}}</option>

                                @foreach ($unit_types as $type)
                                    <option value="{{$type->id}}">{{ $type->name }}</option>
                                @endforeach
                                
                            </select>
                            <label for="unit_type">{{__('Tipo')}}</label>
                        </div>
        
                        <div class="form-floating mb-3 mb-lg-0">
                            <select class="form-select" id="min_price" wire:model="min_price" aria-label="{{__('Precio min.')}}">
                                <option value="1">{{__('Sin mínimo')}}</option>
                                @php
                                    $minPriceStart = 6000000;
                                    $maxPrice = 9000000;
                                @endphp
                                @for($price = $minPriceStart; $price <= $maxPrice; $price += 1000000)
                                    <option value="{{ $price }}">${{ number_format($price / 1000000) }}m</option>
                                @endfor
                            </select>
                            <label for="min_price">{{__('Precio min.')}}</label>
                        </div>
                        
                        <div class="form-floating mb-3 mb-lg-0">
                            <select class="form-select" id="max_price" wire:model="max_price" aria-label="{{__('Precio max.')}}">
                                <option value="9999999999">{{__('Sin máximo')}}</option>
                                @php
                                    $maxPriceStart = 7000000;
                                    $maxPrice = 10000000;
                                @endphp
                                @for($price = $maxPriceStart; $price <= $maxPrice; $price += 1000000)
                                    <option  value="{{ $price }}">${{ number_format($price / 1000000) }}m</option>
                                @endfor
                            </select>
                            <label for="max_price">{{__('Precio max.')}}</label>
                        </div>
                        
        
                        <button type="submit" class="btn btn-red rounded-end-2 col-12 col-lg-1" aria-label="{{__('Buscar')}}">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>

                    </div>
                </form>
            </div>
        
        </div>

        {{-- Tabla --}}
        <div class="mb-6" >
            <div class="table-responsive shadow-5 mb-3">
                <table class="table table-sm table-light mb-0 shadow">
    
                    <thead>
                        @auth
                            <th class="text-center bg-red fw-light fs-5">{{__('Favorito')}}</th>
                        @endauth
                        <th class="text-center bg-red fw-light fs-5">{{__('Unidad')}}</th>
                        <th class="d-none d-lg-table-cell text-center bg-red fw-light fs-5">{{__('Torre')}}</th>
                        <th class="text-center bg-red fw-light fs-5">{{__('Piso')}}</th>
                        <th class="text-center bg-red fw-light fs-5">{{__('Recámaras')}}</th>
                        <th class="text-center bg-red fw-light fs-5">{{__('m²')}}</th>
                        <th class="text-center bg-red fw-light fs-5">{{__('Tipo')}}</th>
                        <th class="bg-red fw-light fs-5">{{__('Precio')}}</th>
                        <th class="bg-red fw-light fs-5"></th>
                    </thead>
    
                    <tbody class="fs-5">
    
                        @if ($units->isNotEmpty())
                            @foreach ($units as $unit)
                                @php
                                    if($unit->status == 'Disponible'){
                                        $badgeBg = 'bg-success';
                                    }elseif($unit->status == 'Apartada'){
                                        $badgeBg = 'bg-warning';
                                    }
                                    else{
                                        $badgeBg = 'bg-danger';
                                    }
                                @endphp
    
                                <tr wire:key={{$unit->id}}>
    
                                    @auth
                                        <td class="text-center">
                                            @if ( !null == $unit->users()->wherePivot('unit_id', $unit->id)->wherePivot('user_id', auth()->user()->id)->first() )

                                                <button wire:click="removeUnit({{$unit->id}})" class="btn btn-link link-danger fs-5" title="{{__('Quitar de Favoritos')}}">
                                                    <i class="fa-solid fa-heart"></i>
                                                </button>

                                            @else

                                                <button wire:click="saveUnit({{$unit->id}})" class="btn btn-link link-danger fs-5"  title="{{__('Agregar a Favoritos')}}">
                                                    <i class="fa-regular fa-heart"></i>
                                                </button>

                                            @endif
                                        </td>
                                    @endauth

                                    <td class="{{$badgeBg}} text-light text-center fw-bold">{{ $unit->name }}</td>
                                    <td class="d-none d-lg-table-cell text-center">{{ $unit->section->tower->name }}</td>

                                    <td class="text-center">{{ $unit->floor }}</td>
    
                                    <td class="text-center">                         
                                        {{ $unit->bedrooms }}
                                    </td>
        
                                    <td class="text-center">
                                        {{ $unit->const_total }}
                                    </td>

                                    <td class="text-center">
                                        {{$unit->unitType->name}}
                                    </td>

                                    <td>
                                        @if ($unit->price != 0 and $unit->status == 'Disponible')
                                            ${{ number_format($unit->price) }} {{$unit->currency}}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('unit', array_merge(['name'=>$unit->name, 'tower'=>$unit->section->tower->name], request()->query() )) }}" class="btn btn-red" target="_blank" rel="noopener noreferrer">
                                            {{__('Ver más')}}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                        
                            <tr>
                                <td class="text-center fs-5 py-3" colspan="9">
                                    {{__('Lo sentimos, no hay resultados para su búsqueda')}}
                                </td>
                            </tr>
    
                        @endif
    
                    </tbody>
    
                </table>
            </div>
    
            {{ $units->links(data: ['scrollTo' => false]) }}
    
        </div>

    </div>

    <div class="container">
        <livewire:contact-form />
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
            const form_inputs = document.getElementById('search_input_group');

            if(form_inputs){

                if (window.innerWidth <= 768) {
                    // Código a ejecutar solo en dispositivos móviles (ancho menor o igual a 768px)
                    form_inputs.classList.remove('input-group');
                    form_inputs.classList.remove('shadow');
                }else{
                    form_inputs.classList.add('input-group');
                    form_inputs.classList.add('shadow');
                }

            }
        </script>
    @endscript


</div>
