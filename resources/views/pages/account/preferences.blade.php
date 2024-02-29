<x-default-layout>

    @section('title')
        Permissions
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('user-management.permissions.index') }}
    @endsection
    <div class="mb-10 card">
        <!--begin::Form-->
        <form id="kt_modal_preferences_form" class="mx-auto mw-600px w-100 fv-plugins-bootstrap5 fv-plugins-framework">
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Wrapper-->
                <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-5 pb-lg-8">
                        <!--begin::Title-->
                        <h2 class="fw-bolder text-dark">Preferencias de búsqueda</h2>
                        <!--end::Title-->
                        <!--begin::Notice-->
                        <div class="text-muted fw-bold fs-6">Mostraremos en tu muro sólo las publicaciones que coincidan con tus preferencias.</div>
                        <!--end::Notice-->
                    </div>
                    <!--end::Heading-->
                    
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-5 fv-row">
                        <!--begin::Label-->
                        <label class="fs-5 fw-bold mb-2">Origen del anuncio</label>
                        <!--end::Label-->
                        <div class="fs-7 fw-semibold text-muted mb-3">Indícanos de qué paises de origen quieres que sean las publicaciones. Puedes seleccionar todos los que quieras. </div>
                        <!--begin::Input-->
                        <select id="countries_preference" name="countries_preference[]" class="form-select form-select-solid" data-control="select2" data-placeholder="Selecciona pais" data-allow-clear="true" multiple="" data-select2-id="select2-data-countries_preference" tabindex="-1" aria-hidden="true">
                            
                            <option value="AF">Afganistán</option>
                                                            
                        </select> 
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row row mb-5">
                        <!--begin::Label-->
                        <label class="fs-5 fw-bold mt-2">Áreas de interés</label>
                        <div class="text-muted fs-7 mb-3">Default file compression type when downloading folders</div>
                        <!--end::Label-->
                        <div class="d-flex flex-wrap align-items-center">
                                        
                                            
                            <!--begin::Checkbox-->
                            <div class="p-2 w-50"> 
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input name="publication_categories_preference" class="form-check-input h-20px w-20px" type="checkbox" value="1">
                                    <span class="form-check-label fw-semibold">Celebridades</span>
                                </label>
                            </div>
                                            
                            <!--begin::Checkbox-->
                            <div class="p-2 w-50"> 
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input name="publication_categories_preference" class="form-check-input h-20px w-20px" type="checkbox" value="7">
                                    <span class="form-check-label fw-semibold">Ciencia y tecnología</span>
                                </label>
                            </div>
                                            
                            <!--begin::Checkbox-->
                            <div class="p-2 w-50"> 
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input name="publication_categories_preference" class="form-check-input h-20px w-20px" type="checkbox" value="4">
                                    <span class="form-check-label fw-semibold">Cultura</span>
                                </label>
                            </div>
                                            
                            <!--begin::Checkbox-->
                            <div class="p-2 w-50"> 
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input name="publication_categories_preference" class="form-check-input h-20px w-20px" type="checkbox" value="3">
                                    <span class="form-check-label fw-semibold">Deporte</span>
                                </label>
                            </div>
                                            
                            <!--begin::Checkbox-->
                            <div class="p-2 w-50"> 
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input name="publication_categories_preference" class="form-check-input h-20px w-20px" type="checkbox" value="5">
                                    <span class="form-check-label fw-semibold">Economía</span>
                                </label>
                            </div>
                                            
                            <!--begin::Checkbox-->
                            <div class="p-2 w-50"> 
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input name="publication_categories_preference" class="form-check-input h-20px w-20px" type="checkbox" value="9">
                                    <span class="form-check-label fw-semibold">Medios de comunicación</span>
                                </label>
                            </div>
                                            
                            <!--begin::Checkbox-->
                            <div class="p-2 w-50"> 
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input name="publication_categories_preference" class="form-check-input h-20px w-20px" type="checkbox" value="2">
                                    <span class="form-check-label fw-semibold">Politica</span>
                                </label>
                            </div>
                                            
                            <!--begin::Checkbox-->
                            <div class="p-2 w-50"> 
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input name="publication_categories_preference" class="form-check-input h-20px w-20px" type="checkbox" value="6">
                                    <span class="form-check-label fw-semibold">Sociedad</span>
                                </label>
                            </div>
                                            
                            <!--begin::Checkbox-->
                            <div class="p-2 w-50"> 
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input name="publication_categories_preference" class="form-check-input h-20px w-20px" type="checkbox" value="8">
                                    <span class="form-check-label fw-semibold">Sucesos</span>
                                </label>
                            </div>
                                            
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row row mb-15">
                        
                        <!--begin::Label-->
                        <label class="fs-5 fw-bold mt-2">Tipo de anuncio</label>
                        <div class="text-muted fs-7 mb-3">Default file compression type when downloading folders</div>
                        <!--end::Label-->
                        <div class="d-flex flex-wrap align-items-center">
                                
                                                    <div class="p-2 w-50">     
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid me-10">
                                        <input name="type_of_ads_preference" class="form-check-input h-20px w-20px" type="checkbox" value="5">
                                        
                                        <span class="form-check-label fw-semibold">Curiosidad</span>
                                    </label>
                                    <!--end::Checkbox-->
                                </div>
                                                            <div class="p-2 w-50">     
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid me-10">
                                        <input name="type_of_ads_preference" class="form-check-input h-20px w-20px" type="checkbox" value="2">
                                        
                                        <span class="form-check-label fw-semibold">Denuncia pública</span>
                                    </label>
                                    <!--end::Checkbox-->
                                </div>
                                                            <div class="p-2 w-50">     
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid me-10">
                                        <input name="type_of_ads_preference" class="form-check-input h-20px w-20px" type="checkbox" value="7">
                                        
                                        <span class="form-check-label fw-semibold">Estadística o análisis</span>
                                    </label>
                                    <!--end::Checkbox-->
                                </div>
                                                            <div class="p-2 w-50">     
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid me-10">
                                        <input name="type_of_ads_preference" class="form-check-input h-20px w-20px" type="checkbox" value="8">
                                        
                                        <span class="form-check-label fw-semibold">Evento, manifestación...</span>
                                    </label>
                                    <!--end::Checkbox-->
                                </div>
                                                            <div class="p-2 w-50">     
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid me-10">
                                        <input name="type_of_ads_preference" class="form-check-input h-20px w-20px" type="checkbox" value="3">
                                        
                                        <span class="form-check-label fw-semibold">Información de interés público</span>
                                    </label>
                                    <!--end::Checkbox-->
                                </div>
                                                            <div class="p-2 w-50">     
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid me-10">
                                        <input name="type_of_ads_preference" class="form-check-input h-20px w-20px" type="checkbox" value="13">
                                        
                                        <span class="form-check-label fw-semibold">Información sobre un suceso</span>
                                    </label>
                                    <!--end::Checkbox-->
                                </div>
                                                            <div class="p-2 w-50">     
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid me-10">
                                        <input name="type_of_ads_preference" class="form-check-input h-20px w-20px" type="checkbox" value="9">
                                        
                                        <span class="form-check-label fw-semibold">Nota de prensa</span>
                                    </label>
                                    <!--end::Checkbox-->
                                </div>
                                                            <div class="p-2 w-50">     
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid me-10">
                                        <input name="type_of_ads_preference" class="form-check-input h-20px w-20px" type="checkbox" value="4">
                                        
                                        <span class="form-check-label fw-semibold">Opinión o valoración</span>
                                    </label>
                                    <!--end::Checkbox-->
                                </div>
                                                            <div class="p-2 w-50">     
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid me-10">
                                        <input name="type_of_ads_preference" class="form-check-input h-20px w-20px" type="checkbox" value="11">
                                        
                                        <span class="form-check-label fw-semibold">Para debatir</span>
                                    </label>
                                    <!--end::Checkbox-->
                                </div>
                                                            <div class="p-2 w-50">     
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid me-10">
                                        <input name="type_of_ads_preference" class="form-check-input h-20px w-20px" type="checkbox" value="10">
                                        
                                        <span class="form-check-label fw-semibold">Para reflexionar</span>
                                    </label>
                                    <!--end::Checkbox-->
                                </div>
                                                            <div class="p-2 w-50">     
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid me-10">
                                        <input name="type_of_ads_preference" class="form-check-input h-20px w-20px" type="checkbox" value="1">
                                        
                                        <span class="form-check-label fw-semibold">Reportaje o documental</span>
                                    </label>
                                    <!--end::Checkbox-->
                                </div>
                                    
                            
                            </div>
                            
    
                    </div>
                    <!--end::Input group-->
                    <!--begin::Heading-->
                    <div class="pb-5 pb-lg-8">
                        <!--begin::Title-->
                        <h2 class="fw-bolder text-dark">Búsqueda inteligente</h2>
                        <!--end::Title-->
                        <div class="alert alert-warning d-flex align-items-center mt-5">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                            <span class="svg-icon svg-icon-2hx svg-icon-warning me-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"></path>
                            <path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="currentColor"></path>
                            </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <div class="d-flex flex-column">
                                <h3 class="mb-1 text-warning">Acceso restringido</h3>
                                <span>El servicio de búsqueda inteligente sólo está disponible para usuarios con cuenta <span class="fw-bolder">SUPER BABBLER</span> o <span class="fw-bolder">BIG BABBLER</span> Si quieres conocer más detalles de las cuentas pincha <a href="Plan/GetPlans" class="ms-1 link-primary">Aquí</a>.</span>
                            </div>
                        </div>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="fv-row row mb-5">
                        <!--begin::Label-->
                        <div class="text-muted fs-7 pb-3">Introduce todas las palabras que quieres que busquemos en cada publicación. Recuerda poner un guion "-" entre palabras de la misma frase y una coma "," para indicar que es una frase o palabra nueva.</div>
                        <!--end::Label-->
                        <div class="d-flex align-items-center">
                            <!--begin::Editor-->
                            <textarea placeholder="EJEMPLO: guerra-de-ucrania, gobierno, will-smith" data-suscription="1" class="form-control form-control-solid" rows="5" name="keywords_preference" disabled=""></textarea>
                            <!--end::Editor--> 			
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->   
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Card body-->
            <!--begin::Modal footer-->
            <div class="modal-footer px-0 border border-0 pb-10">
                <!--begin::Actions-->
                <div class="col-md-12">
                    <div class="row text-center">
                        <div class="col-4">
                            <button type="reset" id="kt_modal_preferences_cancel" class="btn btn-light me-3 w-100">Cancelar</button>
                        </div>
                        <div class="col-8">
                            <button type="submit" id="kt_modal_preferences_submit" data-action="" class="btn btn-info w-100">
                                <span class="indicator-label">Guardar</span>
                                <span class="indicator-progress">Guardando
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button> 
                        </div>                        
                            
                    </div>
                    <!--end::Actions-->
                </div>
            </div>
            <!--end::Modal footer-->
            <input type="hidden" name="input_token" value="6f8b12c6733996fee899d21a75982026d0413a0316dfcc2279a524643637acb8">    </form>
        <!--end:Form-->
    </div>
</x-default-layout>