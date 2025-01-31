<div class="position-fixed bottom-0 start-50 w-75 d-none d-lg-block" id="banner_frontpage" style="transform: translateX(-50%); z-index:20; max-width:45%;">

    <a href="#promotionModal" data-bs-toggle="modal" data-bs-target="#promotionModal">
        <img src="{{asset('/img/banner-promotion.webp')}}" alt="Promoción D'Toscana" class="w-100">
    
        <div class="position-absolute row justify-content-start top-0 start-0 h-100 w-100">
    
            <div class="col-6 text-white align-self-end mb-3 mb-xxl-4 ps-5">
                <div class="fw-bold fs-4">{{__('Promoción')}}</div>
                <div class="fs-5 fw-light">{{__('Por tiempo limitado.')}}</div>
            </div>
    
            <div class="col-3 align-self-center">
            </div>
    
        </div>
    </a>

    <button class="btn-close position-absolute end-0 top-0 m-1" type="button" onclick="document.getElementById('banner_frontpage').classList.remove('d-lg-block')">
    </button>

</div>