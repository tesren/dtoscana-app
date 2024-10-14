<div class="sticky-top">
    {{-- Success is as dangerous as failure. --}}

    <nav class="navbar navbar-expand-xxl bg-white shadow-sm">
        <div class="container-fluid">

            <a class="navbar-brand ms-0 ms-lg-4" href="{{route('home')}}" wire:navigate>
                <img width="100px" src="{{asset('img/dtoscana-logo-red.svg')}}" alt="Logo D'Toscana">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

                <div class="offcanvas-header">
                    <div class="offcanvas-title" id="offcanvasNavbarLabel">
                        <img width="110px" src="{{asset('img/dtoscana-logo-red.svg')}}" alt="Logo D'Toscana">
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>


                <div class="offcanvas-body">
                    @php
                        $route = Route::currentRouteName();
                        $lang = app()->getLocale();
                    @endphp

                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-0 pe-lg-3">

                        <li class="nav-item me-0 me-lg-4">
                            <a class="nav-link fs-5 @if( strpos($route, 'search') != false) active @endif" href="{{--route('search')--}}" wire:navigate>{{__('Inventario')}}</a>
                        </li>

                        <li class="nav-item me-0 me-lg-4">
                            <a class="nav-link fs-5 @if( strpos($route, 'lifestyle') != false) active @endif" href="{{route('lifestyle')}}" wire:navigate>{{__('Estilo de vida')}}</a>
                        </li>

                        @if ( count($const_updates) > 0)
                            <li class="nav-item me-0 me-lg-4">
                                <a class="nav-link fs-5 @if( strpos($route, 'construction') != false) active @endif" href="{{--route('construction')--}}" wire:navigate>{{__('Avances de obra')}}</a>
                            </li>                            
                        @endif

                        <li class="nav-item me-0 me-lg-4">
                            <a class="nav-link fs-5 @if( strpos($route, 'contact') != false) active @endif" href="{{-- route('contact') --}}" wire:navigate>{{__('Contacto')}}</a>
                        </li>

                        @guest
                            <li class="nav-item me-0 me-lg-4 align-self-start align-self-lg-center mb-3 mb-lg-0">
                                <a class="btn btn-outline-red" href="{{-- route('login') --}}" wire:navigate>{{__('Inicia Sesión')}}</a>
                            </li>

                            <li class="nav-item me-0 me-lg-4 align-self-start align-self-lg-center mb-3 mb-lg-0">
                                <a class="btn btn-red" href="{{-- route('register') --}}" wire:navigate>{{__('Regístrate')}}</a>
                            </li>
                        @endguest

                        @auth
                            <li class="nav-item dropdown me-0 me-lg-4">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-regular text-blue fs-4 fa-circle-user"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" wire:navigate href="{{-- route('profile') --}}">{{__('Mi Perfil')}}</a></li>
                                    <li><a class="dropdown-item" href="{{--route('saved')--}}" wire:navigate>{{__('Unidades Guardadas')}}</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><button class="dropdown-item" wire:click="logout" >{{__('Cerrar sesión')}}</button></li>
                                </ul>
                            </li>
                        @endauth

                        <li class="nav-item me-0 me-lg-4">
        
                            @if ($lang == 'en')
                                @if($route != 'en.pages.unit' and $route != 'es.livewire.update')
        
                                    <a href="{{$url = route($route, request()->query(), true, 'es')}}" wire:navigate class="d-block align-self-center me-0 me-lg-3 text-blue fs-4 text-decoration-none fw-light" title="{{__('Cambiar idioma')}}" data-bs-toggle="tooltip" data-bs-title="{{__('Cambiar idioma')}}">
                                        <img width="25px" src="{{asset('/img/translate.svg')}}" alt="{{__('Cambiar idioma')}}"> <span class="d-inline d-lg-none">{{__('Cambiar idioma')}}</span>
                                    </a>
                                @else
        
                                    <a class="d-block align-self-center me-0 me-lg-3 text-blue fs-4 text-decoration-none fw-light" title="{{__('Cambiar idioma')}}" wire:navigate href="{{$url = route('pages.unit', ['name'=>$unit_name, 'utm_campaign' => request()->query('utm_campaign'), 'utm_source' => request()->query('utm_source'), 'utm_medium' => request()->query('utm_medium')], true, 'es');}}" data-bs-toggle="tooltip" data-bs-title="{{__('Cambiar idioma')}}">
                                        <img width="25px" src="{{asset('/img/translate.svg')}}" alt="{{__('Cambiar idioma')}}"> <span class="d-inline d-lg-none">{{__('Cambiar idioma')}}</span>
                                    </a>
        
                                @endif
        
                            @else
                                @if($route != 'es.pages.unit' and $route != 'es.livewire.update')
        
                                    <a href="{{$url = route($route, request()->query(), true, 'en')}}" wire:navigate class="d-block align-self-center me-0 me-lg-3 text-blue fs-4 text-decoration-none fw-light" title="{{__('Cambiar idioma')}}" data-bs-toggle="tooltip" data-bs-title="{{__('Cambiar idioma')}}">
                                        <img width="25px" src="{{asset('/img/translate.svg')}}" alt="{{__('Cambiar idioma')}}"> <span class="d-inline d-lg-none">{{__('Cambiar idioma')}}</span>
                                    </a>
        
                                @else
                                    
                                    <a class="d-block align-self-center me-0 me-lg-3 text-blue fs-4 text-decoration-none fw-light" title="{{__('Cambiar idioma')}}" wire:navigate href="{{$url = route('pages.unit', ['name'=>$unit_name, 'utm_campaign' => request()->query('utm_campaign'), 'utm_source' => request()->query('utm_source'), 'utm_medium' => request()->query('utm_medium')], true, 'en');}}" data-bs-toggle="tooltip" data-bs-title="{{__('Cambiar idioma')}}">
                                        <img width="25px" src="{{asset('/img/translate.svg')}}" alt="{{__('Cambiar idioma')}}"> <span class="d-inline d-lg-none">{{__('Cambiar idioma')}}</span>
                                    </a>
        
                                @endif
                            @endif
                        </li>

                    </ul>

                    {{-- Redes sociales solo en móvil --}}
                    <div class="text-center fs-2 d-block d-lg-none mt-4">
                        <a href="https://www.instagram.com/domus_vallarta/" target="_blank" rel="noopener noreferrer" class="text-decoration-none text-blue me-2">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
            
                        <a href="https://www.facebook.com/DomusVallartaInmobiliaria" target="_blank" rel="noopener noreferrer" class="text-decoration-none text-blue">
                            <i class="fa-brands fa-square-facebook"></i>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </nav>

</div>