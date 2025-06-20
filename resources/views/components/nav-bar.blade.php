<div class="sticky-top">
    {{-- Success is as dangerous as failure. --}}

    <nav class="navbar navbar-expand-xl bg-white shadow-sm">
        <div class="container-fluid">

            <a class="navbar-brand ms-0 ms-lg-4" href="{{route('home', ['contact'=>$contact] )}}" wire:navigate>
                <img width="100px" src="{{asset('img/dtoscana-logo-red.svg')}}" alt="Logo D'Toscana">
            </a>

            <span class="badge text-bg-danger ms-3">{{__('Torre Siena 100% vendida')}}</span>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

                <div class="offcanvas-header">
                    <div class="offcanvas-title" id="offcanvasNavbarLabel">
                        <img width="150px" src="{{asset('/img/dtoscana-logo-white.svg')}}" alt="Logo D'Toscana">
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>


                <div class="offcanvas-body">
                    @php
                        $lang = app()->getLocale();
                    @endphp

                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-0 pe-lg-3">


                        <li class="nav-item dropdown me-0 me-lg-4">
                            <a class="nav-link dropdown-toggle fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{__('Inventario')}}
                            </a>

                            <ul class="dropdown-menu">
                              
                                {{-- @foreach ($twrs as $twr)
                                    @if ($twr->inventory_type == 1)
                                        <li><a class="dropdown-item" wire:navigate href="{{ route('tower', ['name' => $twr->name, 'contact'=>$contact] ) }}">{{__('Torre')}} {{$twr->name}}</a></li>
                                    @else
                                        <li><a class="dropdown-item" wire:navigate href="{{ route('search', ['tower' => $twr->id, 'contact'=>$contact] ) }}">{{__('Torre')}} {{$twr->name}}</a></li>
                                    @endif
                                @endforeach --}}

                                <li><a class="dropdown-item" wire:navigate href="{{ route('tower', ['name' =>'Lucca', 'contact'=>$contact] ) }}">{{__('Gráfico')}}</a></li>

                                <li class="dropdown-divider"></li>

                                <li>
                                    <a class="dropdown-item @if( strpos($route, 'search') != false) active @endif" href="{{route('search', ['contact'=>$contact] )}}" wire:navigate>{{__('Lista')}}</a>
                                </li>
                            </ul>

                        </li>

                        <li class="nav-item me-0 me-lg-4">
                            <a class="nav-link fs-5 @if( strpos($route, 'lifestyle') != false) active @endif" href="{{route('lifestyle', ['contact'=>$contact] )}}" wire:navigate>{{__('Estilo de vida')}}</a>
                        </li>

                        @if ( count($const_updates) > 0)
                            <li class="nav-item me-0 me-lg-4">
                                <a class="nav-link fs-5 @if( strpos($route, 'construction') != false) active @endif" href="{{route('construction', ['contact'=>$contact] )}}" wire:navigate>{{__('Avances de obra')}}</a>
                            </li>                            
                        @endif

                        @if ($contact != 'no')
                            <li class="nav-item me-0 me-lg-4">
                                <a class="nav-link fs-5 @if( strpos($route, 'contact') != false) active @endif" href="{{ route('contact', ['contact'=>$contact] ) }}" wire:navigate>{{__('Contacto')}}</a>
                            </li>
                        @endif

                        @guest
                            <li class="nav-item me-0 me-lg-4 align-self-start align-self-lg-center">
                                <a class="btn btn-outline-red d-none d-lg-block" href="{{ route('login', ['contact'=>$contact] ) }}" wire:navigate>{{__('Inicia sesión')}}</a>
                                <a class="nav-link d-block d-lg-none fs-5" href="{{ route('login', ['contact'=>$contact] ) }}" wire:navigate><i class="fa-solid fa-right-to-bracket"></i> {{__('Inicia sesión')}}</a>
                            </li>

                            <li class="nav-item me-0 me-lg-4 align-self-start align-self-lg-center">
                                <button class="btn btn-red d-none d-lg-block" type="button" data-bs-toggle="modal" data-bs-target="#registerModal">{{__('Regístrate')}}</button>
                                <button class="nav-link d-block d-lg-none fs-5" type="button" data-bs-toggle="modal" data-bs-target="#registerModal"><i class="fa-solid fa-user-check"></i> {{__('Regístrate')}}</button>
                            </li>
                        @endguest

                        @auth
                            <li class="nav-item dropdown me-0 me-lg-4 d-none d-lg-block">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-regular text-red fs-4 fa-circle-user"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" wire:navigate href="{{route('profile', ['contact'=>$contact] )}}">{{__('Mi Perfil')}}</a></li>
                                    <li><a class="dropdown-item" href="{{route('saved', ['contact'=>$contact]) }}" wire:navigate>{{__('Unidades Guardadas')}}</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><button class="dropdown-item" wire:click="logout" >{{__('Cerrar sesión')}}</button></li>
                                </ul>
                            </li>

                            <li class="nav-item d-block d-lg-none">
                                <a class="nav-link fs-5 @if( strpos($route, 'profile') != false) active @endif" href="{{ route('profile', ['contact'=>$contact] ) }}" wire:navigate><i class="fa-regular fa-circle-user"></i> {{__('Mi Perfil')}}</a>
                            </li>

                            <li class="nav-item d-block d-lg-none">
                                <a class="nav-link fs-5 @if( strpos($route, 'saved') != false) active @endif" href="{{ route('saved', ['contact'=>$contact] ) }}" wire:navigate><i class="fa-solid fa-heart"></i> {{__('Unidades Guardadas')}}</a>
                            </li>
                        @endauth

                        <li class="nav-item me-0 me-lg-4">
        
                            @if ($lang == 'en')
                                @if($route == 'en.unit')
        
                                    <a class="d-block align-self-center me-0 me-lg-3 text-red nav-link text-decoration-none fs-5" title="{{__('Cambiar idioma')}}" wire:navigate href="{{$url = route('unit', ['name'=>$unit_name, 'tower_name'=>$unit_tower, 'contact'=>$contact ], true, 'es');}}" data-bs-toggle="tooltip" data-bs-title="{{__('Cambiar idioma')}}">
                                        @include('components.lang-btn-icon') <span class="d-inline d-lg-none">{{__('Cambiar idioma')}}</span>
                                    </a>
                                @elseif($route == 'en.password.reset')

                                @elseif($route == 'en.tower')

                                    <a class="d-block align-self-center me-0 me-lg-3 text-red nav-link text-decoration-none fs-5" title="{{__('Cambiar idioma')}}" wire:navigate href="{{$url = route('tower', ['name'=>$tower, 'contact'=>$contact], true, 'es') }}" data-bs-toggle="tooltip" data-bs-title="{{__('Cambiar idioma')}}">
                                        @include('components.lang-btn-icon') <span class="d-inline d-lg-none">{{__('Cambiar idioma')}}</span>
                                    </a>

                                @else
                                    
                                    <a href="{{$url = route($route, ['contact'=>$contact], true, 'es')}}" wire:navigate class="d-block align-self-center me-0 me-lg-3 text-red nav-link text-decoration-none fs-5" title="{{__('Cambiar idioma')}}" data-bs-toggle="tooltip" data-bs-title="{{__('Cambiar idioma')}}">
                                        @include('components.lang-btn-icon') <span class="d-inline d-lg-none">{{__('Cambiar idioma')}}</span>
                                    </a>
        
                                @endif
        
                            @else
                                @if($route == 'es.unit')
        
                                    <a class="d-block align-self-center me-0 me-lg-3 text-red nav-link text-decoration-none fs-5" title="{{__('Cambiar idioma')}}" wire:navigate href="{{$url = route('unit', ['name'=>$unit_name, 'tower_name'=>$unit_tower, 'contact'=>$contact ], true, 'en');}}" data-bs-toggle="tooltip" data-bs-title="{{__('Cambiar idioma')}}">
                                        @include('components.lang-btn-icon') <span class="d-inline d-lg-none">{{__('Cambiar idioma')}}</span>
                                    </a>

                                @elseif($route == 'es.password.reset')

                                @elseif($route == 'es.tower')

                                    <a class="d-block align-self-center me-0 me-lg-3 text-red nav-link text-decoration-none fs-5" title="{{__('Cambiar idioma')}}" wire:navigate href="{{$url = route('tower', ['name'=>$tower, 'contact'=>$contact], true, 'en') }}" data-bs-toggle="tooltip" data-bs-title="{{__('Cambiar idioma')}}">
                                        @include('components.lang-btn-icon') <span class="d-inline d-lg-none">{{__('Cambiar idioma')}}</span>
                                    </a>
        
                                @else
                                    <a href="{{$url = route($route, ['contact'=>$contact], true, 'en')}}" wire:navigate class="d-block align-self-center me-0 me-lg-3 text-red nav-link text-decoration-none fs-5" title="{{__('Cambiar idioma')}}" data-bs-toggle="tooltip" data-bs-title="{{__('Cambiar idioma')}}">
                                        @include('components.lang-btn-icon') <span class="d-inline d-lg-none">{{__('Cambiar idioma')}}</span>
                                    </a>
                        
                                @endif
                            @endif
                        </li>

                    </ul>

                    {{-- Redes sociales solo en móvil --}}
                    <div class="text-center fs-2 d-block d-lg-none mt-4">
                        <a href="https://www.instagram.com/domus_vallarta/" target="_blank" rel="noopener noreferrer" class="text-decoration-none link-light me-2">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
            
                        <a href="https://www.facebook.com/DomusVallartaInmobiliaria" target="_blank" rel="noopener noreferrer" class="text-decoration-none link-light">
                            <i class="fa-brands fa-square-facebook"></i>
                        </a>
                    </div>

                </div>

                @auth
                    <div class="offcanvas-footer d-block d-lg-none">
                        <div class="nav-item py-2 px-3">
                            <button class="nav-link fs-5" wire:click="logout"><i class="fa-solid fa-arrow-right-from-bracket"></i> {{__('Cerrar sesión')}}</button>
                        </div>
                    </div>
                @endauth

            </div>
        </div>
    </nav>

</div>