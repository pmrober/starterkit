<!--begin::Account menu--> 
<div class="menu menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-5 w-100" data-kt-menu="true"> 
    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a class="menu-link px-2x {{ request()->routeIs('account.profile') ? 'active' : '' }}" href="{{ route('account.profile') }}">
            <span class="menu-icon pe-4">
                <i class="bi bi-person-fill fs-2x"></i>
            </span>
            Cuenta
        </a>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item px-5" href="">
        <a href="#" class="menu-link px-2x">
            <span class="menu-icon pe-4">
                <i class="bi bi-person-lines-fill fs-2x"></i>
            </span>
            Datos de contacto
        </a>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a class="menu-link px-2x {{ request()->routeIs('account.notifications') ? 'active' : '' }}" href="{{ route('account.notifications')}}">
            <span class="menu-icon pe-5">
                <i class="bi bi-bell-fill fs-2x"></i>
            </span>
            Notificaciones
        </a>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a class="menu-link px-2x {{ request()->routeIs('account.preferences') ? 'active' : '' }}" href="{{ route('account.preferences')}}">
            <span class="menu-icon pe-3">
                <i class="bi bi-search-heart-fill fs-2x"></i>
            </span>
            Preferencias de búsqueda
        </a>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu separator-->
    <div class="separator my-4"></div>
    <!--end::Menu separator-->
    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a class="menu-link px-2x {{ request()->routeIs('account.mypublications') ? 'active' : '' }}" href="{{ route('account.mypublications')}}">
            <span class="menu-icon pe-4">
                <i class="bi bi-sticky fs-2x"></i>
            </span>
            Mis publicaciones
        </a>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="#" class="menu-link px-2x {{ request()->routeIs('account.mygroups') ? 'active' : '' }}" href="{{ route('account.mygroups')}}">
            <span class="menu-icon pe-4">
                <i class="bi bi-stickies fs-2x"></i>
            </span>
            Mis grupos
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-5 pt-10">
        <a href="{{ route('account.subscription') }}" class="btn btn-info w-100 border-radius-0">Mi suscripcion</a>
    </div>
    <!--end::Menu item-->  
</div>
<!--end::Account menu-->
