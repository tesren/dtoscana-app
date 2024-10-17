<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    @section('titles')
        <title>{{__('Contacto')}} - D'Toscana</title>
        <meta name="description" content="">
    @endsection

    <div class="position-relative mb-6">
        <img src="{{asset('img/home-gallery/dtoscana-8.webp')}}" alt="" class="w-100 position-relative z-1 object-fit-cover" style="height:20vh;">
        <div class="fondo-oscuro"></div>

        <h1 class="position-absolute top-50 start-50 z-2 text-white" style="transform: translate(-50%, -50%)">{{__('Contacto')}}</h1>
    </div>

    <livewire:contact-form>

</div>
