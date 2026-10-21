<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/Practica2/View/layoutInterno.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Practica2/Controller/MascotaController.php';

$mascotas = ConsultarMascotas();
?>

<!DOCTYPE html>
<html lang="en">

<?php IncludeCSS(); ?>

<body>

    <?php MostrarSidebar(); ?>

    <div class="main-wrapper">

        <?php MostrarHeader(); ?>

        <div class="page-header">
            <div>
                <h1 class="page-title">Consulta de Mascotas</h1>
            </div>
        </div>

        <div class="table-card-custom">
            <div class="table-responsive">
                <table class="table-custom">
                    <thead>
                        <tr>
                            <th>Cédula del Cliente</th>
                            <th>Nombre del Cliente</th>
                            <th>Nombre de la Mascota</th>
                            <th>Especie</th>
                            <th>Peso (kg)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($mascotas) == 0) { ?>
                            <tr>
                                <td colspan="5" class="text-center">No hay mascotas registradas</td>
                            </tr>
                        <?php } ?>

                        <?php foreach($mascotas as $mascota) { ?>
                            <tr>
                                <td><?php echo $mascota['Cedula']; ?></td>
                                <td><?php echo $mascota['NombreCliente']; ?></td>
                                <td><?php echo $mascota['NombreMascota']; ?></td>
                                <td><?php echo $mascota['Especie']; ?></td>
                                <td><?php echo $mascota['Peso']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <?php MostrarFooter(); ?>

    </div>

    <?php IncludeJS(); ?>

</body>

</html>