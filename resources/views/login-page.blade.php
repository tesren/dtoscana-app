<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    @section('titles')
        <title>{{__('Inicia sesión')}} - D'Toscana</title>
        <meta name="description" content="{{__('Inicia sesión o crea una cuenta en D’Toscana, Nuevo Vallarta, para acceder a funciones exclusivas y recibir atención personalizada. Al registrarte, podrás guardar tus propiedades favoritas, recibir actualizaciones de disponibilidad y obtener asesoría directa sobre nuestros condominios de lujo en la Riviera Nayarit.')}}">
    @endsection


    <div class="row justify-content-center my-5">

        <div class="col-12 col-lg-5 col-xxl-4 mb-4 mb-lg-0">
            <img src="{{asset('/img/home-gallery/dtoscana-2.webp')}}" alt="D'Toscana Nuevo Vallarta" class="w-100 rounded-5 login-img">
        </div>

        <div class="col-12 col-lg-5 col-xxl-4 align-self-center px-3 px-lg-5">

            <h1>{{__('Inicia sesión')}}</h1>
            <p class="fs-4 fw-light">{{__('Ingresa a tu cuenta')}}</p>

            <form wire:submit="login" id="login_form">

                <label for="email">{{__('Correo electrónico')}}</label>
                <input type="email" wire:model="email" name="email" id="email" class="form-control" required>
                <x-input-error :messages="$errors->get('form.email')" class="mt-1" />

                <label for="password" class="mt-3">{{__('Contraseña')}}</label>
                <input type="password" wire:model="password" name="password" id="password" class="form-control mb-2" required>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" wire:model="remember">
                    <label class="form-check-label" for="remember">
                        {{__('Recordarme')}}
                    </label>
                </div>

                <button type="submit" class="btn btn-red w-100 rounded-pill">
                    <span wire:loading.remove>{{__('Ingresar')}}</span>
                    <span wire:loading><i class="fa-solid fa-spin fa-spinner"></i> {{__('Cargando')}}</span>
                </button>
            </form>

            <div class="text-center d-flex justify-content-center">
                <button type="button" class="btn btn-link text-red" data-bs-toggle="modal" data-bs-target="#registerModal">{{__('Crear una cuenta')}}</button>

                <button type="button" class="btn btn-link text-red" data-bs-toggle="modal" data-bs-target="#changePassModal">{{__('¿Olvidaste tu contraseña?')}}</button>
            </div>

        </div>

    </div>

    <livewire:forgot-password>

</div>