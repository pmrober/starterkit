<!--begin::Header-->
<div id="kt_app_header" class="app-header">
	<!--begin::Header container-->
	<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
		<!--begin::Header logo-->
		<div class="app-header-logo d-flex align-items-center ps-lg-2 me-lg-10">
			<!--begin::Mobile toggle-->
			<div class="btn btn-icon btn-color-gray-500 btn-active-color-primary w-35px h-35px ms-n2 me-2 d-flex d-lg-none" id="kt_app_sidebar_mobile_toggle">
				<i class="ki-outline ki-abstract-14 fs-1"></i>
			</div>
			<!--end::Mobile toggle-->
			<!--begin::Logo image-->
			<a href="index.html">
				<img alt="Logo" src="{{ image('logos/default-small.svg') }}" class="h-30px" />
			</a>
			<!--end::Logo image-->
		</div>
		<!--end::Header logo-->
		<!--begin::Header wrapper-->
		<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
			<!--begin::Menu wrapper-->
			<div class="app-navbar flex-shrink-0" id="kt_app_header_menu_wrapper">
				<!--begin::Menu holder-->
				<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_menu_wrapper'}">
					<!--begin::Menu-->
					<div class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-title-gray-600 menu-state-gray-900 menu-arrow-gray-500 fw-semibold fw-semibold fs-6 align-items-stretch my-5 my-lg-0 px-2 px-lg-0" id="#kt_app_header_menu" data-kt-menu="true">
						<!--begin::Search-->
						<div class="app-navbar-item align-items-stretch me-0 me-lg-3">
							<!--begin::Search-->
							<div id="kt_header_search" class="header-search d-flex align-items-center w-100 w-lg-250px" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="lg" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
								
						<!--begin::Form(use d-none d-lg-block classes for responsive search)-->
						<form data-kt-search-element="form" class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
							<!--begin::Hidden input(Added to disable form autocomplete)-->
							<input type="hidden" />
							<!--end::Hidden input-->
							<!--begin::Icon-->
							<i class="ki-outline ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5"></i>
							<!--end::Icon-->
							<!--begin::Input-->
							<input type="text" class="search-input form-control ps-13" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
							<!--end::Input-->
							<!--begin::Spinner-->
							<span class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
								<span class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
							</span>
							<!--end::Spinner-->
							<!--begin::Reset-->
							<span class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
								<i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i>
							</span>
							<!--end::Reset-->
						</form>
						<!--end::Form-->
						<!--begin::Menu-->
						<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-350px">
							<!--begin::Wrapper-->
							<div data-kt-search-element="wrapper">
					
								<!--begin::Recently viewed-->
								<div class="" data-kt-search-element="main">
									<!--begin::Heading-->
									<div class="d-flex flex-stack fw-semibold mb-4">
										<!--begin::Label-->
										<span class="text-muted fs-6 me-2">Recently Searched:</span>
										<!--end::Label-->
										<!--begin::Toolbar-->
										<div class="d-flex" data-kt-search-element="toolbar">
											<!--begin::Preferences toggle-->
											<div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle=" title="Show search preferences">
												<i class="ki-outline ki-setting-2 fs-2"></i>
											</div>
											<!--end::Preferences toggle-->
											<!--begin::Advanced search toggle-->
											<div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1" data-bs-toggle="tooltip" title="Show more search options">
												<i class="ki-outline ki-down fs-2"></i>
											</div>
											<!--end::Advanced search toggle-->
										</div>
										<!--end::Toolbar-->
									</div>
									<!--end::Heading-->
									<!--begin::Items-->
									<div class="scroll-y mh-200px mh-lg-325px">
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-5">
											<!--begin::Symbol-->
											<div class="symbol symbol-40px me-4">
												<span class="symbol-label bg-light">
													<i class="ki-outline ki-laptop fs-2 text-primary"></i>
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div class="d-flex flex-column">
												<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
												<span class="fs-7 text-muted fw-semibold">#45789</span>
											</div>
											<!--end::Title-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-5">
											<!--begin::Symbol-->
											<div class="symbol symbol-40px me-4">
												<span class="symbol-label bg-light">
													<i class="ki-outline ki-chart-simple fs-2 text-primary"></i>
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div class="d-flex flex-column">
												<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept API Project Meeting</a>
												<span class="fs-7 text-muted fw-semibold">#84050</span>
											</div>
											<!--end::Title-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-5">
											<!--begin::Symbol-->
											<div class="symbol symbol-40px me-4">
												<span class="symbol-label bg-light">
													<i class="ki-outline ki-chart fs-2 text-primary"></i>
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div class="d-flex flex-column">
												<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI Monitoring App Launch</a>
												<span class="fs-7 text-muted fw-semibold">#84250</span>
											</div>
											<!--end::Title-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-5">
											<!--begin::Symbol-->
											<div class="symbol symbol-40px me-4">
												<span class="symbol-label bg-light">
													<i class="ki-outline ki-chart-line-down fs-2 text-primary"></i>
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div class="d-flex flex-column">
												<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project Reference FAQ</a>
												<span class="fs-7 text-muted fw-semibold">#67945</span>
											</div>
											<!--end::Title-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-5">
											<!--begin::Symbol-->
											<div class="symbol symbol-40px me-4">
												<span class="symbol-label bg-light">
													<i class="ki-outline ki-sms fs-2 text-primary"></i>
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div class="d-flex flex-column">
												<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro App Development</a>
												<span class="fs-7 text-muted fw-semibold">#84250</span>
											</div>
											<!--end::Title-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-5">
											<!--begin::Symbol-->
											<div class="symbol symbol-40px me-4">
												<span class="symbol-label bg-light">
													<i class="ki-outline ki-bank fs-2 text-primary"></i>
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div class="d-flex flex-column">
												<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix Mobile App</a>
												<span class="fs-7 text-muted fw-semibold">#45690</span>
											</div>
											<!--end::Title-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-5">
											<!--begin::Symbol-->
											<div class="symbol symbol-40px me-4">
												<span class="symbol-label bg-light">
													<i class="ki-outline ki-chart-line-down fs-2 text-primary"></i>
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div class="d-flex flex-column">
												<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
												<span class="fs-7 text-muted fw-semibold">#24005</span>
											</div>
											<!--end::Title-->
										</div>
										<!--end::Item-->
									</div>
									<!--end::Items-->
								</div>
								<!--end::Recently viewed-->
								<!--begin::Empty-->
								<div data-kt-search-element="empty" class="text-center d-none">
									<!--begin::Icon-->
									<div class="pt-10 pb-10">
										<i class="ki-outline ki-search-list fs-4x opacity-50"></i>
									</div>
									<!--end::Icon-->
									<!--begin::Message-->
									<div class="pb-15 fw-semibold">
										<h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
										<div class="text-muted fs-7">Please try again with a different query</div>
									</div>
									<!--end::Message-->
								</div>
								<!--end::Empty-->
							</div>
							<!--end::Wrapper-->
							
							
						</div>
						<!--end::Menu-->
					</div>
					<!--end::Search-->
				</div>
				<!--end::Search-->
						
					</div>
					<!--end::Menu-->
				</div>
				<!--end::Menu holder-->
			</div>
			<!--end::Menu wrapper-->
			<!--begin::Navbar-->
			<div class="app-navbar flex-shrink-0">
				<!--begin::Favorites-->
				<div class="app-navbar-item ms-3 ms-md-6">
					<!--begin::Menu- wrapper-->
					<a href="#" class="btn btn-info">Publicar anuncio</a>
					<!--end::Menu wrapper-->
				</div>
				<!--end::Favorites-->
				<!--begin::Favorites-->
				<div class="app-navbar-item ms-3 ms-md-6">
					<!--begin::Menu- wrapper-->
					
					<div id="favorites_drawer_button" class="btn btn-icon-lik-header btn-color-gray-800 btn-active-color-info w-35px h-35px w-md-35px h-md-35px" >
						<i class="bi bi-heart fs-1"></i>
						<div class="badge badge-circle badge-danger position-absolute translate-middle bottom-0 ms-10 mt-8 h-15px w-15px fs-9">5</div>
					</div>
					<!--end::Menu wrapper-->
				</div>
				<!--end::Favorites-->
				<!--begin::Notifications-->
				<div class="app-navbar-item ms-3 ms-md-6">
					<!--begin::Menu- wrapper-->
					<div id="notifications_drawer_button" class="btn btn-icon-lik-header btn-color-gray-800 btn-active-color-info w-35px h-35px w-md-35px h-md-35px" data-kt-menu-trigger="{default: 'hover', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
						<i class="bi bi-bell fs-1"></i>
						<div class="badge badge-circle badge-danger position-absolute translate-middle bottom-0 ms-10 mt-8 h-15px w-15px fs-9">5</div>
					</div>
					<!--end::Menu wrapper-->
				</div>
				<!--end::Notifications-->
				<!--begin::User menu-->
				<div class="app-navbar-item ms-3 ms-md-6">
					<!--begin::Menu wrapper-->
					<div id="kt_drawer_example_basic_button" class="cursor-pointer symbol symbol-30px symbol-md-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
						<div class="symbol-label fs-2 fw-semibold bg-info text-inverse-info">S</div>
					</div>
					<!--end::Menu wrapper-->
				</div>
				<!--end::User menu-->
			</div>
			<!--end::Navbar-->
		</div>
		<!--end::Header wrapper-->
	</div>
	<!--end::Header container-->
</div>
<!--end::Header-->
