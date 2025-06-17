<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    @section('titles')
        <title>D'Toscana - {{__('Condominios en Venta y Preventa en Nuevo Vallarta')}}</title>
        <meta name="description" content="{{__('Condominios de lujo en Nuevo Vallarta, ubicados en Av. México con vistas al Tigre Golf & Country Club y Los Tigres Residencial. Torre exclusiva de 71 departamentos de 2 y 3 recámaras (110-150 m²) con acabados de alta calidad, cocina de granito, ventanería PVC y aire acondicionado. Amenidades premium: gimnasio, roof garden, alberca infinity climatizada y seguridad 24/7. Precios desde $5,355,000 MXN y planes de pago disponibles. ¡Descubre un estilo de vida sofisticado en un entorno natural único!')}}">
    @endsection

    <div class="row justify-content-center">

        <div class="col-12 col-lg-11 col-xxl-10">

            
            {{-- Inicio --}}
            <div id="carouselTowers" class="carousel slide carousel-fade overflow-hidden rounded-4 mb-6 mt-3">

                <div class="carousel-inner">
    
                  <div class="carousel-item active">
                    <img src="{{asset('img/tower-lucca.webp')}}" class="d-block w-100 object-fit-cover shadow" alt="{{__('Torre')}} Lucca D'Toscana" style="max-height: 82vh; min-height:50vh;">

                    <div class="row justify-content-center position-absolute start-0 top-0 mb-5 mb-lg-4 z-3 h-100">

                        <div class="col-11 col-lg-8 col-xxl-6 text-white text-shadow align-self-center">

                            <div class="d-flex justify-content-center">
                                <h1 class="ff-spartan lh-1 text-uppercase mb-0">
                                    <div>{{__('Torre')}}</div>
                                    <div class="fs-0">LUCCA</div>
                                </h1>
                            </div>

                            <div class="text-center">
                                <h2 class="mb-4 fs-3">{{__('Preventa')}}, {{__('departamentos de 2 y 3 recámaras')}}.</h2>
                                <a href="{{ route('tower', ['name' => 'Lucca', 'contact'=>request()->query('contact') ] ) }}" wire:navigate class="btn btn-red fs-5 px-5">{{__('Ver Inventario')}}</a>
                            </div>
                        </div>

                    </div>

                  </div>
    
                  {{-- <div class="carousel-item">
                    <img src="{{asset('img/tower-siena.webp')}}" class="d-block w-100 object-fit-cover shadow" alt="{{__('Torre')}} Siena D'Toscana" loading="lazy" style="max-height: 82vh; min-height:50vh;">

                    <div class="row justify-content-center position-absolute start-0 top-0 mb-5 mb-lg-4 z-3 h-100">

                        <div class="col-11 col-lg-8 col-xxl-6 text-white text-shadow align-self-center">

                            <div class="d-flex justify-content-center">
                                <h1 class="ff-spartan lh-1 text-uppercase mb-0">
                                    <div>{{__('Torre')}}</div>
                                    <div class="fs-0">SIENA</div>
                                </h1>
                            </div>

                            <div class="text-center">
                                <h2 class="mb-4 fs-3">{{__('Entrega inmediata')}}, {{__('departamentos de 2 y 3 recámaras')}}.</h2>
                                <a href="{{ route('tower', ['name' => 'Siena', 'contact'=>request()->query('contact') ] ) }}" wire:navigate class="btn btn-red fs-5 px-5">{{__('Ver Inventario')}}</a>
                            </div>
                        </div>

                    </div>

                  </div> --}}
    
                </div>
    
                {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselTowers" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselTowers" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button> --}}
    
            </div>

            {{-- Descripción --}}
            <div class="row justify-content-between mb-6">

                <div class="col-12 col-lg-3 mb-5 mb-lg-0">
                    <img src="{{asset('img/dtoscana-logo-red.svg')}}" alt="Logo D'Toscana" class="w-100">
                </div>

                <div class="col-12 col-lg-7 align-self-center">
                    <h3 class="fs-2">{{__('El lugar donde quieres estar')}}</h3>
                    <p class="fs-5">{{__('Se ubica en la bahía más grande de México y es considerada una de las más hermosas en el mundo. La Riviera Nayarit es uno de los destinos de playa más importantes del país. El complejo está conformado por 355 espacios residenciales distribuidos en 5 torres, mismas que cuentan con un rooftop con alberca, área de niños, gimnasio, área de asador, terraza cubierta, asoleaderos y áreas verdes')}}.</p>
                </div>

            </div>

            {{-- Amenidades --}}
            <div class="row mb-6">

                <div class="col-12 col-lg-6 mb-4 mb-lg-0 position-relative">

                    <a href="#gallery-1" class="text-decoration-none">
                        <img src="{{asset('/img/dtoscana-amenities.webp')}}" alt="D'Toscana Nuevo Vallarta" class="w-100 h-100 object-fit-cover rounded-4">
                    </a>

                    <a href="#gallery-1" class="btn btn-glass position-absolute bottom-0 start-0 ms-4 ms-lg-5 mb-3 mb-lg-4 px-5 fs-4">{{__('Galería')}}</a>

                    {{-- Galería --}}
                    @for ($i=1; $i<11; $i++)
                        <img src="{{asset('img/home-gallery/dtoscana-'.$i.'.webp')}}" alt="{{__('Galería')}} D'Toscana" class="d-none" loading="lazy" data-fancybox="gallery">
                    @endfor

                </div>

                <div class="col-12 col-lg-6">

                    <div class="bg-red rounded-4 p-4 p-lg-5 mb-4">
                        <h3 class="fs-2">{{__('Amenidades')}}</h3>
                        <p class="fs-5 fw-light mb-4 mb-lg-5">{{__('Todo lo que necesitas en un solo lugar')}}</p>

                        <ul class="d-block d-lg-flex ps-0 mb-0 mb-lg-3">
                            <li class="mx-3">Roof Garden</li>
                            <li class="mx-3">{{__('Gimnasio')}}</li>
                            <li class="mx-3">{{__('Asoleadero')}}</li>
                            <li class="mx-3">{{__('Área de BBQ')}}</li>
                            <li class="mx-3">{{__('Snack Bar')}}</li>
                        </ul>

                        <ul class="d-block d-lg-flex ps-0 mb-0 mb-lg-3">
                            <li class="mx-3">{{__('Alberca infinity')}}</li>
                            <li class="mx-3">{{__('Chapoteadero')}}</li>
                            <li class="mx-3">{{__('Espacios multiusos')}}</li>
                            <li class="mx-3">{{__('Seguridad 24/7')}}</li>
                        </ul>

                        <ul class="ps-0 mb-4 mb-lg-5">
                            <li class="mx-3">{{__('Lobby con control de acceso')}}</li>
                        </ul>

                        <div class="d-flex fs-3">
                            <div class="me-4 me-lg-5">
                                <i class="fa-solid fa-burger"></i>
                            </div>

                            <div class="me-4 me-lg-5">
                                <i class="fa-solid fa-dumbbell"></i>
                            </div>

                            <div class="me-4 me-lg-5">
                                <i class="fa-solid fa-water-ladder"></i>
                            </div>

                            <div class="me-4 me-lg-5">
                                <i class="fa-solid fa-sun"></i>
                            </div>

                            <div class="me-4 me-lg-5">
                                <i class="fa-solid fa-seedling"></i>
                            </div>

                            <div class="me-4 me-lg-5">
                                <i class="fa-solid fa-building-shield"></i>
                            </div>
                        </div>

                    </div>

                    <div class="bg-outline-red rounded-4 p-4 p-lg-5">
                        <h4 class="fs-3">{{__('El estilo de vida que mereces')}}</h4>
                        <p class="my-4 fs-5">{{__('Nuevo Vallarta es un destino espectacular que ofrece una combinación perfecta de lujo, naturaleza y actividades recreativas.')}}</p>
                        <a href="{{route('lifestyle', ['contact' => request()->query('contact')] )}}" wire:navigate class="btn btn-red fs-5 px-4">{{__('Ver lo mejor de Nuevo Vallarta')}}</a>
                    </div>

                </div>

            </div>

            {{-- ubicacion --}}
            <div class="row mb-6">

                <div class="col-12 mb-6">
                    <h3 class="fs-2 mb-1">{{__('Ubicación')}}</h3>
                    <div class="fs-4 fw-light mb-4">{{__('Cerca de lo que mas te importa')}}</div>

                    <p class="mb-4 fs-5">
                        {{__('Torre de 71 condominios con vistas al Hípico Toscana y a El Tigre Golf & Country Club y Los Tigres Residencial.')}}
                        {{__('Ubicado en Nuevo Vallarta, el cual es conocido por sus campos de golf, su puerto deportivo y su larga playa de arena blanca.')}}
                    </p>

                    <iframe class="rounded-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4118.774091590878!2d-105.28075583125899!3d20.706839393283897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842147332cd8faeb%3A0x46046aa906d6e728!2sD&#39;%20Toscana%20Residencial!5e0!3m2!1ses-419!2smx!4v1728920680333!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-12 col-lg-6 px-0 px-lg-3 mb-5 mb-lg-0 position-relative">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

                        {{-- <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        </div> --}}

                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <img src="{{asset('/img/torre-lucca-home.webp')}}" alt="Master Plan Tower Lucca D'Toscana" class="w-100 h-100 object-fit-cover rounded-4">

                                <div class="position-absolute top-0 start-0 ms-5 mt-4 text-white">
                                    <div class="fs-5 lh-1">{{__('Torre')}}</div>
                                    <div class="fs-1 fw-bold lh-1 mb-1 mb-xxl-4">LUCCA</div>
            
                                    <div class="">
                                        <div class="ff-libre fs-2 d-none d-xxl-block">{{__('Tipos de unidades')}}</div>
                                        <div class="fw-light fs-5">{{__('Departamentos de 2 y 3 recámaras')}}</div>
                                        <div class="fw-light fs-5">{{__('Superficies desde 118 m² hasta 216 m²')}}</div>
                                    </div>
                                </div>

                            </div>

                            {{-- <div class="carousel-item">
                                <img src="{{asset('img/master-plan-siena.webp')}}" alt="Master Plan Tower Siena D'Toscana" class="w-100 h-100 object-fit-cover rounded-4">

                                <div class="position-absolute top-0 start-0 ms-5 mt-4 text-white">
                                    <div class="fs-5 lh-1">{{__('Torre')}}</div>
                                    <div class="fs-1 fw-bold lh-1 mb-4">SIENA</div>

                                    <div class="d-none d-xl-block">
                                        <div class="ff-libre fs-2">{{__('Tipos de unidades')}}</div>
                                        <div class="fw-light fs-5">{{__('Departamentos de 2 y 3 recámaras')}}</div>
                                        <div class="fw-light fs-5">{{__('Superficies de 110 m² hasta 150 m²')}}</div>
                                    </div>
                                </div>                          
                            </div> --}}

                        </div>

                        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button> --}}
                      </div>

                </div>

                <div class="col-12 col-lg-6 px-0 position-relative rounded-4 overflow-hidden">
                    <img src="{{asset('img/tower-siena.webp')}}" class="d-block w-100 h-100 object-fit-cover shadow" alt="{{__('Torre')}} Siena D'Toscana" loading="lazy" style="min-height: 45vh;">

                    <div class="position-absolute w-100 bottom-0 start-0 bg-red p-3 p-xxl-4">

                        <div class="row">

                            <div class="col-12 col-lg-4 col-xxl-5 border-start border-white lh-1 fw-semibold text-uppercase mb-3 mb-lg-0 align-self-center">
                                <div class="fs-5 mb-1">{{__('Torre')}}</div>
                                <div class="fs-1">Siena</div>
                            </div>

                            <div class="col-12 col-lg-8 col-xxl-7 px-0">
                                <div class="ff-libre text-uppercase lh-1 fs-1 mb-1">{{__('100% vendida')}}</div>
                                <div class="fs-5 fw-light">{{__('Gracias por confiar en el proyecto')}}</div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

            {{-- Formulario de contacto --}}
            <livewire:contact-form>

        </div>

    </div>

    @include('components.banner-home')

    <livewire:popup-promotion>

    @if (session('registered'))
        <div class="position-fixed bottom-0 start-0 ms-1 ms-lg-3 z-3">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('registered') }} <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    @script
        <script>

            Fancybox.bind("[data-fancybox]", {
                // Tus opciones personalizadas
            });

                // Seleccionar el enlace que abre el modal
                const promotionLink = document.querySelector('#banner_frontpage a[data-bs-toggle="modal"]');

                //console.log('cargó livewire');

                if (promotionLink) {
                    // Esperar 6 segundos antes de simular el clic
                    //console.log('entró al if');
                    if (window.innerWidth < 768) {
                        setTimeout(() => {
                            //console.log('pasaron los 6 segundos');
                            promotionLink.click(); // Simular clic en el enlace

                        }, 6000); // 6000 milisegundos = 6 segundos
                    }

                }

                document.addEventListener("livewire:update", () => {
                    if (window.innerWidth < 768) {
                        const promotionLink = document.querySelector('#banner_frontpage a[data-bs-toggle="modal"]');

                        if (promotionLink) {
                            setTimeout(() => {
                                promotionLink.click();
                            }, 6000);
                        }
                    }
                });

        </script>
    @endscript


</div>