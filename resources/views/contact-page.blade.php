<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    @section('titles')
        <title>{{__('Contacto')}} - D'Toscana</title>
        <meta name="description" content="{{__('Contácta a un agente de D’Toscana en Nuevo Vallarta para obtener más información sobre nuestros condominios en venta. Completa el formulario de contacto para recibir asesoría personalizada sobre precios, disponibilidad, planes de pago y detalles de las amenidades de lujo. Descubre tu nuevo hogar en la Riviera Nayarit.')}}">
    @endsection

    <div class="position-relative mb-6">
        <img src="{{asset('img/home-gallery/dtoscana-8.webp')}}" alt="" class="w-100 position-relative z-1 object-fit-cover" style="height:20vh;">
        <div class="fondo-oscuro"></div>

        <h1 class="position-absolute top-50 start-50 z-2 text-white" style="transform: translate(-50%, -50%)">{{__('Contacto')}}</h1>
    </div>

    <div class="container">
        <livewire:contact-form>
    </div>

</div>
