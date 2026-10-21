<?php

function Conectar()
{
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    return new mysqli("127.0.0.1:3306","root","","practica2");
}

function Cerrar($context)
{
    $context -> close();
}
