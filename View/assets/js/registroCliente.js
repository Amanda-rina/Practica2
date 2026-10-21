$(function () {
    $('#registroClienteForm').validate({
        rules: {
            txtCedula: { required: true },
            txtNombre: { required: true },
            txtCorreo: { required: true, email: true }
        },
        messages: {
            txtCedula: { required: 'La cédula es obligatoria' },
            txtNombre: { required: 'El nombre es obligatorio' },
            txtCorreo: {
                required: 'El correo electrónico es obligatorio',
                email: 'Ingrese un correo electrónico válido'
            }
        },
        errorElement: 'div',
        errorClass: 'login-error-message',
        errorPlacement: function (error, element) {
            error.insertAfter(element.closest('.login-input-group'));
        },
        highlight: function (element) {
            $(element).addClass('login-input-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('login-input-invalid');
        }
    });
});