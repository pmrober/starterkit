<x-default-layout>

    @section('title')
        Permissions
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('user-management.permissions.index') }}
    @endsection
    <div class="card"> 
        <form class="mx-auto mw-600px w-100" novalidate="novalidate" id="kt_modal_notifications_form">  
            <div class="card-body">
                <!--begin::Form-->
                <!--begin::Wrapper-->
                <div class="w-100">
                        <!--begin::Heading-->
                        <div class="pb-5 pb-lg-10">
                            <!--begin::Title-->
                            <h3 class="fs-1 fw-bolder align-items-center text-dark">Notificaciones</h3>
                            <!--end::Title-->     
                        </div>
                        <!--end::Notice-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-stack mb-8">
                        <!--begin::Label-->
                        <div class="me-5">
                            <label class="fs-4 fw-semibold">Ventas</label>

                            <div class="fs-7 fw-semibold text-muted">Recibe un aviso cuando una de tus publicaciones haya recibido una venta </div>
                        </div>
                        <!--end::Label-->

                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input name="sales_notification" class="form-check-input" type="checkbox" value="1" checked="">
                            
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-stack mb-8">
                        <!--begin::Label-->
                        <div class="me-5">
                            <label class="fs-4 fw-semibold">Promociones y novedades littbabbler</label>

                            <div class="fs-7 fw-semibold text-muted">Deseo recibir información de las novedades, actualizaciones de servicios y otras actividades de la plataforma</div>
                        </div>
                        <!--end::Label-->

                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input name="news_alert_notification" class="form-check-input" type="checkbox" value="1" checked="">
                            
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-stack mb-8">
                        <!--begin::Label-->
                        <div class="me-5">
                            <label class="fs-4 fw-semibold">Publicaciones preferentes</label>

                            <div class="fs-7 fw-semibold text-muted">Te avisaremos cada vez que haya una publicación relacionada con tus preferencias de búsqueda</div>
                        </div>
                        <!--end::Label-->

                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input name="preferred_searches_notification" class="form-check-input" type="checkbox" value="1" checked="">
                            
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-stack mb-8">
                        <!--begin::Label-->
                        <div class="me-5">
                            <label class="fs-4 fw-semibold">Alertas inteligentes</label>

                            <div class="fs-7 fw-semibold text-muted">Te llegará un aviso cada vez que se publique un anuncio que incluya alguna de las palabras clave que configures en tus preferencias</div>
                        </div>
                        <!--end::Label-->

                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input name="smart_alerts_notification" class="form-check-input" type="checkbox" data-suscription="" value="1">
                            
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-stack mb-8">
                        <!--begin::Label-->
                        <div class="me-5">
                            <label class="fs-4 fw-semibold">Usuarios favoritos</label>

                            <div class="fs-7 fw-semibold text-muted">Te llegará un aviso cada vez que uno de tos usuarios favoritos publique un anuncio</div>
                        </div>
                        <!--end::Label-->

                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input name="favorite_user_notification" class="form-check-input" type="checkbox" data-suscription="" value="1">
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-stack mb-8">
                        <!--begin::Label-->
                        <div class="me-5">
                            <label class="fs-4 fw-semibold">Mensajería</label>

                            <div class="fs-7 fw-semibold text-muted">Te enviaremos una alerta cuando otros usuarios te envíen mensajes a travès de littbabbler</div>
                        </div>
                        <!--end::Label-->

                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input name="received_messages_notification" class="form-check-input" type="checkbox" value="1" checked="">
                            
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Input group-->
                    
                    <!--begin::Heading-->
                    <div class="pb-5 pb-lg-10">
                            <!--begin::Title-->
                            <label class="fs-4 fw-semibold">Comunicaciones obligatorias</label>
                            <!--end::Title-->     
                        </div>
                        <!--end::Notice-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-stack mb-8">
                        <!--begin::Label-->
                        <div class="me-5">
                            <div class="fs-7 fw-semibold text-muted">Recibiré correos electrónicos sobre los cambios de la Condiciones Generales o cualquier correo electrónico importante sobre mi cuenta (relacionado con la seguridad, por ejemplo).
                    </div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" checked="checked" disabled="">    
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-stack mb-8">
                        <!--begin::Label-->
                        <div class="me-5">
                            <div class="fs-7 fw-semibold text-muted">Recibiré intercambios con el equipo de soporte, contabilidad o moderación, tanto si es por iniciativa propia como si no.
                    </div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" checked="checked" disabled="">    
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-stack mb-8">
                        <!--begin::Label-->
                        <div class="me-5">
                            <div class="fs-7 fw-semibold text-muted">Recibiré comunicaciones relativas a mis pagos a realizar en la plataforma</div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" checked="checked" disabled="">    
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Input group-->
                    
            
            </div>
            <!--end::Wrapper-->
            <!--begin::Modal footer-->
            <div class="modal-footer px-0 border border-0">
                <!--begin::Actions-->
                <div class="col-md-12">
                <div class="row text-center">
                        <div class="col-4">
                            <button type="reset" id="kt_modal_notifications_cancel" class="btn btn-light me-3 w-100">Cancelar</button>
                        </div>
                        <div class="col-8">
                            <button type="submit" id="kt_modal_notifications_submit" data-action="" class="btn btn-info w-100">
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
            <input type="hidden" name="input_token" value="ea4ac129cbf533a3643752fe5d258d2f7dbe14011b982b25b35d66735dcb2c5e">  
        </form>
        <!--end::Form-->
    </div>
</x-default-layout>