<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/Practica2/View/layoutInterno.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Practica2/Controller/MascotaController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Practica2/Controller/ClienteController.php';

$clientes = ConsultarClientes();
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
                <h1 class="page-title">Registro de Mascotas</h1>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card">

                    <form action="" method="POST" id="registroMascotaForm" novalidate>

                        <?php if(isset($_POST["mensaje"])) { ?>

                            <div class="alert alert-secondary text-center" role="alert">
                                <?php echo $_POST["mensaje"]; ?>
                            </div>

                        <?php } ?>

                        <div class="login-form-group">
                            <label for="txtNombre" class="login-form-label">Nombre</label>
                            <div class="login-input-group">
                                <i class="bi bi-heart input-icon"></i>
                                <input type="text" id="txtNombre" name="txtNombre" class="login-input">
                            </div>
                        </div>

                        <div class="login-form-group">
                            <label for="txtEspecie" class="login-form-label">Especie</label>
                            <div class="login-input-group">
                                <i class="bi bi-tag input-icon"></i>
                                <input type="text" id="txtEspecie" name="txtEspecie" class="login-input">
                            </div>
                        </div>

                        <div class="login-form-group">
                            <label for="txtRaza" class="login-form-label">Raza</label>
                            <div class="login-input-group">
                                <i class="bi bi-tags input-icon"></i>
                                <input type="text" id="txtRaza" name="txtRaza" class="login-input">
                            </div>
                        </div>

                        <div class="login-form-group">
                            <label for="txtPeso" class="login-form-label">Peso (kg)</label>
                            <div class="login-input-group">
                                <i class="bi bi-speedometer2 input-icon"></i>
                                <input type="text" id="txtPeso" name="txtPeso" class="login-input">
                            </div>
                        </div>

                        <div class="login-form-group">
                            <label for="ddlCliente" class="login-form-label">Cliente</label>
                            <div class="login-input-group">
                                <i class="bi bi-person input-icon"></i>
                                <select id="ddlCliente" name="ddlCliente" class="login-input">
                                    <option value="">Seleccione un cliente</option>
                                    <?php foreach($clientes as $cliente) { ?>
                                        <option value="<?php echo $cliente['IdCliente']; ?>">
                                            <?php echo $cliente['Cedula'] . ' - ' . $cliente['Nombre']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <button type="submit" id="btnRegistrarMascota" name="btnRegistrarMascota" class="btn-login">
                            <span>Procesar</span>
                        </button>

                    </form>

                </div>
            </div>
        </div>

        <?php MostrarFooter(); ?>

    </div>

    <?php IncludeJS(); ?>
    <script src="../assets/js/registroMascota.js"></script>

</body>

</html>