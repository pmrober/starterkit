@extends('layout.master')

@section('content')

    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
                <!--Aqui va el header-->
            <!--end::Header-->
            <!--begin::Wrapper-->

            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->
    <!--begin::Drawers-->
    
    <!--begin::Notifications drawer-->
    <div id="notifications_drawer" class="bg-white p-10" data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#notifications_drawer_button" data-kt-drawer-close="#notifications_drawer_close" data-kt-drawer-width="400px">
        <div class="tab-pane fade show active" id="kt_timeline_widget_3_tab_content_4 w-100" role="tabpanel">     
            <!--begin::Wrapper-->
            <div class="d-flex align-items-center mb-6">
                <!--begin::Bullet-->
                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                <!--end::Bullet-->
                
                <!--begin::Info-->
                <div class="flex-grow-1 me-5">
                    <!--begin::Time-->
                    <div class="text-gray-800 fw-semibold fs-2">
                        10:20 - 11:00
                        <span class="text-gray-500 fw-semibold fs-7">
                            AM                                    </span>
                    </div>
                    <!--end::Time-->

                    <!--begin::Description-->
                    <div class="text-gray-700 fw-semibold fs-6">
                        9 Degree Project Estimation Meeting                                </div>
                    <!--end::Description-->

                    <!--begin::Link-->
                    <div class="text-gray-500 fw-semibold fs-7">
                        Lead by 
                        <!--begin::Name-->
                        <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>                  
                        <!--end::Name-->  
                    </div>
                    <!--end::Link-->
                </div>
                <!--end::Info-->

                <!--begin::Action-->                            
                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>                               
                <!--end::Action-->  
            </div>
            <!--end::Wrapper-->
        
            <!--begin::Wrapper-->
            <div class="d-flex align-items-center mb-6">
                <!--begin::Bullet-->
                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                <!--end::Bullet-->
                
                <!--begin::Info-->
                <div class="flex-grow-1 me-5">
                    <!--begin::Time-->
                    <div class="text-gray-800 fw-semibold fs-2">
                        16:30 - 17:00
                        <span class="text-gray-500 fw-semibold fs-7">
                            PM                                    </span>
                    </div>
                    <!--end::Time-->

                    <!--begin::Description-->
                    <div class="text-gray-700 fw-semibold fs-6">
                        Dashboard UI/UX Design Review                                </div>
                    <!--end::Description-->

                    <!--begin::Link-->
                    <div class="text-gray-500 fw-semibold fs-7">
                        Lead by 
                        <!--begin::Name-->
                        <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>                  
                        <!--end::Name-->  
                    </div>
                    <!--end::Link-->
                </div>
                <!--end::Info-->

                <!--begin::Action-->                            
                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>                               
                <!--end::Action-->  
            </div>
            <!--end::Wrapper-->
        
            <!--begin::Wrapper-->
            <div class="d-flex align-items-center mb-6">
                <!--begin::Bullet-->
                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                <!--end::Bullet-->
                
                <!--begin::Info-->
                <div class="flex-grow-1 me-5">
                    <!--begin::Time-->
                    <div class="text-gray-800 fw-semibold fs-2">
                        12:00 - 13:40
                        <span class="text-gray-500 fw-semibold fs-7">
                            AM                                    </span>
                    </div>
                    <!--end::Time-->

                    <!--begin::Description-->
                    <div class="text-gray-700 fw-semibold fs-6">
                        Marketing Campaign Discussion                                </div>
                    <!--end::Description-->

                    <!--begin::Link-->
                    <div class="text-gray-500 fw-semibold fs-7">
                        Lead by 
                        <!--begin::Name-->
                        <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>                  
                        <!--end::Name-->  
                    </div>
                    <!--end::Link-->
                </div>
                <!--end::Info-->

                <!--begin::Action-->                            
                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>                               
                <!--end::Action-->  
            </div>
            <!--end::Wrapper-->
        </div>
    </div>
    <!--end::Notifications drawer-->
    <!--begin::User drawer-->
    <div id="kt_drawer_example_basic" class="bg-white" data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#kt_drawer_example_basic_button" data-kt-drawer-close="#kt_drawer_example_basic_close" data-kt-drawer-width="300px">
        <!--begin::User account menu-->
        <div class="menu menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-100" data-kt-menu="true">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <div class="menu-content d-flex align-items-center px-3">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-50px me-5">
                        <img alt="Logo" src="assets/media/avatars/300-1.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Username-->
                    <div class="d-flex flex-column">
                        <div class="fw-bold d-flex align-items-center fs-5">Max Smith 
                        <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
                        <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
                    </div>
                    <!--end::Username-->
                </div>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu separator-->
            <div class="separator my-2"></div>
            <!--end::Menu separator-->
            <!--begin::Menu item-->
            <div class="menu-item px-5">
                <a href="account/overview.html" class="menu-link px-5">My Profile</a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-5">
                <a href="apps/projects/list.html" class="menu-link px-5">
                    <span class="menu-text">My Projects</span>
                    <span class="menu-badge">
                        <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                    </span>
                </a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                <a href="#" class="menu-link px-5">
                    <span class="menu-title">My Subscription</span>
                    <span class="menu-arrow"></span>
                </a>
                <!--begin::Menu sub-->
                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="account/referrals.html" class="menu-link px-5">Referrals</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="account/billing.html" class="menu-link px-5">Billing</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="account/statements.html" class="menu-link px-5">Payments</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="account/statements.html" class="menu-link d-flex flex-stack px-5">Statements 
                        <span class="ms-2 lh-0" data-bs-toggle="tooltip" title="View your statements">
                            <i class="ki-outline ki-information-5 fs-5"></i>
                        </span></a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu separator-->
                    <div class="separator my-2"></div>
                    <!--end::Menu separator-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <div class="menu-content px-3">
                            <label class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                <span class="form-check-label text-muted fs-7">Notifications</span>
                            </label>
                        </div>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu sub-->
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-5">
                <a href="account/statements.html" class="menu-link px-5">My Statements</a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu separator-->
            <div class="separator my-2"></div>
            <!--end::Menu separator-->
            <!--begin::Menu item-->
            <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                <a href="#" class="menu-link px-5">
                    <span class="menu-title position-relative">Mode 
                    <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                        <i class="ki-outline ki-night-day theme-light-show fs-2"></i>
                        <i class="ki-outline ki-moon theme-dark-show fs-2"></i>
                    </span></span>
                </a>
                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="ki-outline ki-night-day fs-2"></i>
                            </span>
                            <span class="menu-title">Light</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="ki-outline ki-moon fs-2"></i>
                            </span>
                            <span class="menu-title">Dark</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="ki-outline ki-screen fs-2"></i>
                            </span>
                            <span class="menu-title">System</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                <a href="#" class="menu-link px-5">
                    <span class="menu-title position-relative">Language 
                    <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English 
                    <img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/united-states.svg" alt="" /></span></span>
                </a>
                <!--begin::Menu sub-->
                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="account/settings.html" class="menu-link d-flex px-5 active">
                        <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
                        </span>English</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="account/settings.html" class="menu-link d-flex px-5">
                        <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
                        </span>Spanish</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="account/settings.html" class="menu-link d-flex px-5">
                        <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
                        </span>German</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="account/settings.html" class="menu-link d-flex px-5">
                        <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
                        </span>Japanese</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="account/settings.html" class="menu-link d-flex px-5">
                        <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="assets/media/flags/france.svg" alt="" />
                        </span>French</a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu sub-->
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-5 my-1">
                <a href="account/settings.html" class="menu-link px-5">Account Settings</a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-5">
                <a href="authentication/layouts/corporate/sign-in.html" class="menu-link px-5">Sign Out</a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::User account menu-->
    </div>
    <!--end::User drawer-->
    <!--end::Drawers-->

    @include('partials/_drawers')

    @include('partials/_modals')

    @include('partials/_scrolltop')

@endsection
