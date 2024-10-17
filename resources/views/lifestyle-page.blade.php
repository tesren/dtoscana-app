<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    @section('titles')
        <title>{{__('Estilo de vida')}} - D'Toscana</title>
        <meta name="description" content="">
    @endsection


    <div class="row justify-content-center mt-4 mt-lg-5">
        <div class="col-12 col-lg-11 col-xxl-10">

            {{-- Inicio --}}
            <div class="row justify-content-between mb-5">

                <div class="col-12 col-lg-7 order-2 order-lg-1">
                    <h1 class="mb-4 fs-2">
                        {{__('El paraíso perfecto para un estilo de vida de lujo y confort')}}
                    </h1>
        
                    <p class="mb-0 mb-lg-5 fs-5 fw-light">
                        {{__('Descubre Nuevo Vallarta, un destino que combina la belleza natural con el lujo y la comodidad. Con sus playas doradas, resorts de clase mundial, y una amplia gama de actividades recreativas, este paraíso en la Riviera Nayarit ofrece un estilo de vida inigualable. Ya sea que busques relajarte en un spa, disfrutar de deportes acuáticos, o deleitarte con la gastronomía local, Nuevo Vallarta tiene algo para todos. Además, su infraestructura moderna y servicios de alta calidad lo convierten en el lugar ideal para vivir y disfrutar de una vida plena y sofisticada.')}}
                    </p>

                    <img src="{{asset('/img/home-gallery/dtoscana-5.webp')}}" alt="D'Toscana Lobby" class="w-100 rounded-4 shadow-sm d-none d-lg-block" >
                </div>

                <div class="col-12 col-lg-5 order-1 order-lg-2 mb-5 mb-lg-0">
                    <img src="{{asset('/img/lifestyle/pool.webp')}}" alt="D'Toscana {{__('Alberca')}}" class="w-100 object-fit-cover rounded-4 h-100" >
                </div>

            </div>


            {{-- Más imagenes --}}
            <div class="row mb-5">

                <div class="col-12 col-lg-4">
                    <img src="{{asset('img/lifestyle/birds-beach.webp')}}" alt="D'Toscana Estilo de vida" class="w-100 mb-4 rounded-4" loading="lazy" >

                    <div class="bg-outline-red p-4 rounded-4 mb-4 mb-lg-0">
                        <h2 class="fs-3 mb-4">{{__('Playas y Actividades Acuáticas')}}</h2>

                        <p>
                            <strong>{{__('Playas Doradas:')}}</strong> {{__('Con 5 kilómetros de playas doradas, Nuevo Vallarta es ideal para relajarse, tomar el sol y disfrutar del mar.')}}
                        </p>

                        <p>
                            <strong>{{__('Deportes Acuáticos:')}}</strong> {{__('Puedes practicar surf, paddleboard, kayak y snorkel. Además, hay opciones para realizar paseos en barco y avistamiento de ballenas.')}}
                        </p>

                    </div>

                </div>

                <div class="col-12 col-lg-4">
                    <img src="{{asset('img/lifestyle/surfing.webp')}}" alt="D'Toscana Estilo de vida" class="w-100 rounded-4 mb-4" loading="lazy" >
                    <img src="{{asset('img/lifestyle/ship.webp')}}" alt="D'Toscana Estilo de vida" class="w-100 rounded-4 mb-4 mb-lg-0" loading="lazy" >
                </div>

                <div class="col-12 col-lg-4">
                    <img src="{{asset('img/lifestyle/airport.webp')}}" alt="Aeropuerto Vallarta" class="w-100 rounded-4 mb-4 d-none d-lg-block" loading="lazy" >

                    <div class="bg-outline-red p-4 rounded-4">
                        <h2 class="fs-3 mb-4">{{__('Ubicación y Accesibilidad')}}</h2>

                        <p>
                            <strong>{{__('Proximidad a Puerto Vallarta:')}}</strong> {{__('Está a solo unos minutos de Puerto Vallarta, lo que permite disfrutar de las atracciones de ambos lugares.')}}
                        </p>

                        <p>
                            <strong>{{__('Aeropuerto Internacional:')}}</strong> {{__('El Aeropuerto Internacional Licenciado Gustavo Díaz Ordaz está muy cerca, facilitando los viajes nacionales e internacionales.')}}
                        </p>

                    </div>
                </div>

            </div>

            <div class="row mb-5">

                <div class="col-12 col-lg-7">
                    <img src="{{asset('img/home-gallery/dtoscana-7.webp')}}" alt="D'Toscana Rooftop" class="w-100 rounded-4 object-fit-cover" style="height: 30vh;" loading="lazy" >
                </div>

                <div class="col-12 col-lg-5 d-none d-lg-block">
                    <img src="{{asset('img/home-gallery/dtoscana-1.webp')}}" alt="D'Toscana Alberca" class="w-100 rounded-4 object-fit-cover" style="height: 30vh;" loading="lazy" >
                </div>

                <div class="col-12 col-lg-8 mt-4 d-none d-lg-block">
                    <img src="{{asset('img/home-gallery/dtoscana-9.webp')}}" alt="D'Toscana Gym" class="w-100 rounded-4 object-fit-cover h-100" loading="lazy" >
                </div>

                <div class="col-12 col-lg-4 mt-4">
                    <img src="{{asset('img/lifestyle/golf-1.webp')}}" alt="D'Toscana Golf" class="w-100 rounded-4 object-fit-cover h-100" loading="lazy" >
                </div>

                <div class="col-12 col-lg-5 mt-4 order-2 order-lg-1">
                    <div class="bg-outline-red p-4 rounded-4 h-100">

                        <h3 class="mb-4">{{__('Actividades al Aire Libre y Naturaleza')}}</h3>

                        <p class="mb-4 fs-5">
                            <strong>{{__('Campos de Golf:')}}</strong> {{__('Nuevo Vallarta es conocido por sus campos de golf de clase mundial, ideales para los amantes de este deporte.')}}
                        </p>

                        <p class="fs-5">
                            <strong>{{__('Parques y Reservas Naturales:')}}</strong> {{__('Puedes explorar la flora y fauna local en parques y reservas naturales cercanas.')}}
                        </p>
                    </div>

                </div>

                <div class="col-12 col-lg-7 mt-4 order-1 order-lg-2">
                    <img src="{{asset('img/lifestyle/golf-2.webp')}}" alt="D'Toscana Golf" class="w-100 rounded-4 h-100 object-fit-cover" loading="lazy" >
                </div>

            </div>

            {{-- Formulario de contacto --}}
            <livewire:contact-form>

        </div>
    </div>

</div>
