<div>
    <div wire:loading.delay.class="opacity-50" class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-3 row-cols-xxl-4 g-10">
        @foreach($publications as $publication)
        <!--begin::Col-->
        <div @if($loop->last) id="last_record" @endif class="col">
            <!--begin::Hot sales post-->
            <div class="card-xl-stretch me-md-6">
                <!--begin::Image-->
                <div class="bgi-no-repeat bgi-position-center bgi-size-cover min-h-175px position-relative" style="background-image:url('assets/media/stock/600x400/img-23.jpg')">
                    @if ($publication->sail_type == 'exclusive')
                        <span class="badge badge-info badge-lg position-absolute rounded-0 p-3">EXCLUSIVA</span>
                    @endif
                    
                </div>
                <!--end::Image-->
                <!--begin::Body-->
                <div class="mt-5">
                    <div class="d-flex">
                        <div class="symbol symbol-40px me-3">
                            <div id="kt_drawer_example_basic_button" class="cursor-pointer symbol symbol-30px symbol-md-35px symbol-circle" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                <div class="symbol-label fs-2 fw-semibold bg-info text-inverse-info ">S</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start flex-column">
                            <!--begin::Title-->
                            <a href="#" class="line-clamp-2 fs-5 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">{{ $publication->title }}</a>
                            <!--end::Title-->
                            <span class="line-clamp-1 text-muted fw-semibold d-block fs-7">{{ $publication->created_at->diffForHumans() }} (Macao)</span>
                            <div class="flex mt-2">
                                <span class="badge badge badge-info">{{ $publication->section->name}}</span>
                                <span class="badge badge-secondary">{{ $publication->category->name}}</span>
                            </div>
                            
                        </div>
                    </div>

                    
                    <div class="fs-6 fw-bold mt-5 d-flex">
                        <!--begin::Label-->
                        <span class="badge border border-dashed fs-2 fw-bold text-gray-900 p-2 mr-auto">
                        <span class="fs-6 fw-semibold text-gray-500">$</span>28</span>
                        <!--end::Label-->
                        <!--begin::Action-->
                        
                        <a href="#" class="btn btn-outline btn-outline-info btn-active-light-info p-2 me-3">Contactar</a>
                        <button class="btn btn-icon-lik-header btn-color-gray-500 w-40px h-40px w-md-35px h-md-35px">
                            <i class="bi bi-heart fs-1"></i>
                        </button>
                        
                        <div>
                            
                            <div>
                                <button wire:click="like({{$publication}})" class="btn btn-icon-lik-header btn-color-active-gray-500 {{ $isLiked ? 'btn-color-danger' : 'btn-color-gray-500'}} w-40px h-40px w-md-35px h-md-35px">
                                    <i class="bi bi-hand-thumbs-up fs-1"></i>
                                </button>
                            </div>
                              
                        </div>
                        
                        
    
                        <!--end::Action-->
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Hot sales post-->
        </div>
        <!--end::Col-->
        @endforeach
    </div>
    @if($loadAmount <= $totalRecords)
    No hay más registros
    @endif

    <script>
        const lastRecord = document.getElementById('last_record');
        const options = {
            root: null,
            threshold: 1,
            rootMargin: '0px'
        }
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    @this.loadMore()
                }
            });
        });
        observer.observe(lastRecord);
    </script>

</div>
