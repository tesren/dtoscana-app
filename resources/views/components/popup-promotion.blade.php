<div>
    <div class="modal fade" id="promotionModal" aria-labelledby="promotionModalLabel">
        <div class="modal-dialog modal-dialog-centered">
    
            <div class="modal-content bg-light">
    
                <div class="modal-header">
                    <h6 class="modal-title fs-4 fw-light" id="promotionModalLabel">{{__('Promoción limitada')}}</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
    
                <div class="modal-body p-0 position-relative">

                    <a href="{{route('tower', ['name' => 'Lucca'])}}" target="_blank" rel="noopener" class="text-decoration-none">
                        <img src="{{asset('/img/promotion-lucca-'.app()->getLocale().'.webp')}}" alt="D'Toscana Promoción especial" class="w-100" style="object-fit:cover; min-height: 400px;">
                    </a>

                </div>

                <div class="modal-footer">
                    <a href="{{route('tower', ['name' => 'Lucca'])}}" class="btn btn-red">
                        {{__('Ver inventario')}}
                    </a>
                </div>
    
            </div>
    
        </div>
    </div>
    
</div>