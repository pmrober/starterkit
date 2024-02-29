<x-default-layout>

    @section('title')
        Permissions
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('user-management.permissions.index') }}
    @endsection
    <div class="card">
        <form class="mx-auto mw-600px w-100" novalidate="novalidate" id="kt_modal_account_form">
            <div class="card-body">
                <!--begin::Wrapper-->
                <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-5 pb-lg-10">
                        <!--begin::Title-->
                        <h3 class="fs-1 fw-bolder align-items-center text-dark">Modifica tu imagen de presentación</h3>
                        <!--end::Title-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Heading-->
                <!--begin::Wrapper-->
                <div class="w-100">
                    <!--end::Heading-->
                    <div class="row mb-6">
                        <!--begin::Col-->
                        <div class="col-lg-3">
    
                            <!--begin::Image input-->
                            <div id="kt_image_input_example_1" class="image-input image-input-placeholder image-input-circle image-input-empty" data-kt-image-input="true">
                                <!--begin::Image preview wrapper-->
                                <div class="image-input-wrapper w-100px h-100px" style="background-image: none;"></div>
                                <!--end::Image preview wrapper-->
                                <!--begin::Edit button-->
                                <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click" title="" data-bs-original-title="Change avatar">
                                    <i class="bi bi-pencil-fill fs-7"></i>
    
                                    <!--begin::Inputs-->
                                    <input type="file" name="avatar_user">
                                    <input type="hidden" name="avatar_remove">
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Edit button-->
                                <!--begin::Remove button-->
                                <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-dismiss="click" title="" data-bs-original-title="Remove avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Remove button-->
                            </div>
                            <!--end::Image input-->
                        </div>
                        <!--end::Col-->
                        <div class="col-lg-9">
                            <!--begin::Hint-->
                            <div class="text-muted fw-bold fs-6">Modifica tu foto de perfil</div>
                            <!--end::Hint-->
                            <div class="text-muted fw-bold fs-6">El archivo debe ser cuadrado (200 x 200 píxeles como mínimo), en formato PNG o JPG, y no debe superar los 4 MB.</div>
                        </div>
                    </div>
                </div>
                <!--end::Wrapper-->
                <input type="hidden" name="input_token" value="bccaac7cc0601329faa0ec091a4aa9646dc1ad1dab241e5432e16cf2366224dc">        </div>
            <div class="card-footer pt-0 border-top-0">
                <button type="submit" id="kt_modal_account_submit" data-action="" class="btn btn-info w-100">
                    <span class="indicator-label">Modificar foto de perfil</span>
                    <span class="indicator-progress">Guardando
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
            </div>
        </form>
        <!--end::Form-->
    </div>
    <div class="card mt-10">
        <form class="mx-auto mw-600px w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_modal_email_form">
            <div class="card-body">
    
                <!--begin::Wrapper-->
                <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-5 pb-lg-10">
                        <!--begin::Title-->
                        <h3 class="fs-1 fw-bolder align-items-center text-dark">Modifica tu correo electrónico</h3>
                        <!--end::Title-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Heading-->
    
                <!--begin::Input group-->
                <div class="d-flex flex-column mb-5 fv-row">
                    <!--begin::Label-->
                    <label class="fs-5 fw-bold mb-2">Email actual</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <span id="email_user_a" class="form-control form-control-solid" placeholder="" name="email_user_a">pmrober@gmail.com</span>
                    <!--end::Input-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="d-flex flex-column mb-5 fv-row fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="fs-5 fw-bold mb-2">Nuevo email</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input id="email_user_n" class="form-control form-control-solid" placeholder="" name="email_user_n" value="">
                    <!--end::Input-->
                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="d-flex flex-column mb-5 fv-row fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="fs-5 fw-bold mb-2">Confirma tu nuevo email</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input id="email_user_v" class="form-control form-control-solid" placeholder="" name="email_user_v" value="">
                    <!--end::Input-->
                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                <!--end::Input group-->
    
            </div>
            <!--end::Wrapper-->
            <div class="card-footer pt-0 border-top-0 pb-10">
                <button type="submit" id="kt_modal_email_submit" data-action="" class="btn btn-info w-100">
                    <span class="indicator-label">Modificar correo electrónico</span>
                    <span class="indicator-progress">Guardando
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
            </div>
    
            <input type="hidden" name="input_token" value="bccaac7cc0601329faa0ec091a4aa9646dc1ad1dab241e5432e16cf2366224dc">    <div></div></form>
        <!--end::Form-->
    </div>
    <div class="card mt-10">
        <form class="mx-auto mw-600px w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_modal_password_form">
            <div class="card-body">
                <!--begin::Form-->
                <!--begin::Wrapper-->
                <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-5 pb-lg-10">
                        <!--begin::Title-->
                        <h3 class="fs-1 fw-bolder align-items-center text-dark">Modifica tu contraseña</h3>
                        <!--end::Title-->
                    </div>
                </div>
                <!--end::Heading-->
                <!--begin::Input group-->
                <div class="mb-10 fv-row fv-plugins-icon-container" data-kt-password-meter="true">
                    <!--begin::Wrapper-->
                    <div class="mb-1">
                        <!--begin::Label-->
                        <label class="form-label fw-bolder text-dark fs-6">Password actual</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative mb-3">
                            <input id="password_user_a" class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password_user_a" autocomplete="off" value="">
                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                <i class="bi bi-eye-slash fs-2"></i>
                                <i class="bi bi-eye fs-2 d-none"></i>
                            </span>
                        </div>
                        <!--end::Input wrapper-->
                    </div>
                    <!--end::Wrapper-->
                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                <!--end::Input group=-->
                <!--begin::Input group-->
                <div class="mb-10 fv-row fv-plugins-icon-container" data-kt-password-meter="true">
                    <!--begin::Wrapper-->
                    <div class="mb-1">
                        <!--begin::Label-->
                        <label class="form-label fw-bolder text-dark fs-6">Nuevo password</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative mb-3">
                            <input id="password_user_n" class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password_user_n" autocomplete="off" value="">
                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                <i class="bi bi-eye-slash fs-2"></i>
                                <i class="bi bi-eye fs-2 d-none"></i>
                            </span>
                        </div>
                        <!--end::Input wrapper-->
    
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Hint-->
                    <div class="text-muted">La contraseña debe contener más de 8 caracteres y al menos una letra mayúscula, una minúscula, un número y un símbolo (@$!%*?&amp;_).</div>
                    <!--end::Hint-->
                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                <!--end::Input group=-->
                <!--begin::Input group-->
                <div class="mb-10 fv-row fv-plugins-icon-container" data-kt-password-meter="true">
                    <!--begin::Wrapper-->
                    <div class="mb-1">
                        <!--begin::Label-->
                        <label class="form-label fw-bolder text-dark fs-6">Confirma tu nuevo password</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative mb-3">
                            <input id="password_user_v" class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password_user_v" autocomplete="off" value="">
                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                <i class="bi bi-eye-slash fs-2"></i>
                                <i class="bi bi-eye fs-2 d-none"></i>
                            </span>
                        </div>
                        <!--end::Input wrapper-->
    
                    </div>
                    <!--end::Wrapper-->
                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                <!--end::Input group=-->
            </div>
            <!--end::Wrapper-->
            <div class="card-footer p-0 border-top-0 pb-10">
                <button type="submit" id="kt_modal_password_submit" data-action="" class="btn btn-info w-100">
                    <span class="indicator-label">Modificar contraseña</span>
                    <span class="indicator-progress">Modificando contraseña
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
            </div>
            <input type="hidden" name="input_token" value="bccaac7cc0601329faa0ec091a4aa9646dc1ad1dab241e5432e16cf2366224dc">    <div></div></form>
        <!--end::Form-->
    </div> 
</x-default-layout>