$(function () {
    $('#registroMascotaForm').validate({
        rules: {
            txtNombre: { required: true },
            txtEspecie: { required: true },
            txtRaza: { required: true },
            txtPeso: { required: true, number: true, min: 0.01 },
            ddlCliente: { required: true }
        },
        messages: {
            txtNombre: { required: 'El nombre es obligatorio' },
            txtEspecie: { required: 'La especie es obligatoria' },
            txtRaza: { required: 'La raza es obligatoria' },
            txtPeso: {
                required: 'El peso es obligatorio',
                number: 'Ingrese un peso válido (ejemplo: 12.50)',
                min: 'El peso debe ser mayor a 0'
            },
            ddlCliente: { required: 'Debe seleccionar un cliente' }
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