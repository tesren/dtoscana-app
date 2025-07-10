<div>

    @php
        $contact = request()->query('contact');
    @endphp

    @if ($contact != 'no')
        <a href="https://wa.me/523322005523?text={{ urlencode(__("Hola, vengo del sitio web de D'Toscana")) }}" id="whatsapp-btn" class="position-fixed d-none d-lg-block bottom-0 end-0 z-3 m-3" data-bs-toggle="tooltip" data-bs-title="{{ __('¡Envíanos un mensaje!') }}" target="_blank" rel="noopener noreferrer">
            <img width="70px" src="{{asset('img/whatsapp-btn.webp')}}" alt="Contactar por WhatsApp">
        </a>

        <div class="fixed-bottom px-0 py-2 d-block d-lg-none bg-white border-top border-light">
            <div class="row">

                <div class="col-7 lh-sm">
                    <div class="fw-light" style="font-size: 12px;">
                        WhatsApp
                    </div>
                    <div class="fs-5">{{__('¡Envíanos un mensaje!')}}</div>
                </div>

                <div class="col-5 align-self-center">
                    <a class="btn btn-red w-100 fs-6" href="https://wa.me/5213322005523?text={{__("Hola, vengo del sitio web de D'Toscana")}}" target="_blank" rel="noopener noreferrer">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp
                    </a>
                </div>

            </div>
        </div>
    @endif

    @script
        <script>
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
            const btn = document.getElementById('whatsapp-btn');
            
            if (btn && window.innerWidth > 992) {
                const tooltip = new bootstrap.Tooltip(btn);
                tooltip.show();
            }

        </script>
    @endscript
</div>
