@extends('layout.master')

@section('content')
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            @include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/sidebar-layout/_header')
            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                @include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/sidebar-layout/_sidebar')
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container container-fluid">
                                <!--begin::Col-->
                                <div class="col-xxl-12">  
                                {{ $slot }}
                                </div>
                                <!--begin::Col-->
                            </div>
                            <!--begin::Content container-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Content wrapper-->
                    @include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/sidebar-layout/_footer')
                </div>
                <!--end:::Main-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->
    
    @include('partials/_drawers')

    @include('partials/_modals')

    @include('partials/_scrolltop')

@endsection

@section('content_no_sidebar')
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            @include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/sidebar-layout/_header')
            
            <!--begin::Wrapper-->
            <div class="app-wrapper-no-sidebar flex-column flex-row-fluid" id="kt_app_wrapper">
                <section class="" style="background-color: #614092">
                    <div class="container">
                      <!-- Hero Section -->
                      <div class="row align-items-center g-0">
                        <div class="col-xl-5 col-lg-6 col-md-12">
                          <div class="py-7 py-lg-0">
                            <h1 class="text-white display-4 fw-bold">El lugar dónde comienzan las noticias</h1>
                            <p class="text-white-50 mb-4 lead">Compra, vende o comparte contenidos e información de interés público.</p>
                            <a href="pages/course-filter-list.html" class="btn btn-dark">Crea tu cuenta grátis</a>
                            
                          </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-12 text-lg-end text-center">
                          <img src="https://geeksui.codescandy.com/geeks/assets/images/hero/hero-img.png" alt="heroimg" class="img-fluid">
                        </div>
                      </div>
                    </div>
                  </section>
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container container-fluid">
                                <!--begin::Col-->
                                <div class="col-xxl-12">  
                                {{ $slot }}
                                </div>
                                <!--begin::Col-->
                            </div>
                            <!--begin::Content container-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Content wrapper-->
                    @include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/sidebar-layout/_footer')
                </div>
                <!--end:::Main-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->
    

    @include('partials/_drawers')

    @include('partials/_modals')

    @include('partials/_scrolltop')

@endsection


