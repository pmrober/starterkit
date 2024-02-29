<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">

	@if ( request()->is('account/*'))
		@include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/sidebar-layout/sidebar/_account-menu')
		
	@elseif (request()->is('publications'))
		@include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/sidebar-layout/sidebar/_publications-filter')
	@else
		@include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/sidebar-layout/sidebar/_menu')
	@endif
	      
</div>
<!--end::Sidebar-->

