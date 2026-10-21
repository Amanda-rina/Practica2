<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/Practica2/Model/MascotaModel.php';

if(isset($_POST['btnRegistrarMascota'])) {
    $nombre = $_POST['txtNombre'];
    $especie = $_POST['txtEspecie'];
    $raza = $_POST['txtRaza'];
    $peso = $_POST['txtPeso'];
    $idCliente = $_POST['ddlCliente'];

    $response = RegistrarMascotaModel($nombre,$especie,$raza,$peso,$idCliente);

    if($response) {
        header("Location: ../../View/Mascota/consultaMascotas.php");
        exit();
    }

    $_POST["mensaje"] = "La información de la mascota no se ha podido registrar correctamente";
}

function ConsultarMascotas()
{
    return ConsultarMascotasModel();
}