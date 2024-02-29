<x-auth-layout>
    <!--begin::Verify Email Form-->
    <div class="w-100">

        <div class="text-center mb-11">
            <!--begin::Title-->
            <h1 class="text-gray-900 fw-bolder mb-3">Verifica tu email</h1>
            <!--end::Title-->
            <!--begin::Subtitle-->
            <div class="text-gray-500 fw-semibold fs-6">Gracias por registrarte en LittBabbler pero, antes de comenzar, debes verificar tu email, haciendo clic en el enlace que te acabamos de enviar por correo electrónico. Si no lo has recibido podemos enviarte otro correo de verificación.</div>
            <!--end::Subtitle=-->

            <!--begin::Session Status-->
            @if (session('status') === 'verification-link-sent')
                <p class="font-medium text-sm text-info mt-4">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </p>
            @endif
        <!--end::Session Status-->
        </div>

        <!--begin::Actions-->
        <div class="d-flex flex-wrap justify-content-center pb-lg-0">
            <div class="d-flex bd-highlight w-100">
                <form class="flex-grow-1 bd-highlight me-10" id="verify_email_form" method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    
                    <button id="verify_email_submit" type="submit" class="btn btn-lg btn-primary fw-bolder me-4 w-100">
                        <span class="indicator-label">
                            Enviar correo de confirmación
                        </span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                </form>

                <form class="bd-highlight" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-lg btn-light-primary fw-bolder me-4">{{ __('Salir') }}</button>
                </form>
            </div>
        </div>
        <!--end::Actions-->
    </div>

    <!--end::Verify Email Form-->
</x-auth-layout>
