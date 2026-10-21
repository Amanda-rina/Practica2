<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/Practica2/Model/ConfigModel.php';

function RegistrarMascotaModel($nombre,$especie,$raza,$peso,$idCliente)
{
    try{
        $context = Conectar();

        $sql = "CALL spRegistrarMascota('$nombre','$especie','$raza','$peso','$idCliente')";
        $response = $context -> query($sql);

        Cerrar($context);
        return $response;
    }
    catch (Exception $exc) {
        return false;
    }
}

function ConsultarMascotasModel()
{
    try{
        $context = Conectar();

        $sql = "CALL spConsultarMascotas()";
        $response = $context -> query($sql);

        $data = [];
        While($row = $response -> fetch_assoc())
        {
            $data[] = $row;
        }

        Cerrar($context);
        return $data;
    }
    catch (Exception $exc) {
        return [];
    }
}