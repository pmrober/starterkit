"use strict";

// Class definition
var KTVerifyEmail = function () {
    // Elements
    var form;
    var submitButton;
    
    var handleSubmitForm = function (e) {
        // Handle form submit
        submitButton.addEventListener('click', function (e) {
            // Prevent button default action
            e.preventDefault();

            // Show loading indication
            submitButton.setAttribute('data-kt-indicator', 'on');

            // Disable button to avoid multiple click
            submitButton.disabled = true;
 
            form.submit();

        });
    }

    
    // Public functions
    return {
        // Initialization
        init: function () {
            form = document.querySelector('#verify_email_form');
            submitButton = document.querySelector('#verify_email_submit');
            handleSubmitForm();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTVerifyEmail.init();
});
