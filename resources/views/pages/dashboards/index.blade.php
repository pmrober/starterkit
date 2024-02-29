<x-default-layout>

    @section('title')
        Dashboard
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('dashboard') }}
    @endsection
    <!--begin:: Last Publications-->
    <div class="mb-5 ms-15">
        <!--begin::Title-->
        <h2 class="fs-2x text-gray-900" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">Últimas publicaciones</h2>
        <!--end::Title-->
    </div>
    <!--begin::Slider-->
    <div class="tns tns-default" style="direction: ltr">
        <!--begin::Wrapper-->
        <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="false" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider1_prev" data-tns-next-button="#kt_team_slider1_next" data-tns-responsive="{1200: {items: 4}, 992: {items: 3}}">
            <!--begin::Item-->
            <!--begin::Col-->
            <div class="col">
                <!--begin::Hot sales post-->
                <div class="card-xl-stretch me-md-6">
                    <!--begin::Image-->
                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover min-h-175px position-relative" style="background-image:url('assets/media/stock/600x400/img-23.jpg')">
                        <span class="badge badge-info badge-lg position-absolute rounded-0 p-3">EXCLUSIVA</span>
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
                                <a href="#" class="fs-5 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
                                <!--end::Title-->
                                <span class="text-muted fw-semibold d-block fs-7">hace 9 días en null (Macao)</span>
                                <div class="flex mt-2">
                                    <span class="badge badge badge-info">Economía</span>
                                    <span class="badge badge-secondary">Ofrezco o vendo</span>
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
                            <div id="favorites_drawer_button" class="btn btn-icon-lik-header btn-color-gray-800 btn-active-color-info w-40px h-40px w-md-35px h-md-35px">
                                <i class="bi bi-heart fs-2x"></i>
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
            <!--begin::Col-->
            <div class="col">
                <!--begin::Hot sales post-->
                <div class="card-xl-stretch me-md-6">
                    <!--begin::Image-->
                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover min-h-175px position-relative" style="background-image:url('assets/media/stock/600x400/img-23.jpg')">
                        <span class="badge badge-info badge-lg position-absolute rounded-0 p-3">EXCLUSIVA</span>
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
                                <a href="#" class="fs-5 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
                                <!--end::Title-->
                                <span class="text-muted fw-semibold d-block fs-7">hace 9 días en null (Macao)</span>
                                <div class="flex mt-2">
                                    <span class="badge badge badge-info">Economía</span>
                                    <span class="badge badge-secondary">Ofrezco o vendo</span>
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
                            <div id="favorites_drawer_button" class="btn btn-icon-lik-header btn-color-gray-800 btn-active-color-info w-40px h-40px w-md-35px h-md-35px">
                                <i class="bi bi-heart fs-2x"></i>
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
            <!--begin::Col-->
            <div class="col">
                <!--begin::Hot sales post-->
                <div class="card-xl-stretch me-md-6">
                    <!--begin::Image-->
                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover min-h-175px position-relative" style="background-image:url('assets/media/stock/600x400/img-23.jpg')">
                        <span class="badge badge-info badge-lg position-absolute rounded-0 p-3">EXCLUSIVA</span>
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
                                <a href="#" class="fs-5 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
                                <!--end::Title-->
                                <span class="text-muted fw-semibold d-block fs-7">hace 9 días en null (Macao)</span>
                                <div class="flex mt-2">
                                    <span class="badge badge badge-info">Economía</span>
                                    <span class="badge badge-secondary">Ofrezco o vendo</span>
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
                            <div id="favorites_drawer_button" class="btn btn-icon-lik-header btn-color-gray-800 btn-active-color-info w-40px h-40px w-md-35px h-md-35px">
                                <i class="bi bi-heart fs-2x"></i>
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
            <!--begin::Col-->
            <div class="col">
                <!--begin::Hot sales post-->
                <div class="card-xl-stretch me-md-6">
                    <!--begin::Image-->
                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover min-h-175px position-relative" style="background-image:url('assets/media/stock/600x400/img-23.jpg')">
                        <span class="badge badge-info badge-lg position-absolute rounded-0 p-3">EXCLUSIVA</span>
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
                                <a href="#" class="fs-5 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
                                <!--end::Title-->
                                <span class="text-muted fw-semibold d-block fs-7">hace 9 días en null (Macao)</span>
                                <div class="flex mt-2">
                                    <span class="badge badge badge-info">Economía</span>
                                    <span class="badge badge-secondary">Ofrezco o vendo</span>
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
                            <div id="favorites_drawer_button" class="btn btn-icon-lik-header btn-color-gray-800 btn-active-color-info w-40px h-40px w-md-35px h-md-35px">
                                <i class="bi bi-heart fs-2x"></i>
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
            <!--begin::Col-->
            <div class="col">
                <!--begin::Hot sales post-->
                <div class="card-xl-stretch me-md-6">
                    <!--begin::Image-->
                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover min-h-175px position-relative" style="background-image:url('assets/media/stock/600x400/img-23.jpg')">
                        <span class="badge badge-info badge-lg position-absolute rounded-0 p-3">EXCLUSIVA</span>
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
                                <a href="#" class="fs-5 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
                                <!--end::Title-->
                                <span class="text-muted fw-semibold d-block fs-7">hace 9 días en null (Macao)</span>
                                <div class="flex mt-2">
                                    <span class="badge badge badge-info">Economía</span>
                                    <span class="badge badge-secondary">Ofrezco o vendo</span>
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
                            <div id="favorites_drawer_button" class="btn btn-icon-lik-header btn-color-gray-800 btn-active-color-info w-40px h-40px w-md-35px h-md-35px">
                                <i class="bi bi-heart fs-2x"></i>
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
            <!--end::Item-->
            
        </div>
        <!--end::Wrapper-->
        <!--begin::Button-->
        <button class="btn btn-icon btn-dark rounded-circle" id="kt_team_slider1_prev">
            <i class="ki-outline ki-left fs-2x"></i>
        </button>
        <!--end::Button-->
        <!--begin::Button-->
        <button class="btn btn-icon btn-dark rounded-circle" id="kt_team_slider1_next">
            <i class="ki-outline ki-right fs-2x"></i>
        </button>
        <!--end::Button-->
    </div>
    <!--end::Slider-->
    <!--end:: Last Publications-->

    <!--begin:: Featured posts-->
    <div class="mb-5 mt-15 ms-15">
        <!--begin::Title-->
        <h2 class="fs-2x text-gray-900" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">Grupos más populares</h2>
        <!--end::Title-->
    </div>
    <!--begin::Slider-->
    <div class="tns tns-default" style="direction: ltr">
        <!--begin::Wrapper-->
        <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="false" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider2_prev" data-tns-next-button="#kt_team_slider2_next" data-tns-responsive="{1200: {items: 4}, 992: {items: 3}}">
            <!--begin::Item-->
            <!--begin::Col-->
            <div class="col">
                <!--begin::Hot sales post-->
                <div class="card-xl-stretch me-md-6">
                    <!--begin::Image-->
                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover min-h-175px position-relative" style="background-image:url('assets/media/stock/600x400/img-23.jpg')">
                        <span class="badge badge-info badge-lg position-absolute rounded-0 p-3">EXCLUSIVA</span>
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
                                <a href="#" class="fs-5 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
                                <!--end::Title-->
                                <span class="text-muted fw-semibold d-block fs-7">hace 9 días en null (Macao)</span>
                                <div class="flex mt-2">
                                    <span class="badge badge badge-info">Economía</span>
                                    <span class="badge badge-secondary">Ofrezco o vendo</span>
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
                            <div id="favorites_drawer_button" class="btn btn-icon-lik-header btn-color-gray-800 btn-active-color-info w-40px h-40px w-md-35px h-md-35px">
                                <i class="bi bi-heart fs-2x"></i>
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
            <!--begin::Col-->
            <div class="col">
                <!--begin::Hot sales post-->
                <div class="card-xl-stretch me-md-6">
                    <!--begin::Image-->
                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover min-h-175px position-relative" style="background-image:url('assets/media/stock/600x400/img-23.jpg')">
                        <span class="badge badge-info badge-lg position-absolute rounded-0 p-3">EXCLUSIVA</span>
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
                                <a href="#" class="fs-5 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
                                <!--end::Title-->
                                <span class="text-muted fw-semibold d-block fs-7">hace 9 días en null (Macao)</span>
                                <div class="flex mt-2">
                                    <span class="badge badge badge-info">Economía</span>
                                    <span class="badge badge-secondary">Ofrezco o vendo</span>
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
                            <div id="favorites_drawer_button" class="btn btn-icon-lik-header btn-color-gray-800 btn-active-color-info w-40px h-40px w-md-35px h-md-35px">
                                <i class="bi bi-heart fs-2x"></i>
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
            <!--begin::Col-->
            <div class="col">
                <!--begin::Hot sales post-->
                <div class="card-xl-stretch me-md-6">
                    <!--begin::Image-->
                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover min-h-175px position-relative" style="background-image:url('assets/media/stock/600x400/img-23.jpg')">
                        <span class="badge badge-info badge-lg position-absolute rounded-0 p-3">EXCLUSIVA</span>
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
                                <a href="#" class="fs-5 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
                                <!--end::Title-->
                                <span class="text-muted fw-semibold d-block fs-7">hace 9 días en null (Macao)</span>
                                <div class="flex mt-2">
                                    <span class="badge badge badge-info">Economía</span>
                                    <span class="badge badge-secondary">Ofrezco o vendo</span>
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
                            <div id="favorites_drawer_button" class="btn btn-icon-lik-header btn-color-gray-800 btn-active-color-info w-40px h-40px w-md-35px h-md-35px">
                                <i class="bi bi-heart fs-2x"></i>
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
            <!--begin::Col-->
            <div class="col">
                <!--begin::Hot sales post-->
                <div class="card-xl-stretch me-md-6">
                    <!--begin::Image-->
                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover min-h-175px position-relative" style="background-image:url('assets/media/stock/600x400/img-23.jpg')">
                        <span class="badge badge-info badge-lg position-absolute rounded-0 p-3">EXCLUSIVA</span>
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
                                <a href="#" class="fs-5 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
                                <!--end::Title-->
                                <span class="text-muted fw-semibold d-block fs-7">hace 9 días en null (Macao)</span>
                                <div class="flex mt-2">
                                    <span class="badge badge badge-info">Economía</span>
                                    <span class="badge badge-secondary">Ofrezco o vendo</span>
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
                            <div id="favorites_drawer_button" class="btn btn-icon-lik-header btn-color-gray-800 btn-active-color-info w-40px h-40px w-md-35px h-md-35px">
                                <i class="bi bi-heart fs-2x"></i>
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
            <!--begin::Col-->
            <div class="col">
                <!--begin::Hot sales post-->
                <div class="card-xl-stretch me-md-6">
                    <!--begin::Image-->
                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover min-h-175px position-relative" style="background-image:url('assets/media/stock/600x400/img-23.jpg')">
                        <span class="badge badge-info badge-lg position-absolute rounded-0 p-3">EXCLUSIVA</span>
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
                                <a href="#" class="fs-5 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
                                <!--end::Title-->
                                <span class="text-muted fw-semibold d-block fs-7">hace 9 días en null (Macao)</span>
                                <div class="flex mt-2">
                                    <span class="badge badge badge-info">Economía</span>
                                    <span class="badge badge-secondary">Ofrezco o vendo</span>
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
                            <div id="favorites_drawer_button" class="btn btn-icon-lik-header btn-color-gray-800 btn-active-color-info w-40px h-40px w-md-35px h-md-35px">
                                <i class="bi bi-heart fs-2x"></i>
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
            <!--end::Item-->
            
        </div>
        <!--end::Wrapper-->
        <!--begin::Button-->
        <button class="btn btn-icon btn-dark rounded-circle" id="kt_team_slider2_prev">
            <i class="ki-outline ki-left fs-2x"></i>
        </button>
        <!--end::Button-->
        <!--begin::Button-->
        <button class="btn btn-icon btn-dark rounded-circle" id="kt_team_slider2_next">
            <i class="ki-outline ki-right fs-2x"></i>
        </button>
        <!--end::Button-->
    </div>
    <!--end::Slider-->
    <!--end:: Featured posts-->

    <!--begin:: Featured groups-->
    <div class="mb-5 mt-15 ms-15">
        <!--begin::Title-->
        <h2 class="fs-2x text-gray-900" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">Publicaciones destacadas</h2>
        <!--end::Title-->
    </div>
    <!--begin::LastSlider-->
    <div class="tns tns-default" style="direction: ltr">
        <!--begin::Wrapper-->
        <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="false" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider3_prev" data-tns-next-button="#kt_team_slider3_next" data-tns-responsive="{1200: {items: 4}, 992: {items: 3}}">
            <!--begin::Item-->
            <!--begin::Col-->
            <div class="col">
                <!--begin::Hot sales post-->
                <div class="card-xl-stretch me-md-6">
                    <!--begin::Image-->
                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover min-h-175px position-relative" style="background-image:url('assets/media/stock/600x400/img-23.jpg')">
                        <span class="badge badge-info badge-lg position-absolute rounded-0 p-3">EXCLUSIVA</span>
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
                                <a href="#" class="fs-5 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
                                <!--end::Title-->
                                <span class="text-muted fw-semibold d-block fs-7">hace 9 días en null (Macao)</span>
                                <div class="flex mt-2">
                                    <span class="badge badge badge-info">Economía</span>
                                    <span class="badge badge-secondary">Ofrezco o vendo</span>
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
                            <div id="favorites_drawer_button" class="btn btn-icon-lik-header btn-color-gray-800 btn-active-color-info w-40px h-40px w-md-35px h-md-35px">
                                <i class="bi bi-heart fs-2x"></i>
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
            <!--begin::Col-->
            <div class="col">
                <!--begin::Hot sales post-->
                <div class="card-xl-stretch me-md-6">
                    <!--begin::Image-->
                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover min-h-175px position-relative" style="background-image:url('assets/media/stock/600x400/img-23.jpg')">
                        <span class="badge badge-info badge-lg position-absolute rounded-0 p-3">EXCLUSIVA</span>
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
                                <a href="#" class="fs-5 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
                                <!--end::Title-->
                                <span class="text-muted fw-semibold d-block fs-7">hace 9 días en null (Macao)</span>
                                <div class="flex mt-2">
                                    <span class="badge badge badge-info">Economía</span>
                                    <span class="badge badge-secondary">Ofrezco o vendo</span>
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
                            <div id="favorites_drawer_button" class="btn btn-icon-lik-header btn-color-gray-800 btn-active-color-info w-40px h-40px w-md-35px h-md-35px">
                                <i class="bi bi-heart fs-2x"></i>
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
            <!--begin::Col-->
            <div class="col">
                <!--begin::Hot sales post-->
                <div class="card-xl-stretch me-md-6">
                    <!--begin::Image-->
                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover min-h-175px position-relative" style="background-image:url('assets/media/stock/600x400/img-23.jpg')">
                        <span class="badge badge-info badge-lg position-absolute rounded-0 p-3">EXCLUSIVA</span>
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
                                <a href="#" class="fs-5 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
                                <!--end::Title-->
                                <span class="text-muted fw-semibold d-block fs-7">hace 9 días en null (Macao)</span>
                                <div class="flex mt-2">
                                    <span class="badge badge badge-info">Economía</span>
                                    <span class="badge badge-secondary">Ofrezco o vendo</span>
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
                            <div id="favorites_drawer_button" class="btn btn-icon-lik-header btn-color-gray-800 btn-active-color-info w-40px h-40px w-md-35px h-md-35px">
                                <i class="bi bi-heart fs-2x"></i>
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
            <!--begin::Col-->
            <div class="col">
                <!--begin::Hot sales post-->
                <div class="card-xl-stretch me-md-6">
                    <!--begin::Image-->
                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover min-h-175px position-relative" style="background-image:url('assets/media/stock/600x400/img-23.jpg')">
                        <span class="badge badge-info badge-lg position-absolute rounded-0 p-3">EXCLUSIVA</span>
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
                                <a href="#" class="fs-5 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
                                <!--end::Title-->
                                <span class="text-muted fw-semibold d-block fs-7">hace 9 días en null (Macao)</span>
                                <div class="flex mt-2">
                                    <span class="badge badge badge-info">Economía</span>
                                    <span class="badge badge-secondary">Ofrezco o vendo</span>
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
                            <div id="favorites_drawer_button" class="btn btn-icon-lik-header btn-color-gray-800 btn-active-color-info w-40px h-40px w-md-35px h-md-35px">
                                <i class="bi bi-heart fs-2x"></i>
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
            <!--begin::Col-->
            <div class="col">
                <!--begin::Hot sales post-->
                <div class="card-xl-stretch me-md-6">
                    <!--begin::Image-->
                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover min-h-175px position-relative" style="background-image:url('assets/media/stock/600x400/img-23.jpg')">
                        <span class="badge badge-info badge-lg position-absolute rounded-0 p-3">EXCLUSIVA</span>
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
                                <a href="#" class="fs-5 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
                                <!--end::Title-->
                                <span class="text-muted fw-semibold d-block fs-7">hace 9 días en null (Macao)</span>
                                <div class="flex mt-2">
                                    <span class="badge badge badge-info">Economía</span>
                                    <span class="badge badge-secondary">Ofrezco o vendo</span>
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
                            <div id="favorites_drawer_button" class="btn btn-icon-lik-header btn-color-gray-800 btn-active-color-info w-40px h-40px w-md-35px h-md-35px">
                                <i class="bi bi-heart fs-2x"></i>
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
            <!--end::Item-->
            
        </div>
        <!--end::Wrapper-->
        <!--begin::Button-->
        <button class="btn btn-icon btn-dark rounded-circle" id="kt_team_slider3_prev">
            <i class="ki-outline ki-left fs-2x"></i>
        </button>
        <!--end::Button-->
        <!--begin::Button-->
        <button class="btn btn-icon btn-dark rounded-circle" id="kt_team_slider3_next">
            <i class="ki-outline ki-right fs-2x"></i>
        </button>
        <!--end::Button-->
    </div>
    <!--end::Slider-->
    <!--end:: Featured groups-->
 
</x-default-layout>
