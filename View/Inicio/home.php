<?php include_once '../layoutInterno.php'; ?>

<!DOCTYPE html>
<html lang="en">

<?php IncludeCSS(); ?>

<body>

    <?php MostrarSidebar(); ?>

    <div class="main-wrapper">

        <?php MostrarHeader(); ?>

        <div class="page-header">
            <div>
                <h1 class="page-title">¡Bienvenido!</h1>
                <p class="page-subtitle">Sistema de registro de clientes y mascotas de la veterinaria</p>
            </div>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-title"><i class="bi bi-person-plus"></i> Registro de Clientes</h5>
                    <p class="page-subtitle mt-2">Registre la cédula, el nombre y el correo electrónico del cliente.</p>
                    <a href="../Cliente/registroCliente.php" class="btn-login mt-2 text-decoration-none">Ingresar</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-title"><i class="bi bi-heart"></i> Registro de Mascotas</h5>
                    <p class="page-subtitle mt-2">Registre una mascota y asígnela a uno de los clientes.</p>
                    <a href="../Mascota/registroMascota.php" class="btn-login mt-2 text-decoration-none">Ingresar</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-title"><i class="bi bi-table"></i> Consulta de Mascotas</h5>
                    <p class="page-subtitle mt-2">Consulte todas las mascotas registradas con su dueño.</p>
                    <a href="../Mascota/consultaMascotas.php" class="btn-login mt-2 text-decoration-none">Ingresar</a>
                </div>
            </div>

        </div>

        <?php MostrarFooter(); ?>

    </div>

    <?php IncludeJS(); ?>

</body>

</html>