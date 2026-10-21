<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/Practica2/Model/ClienteModel.php';

if(isset($_POST['btnRegistrarCliente'])) {
    $cedula = $_POST['txtCedula'];
    $nombre = $_POST['txtNombre'];
    $correo = $_POST['txtCorreo'];

    $response = RegistrarClienteModel($cedula,$nombre,$correo);

    if($response) {
        $_POST["mensaje"] = "El cliente se ha registrado correctamente";
    }
    else {
        $_POST["mensaje"] = "La información del cliente no se ha podido registrar correctamente";
    }
}

function ConsultarClientes()
{
    return ConsultarClientesModel();
}