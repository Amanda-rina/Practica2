<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/Practica2/View/layoutInterno.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Practica2/Controller/ClienteController.php';
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
                <h1 class="page-title">Registro de Clientes</h1>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card">

                    <form action="" method="POST" id="registroClienteForm" novalidate>

                        <?php if(isset($_POST["mensaje"])) { ?>

                            <div class="alert alert-secondary text-center" role="alert">
                                <?php echo $_POST["mensaje"]; ?>
                            </div>

                        <?php } ?>

                        <div class="login-form-group">
                            <label for="txtCedula" class="login-form-label">Cédula</label>
                            <div class="login-input-group">
                                <i class="bi bi-person-vcard input-icon"></i>
                                <input type="text" id="txtCedula" name="txtCedula" class="login-input">
                            </div>
                        </div>

                        <div class="login-form-group">
                            <label for="txtNombre" class="login-form-label">Nombre</label>
                            <div class="login-input-group">
                                <i class="bi bi-person-badge input-icon"></i>
                                <input type="text" id="txtNombre" name="txtNombre" class="login-input">
                            </div>
                        </div>

                        <div class="login-form-group">
                            <label for="txtCorreo" class="login-form-label">Correo Electrónico</label>
                            <div class="login-input-group">
                                <i class="bi bi-envelope input-icon"></i>
                                <input type="text" id="txtCorreo" name="txtCorreo" class="login-input">
                            </div>
                        </div>

                        <button type="submit" id="btnRegistrarCliente" name="btnRegistrarCliente" class="btn-login">
                            <span>Procesar</span>
                        </button>

                    </form>

                </div>
            </div>
        </div>

        <?php MostrarFooter(); ?>

    </div>

    <?php IncludeJS(); ?>
    <script src="../assets/js/registroCliente.js"></script>

</body>

</html>