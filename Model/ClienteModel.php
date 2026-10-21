<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/Practica2/Model/ConfigModel.php';

function RegistrarClienteModel($cedula,$nombre,$correo)
{
    try{
        $context = Conectar();

        $sql = "CALL spRegistrarCliente('$cedula','$nombre','$correo')";
        $response = $context -> query($sql);

        Cerrar($context);
        return $response;
    }
    catch (Exception $exc) {
        return false;
    }
}

function ConsultarClientesModel()
{
    try{
        $context = Conectar();

        $sql = "CALL spConsultarClientes()";
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