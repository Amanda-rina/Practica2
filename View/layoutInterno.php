<?php

function MostrarHeader()
{
    echo '
        <header class="navbar-custom">
            <div class="navbar-left">
                <!-- Desktop sidebar toggle (visible on large screens only) -->
                <button class="btn-desktop-toggle d-none d-xl-flex align-items-center justify-content-center me-3"
                id="desktop-sidebar-toggle" aria-label="Minimize Sidebar">
                <i class="bi bi-chevron-bar-left"></i>
                </button>
                <!-- Mobile sidebar toggle -->
                <button class="sidebar-toggle-btn me-2" id="sidebar-toggle" aria-label="Toggle Navigation">
                <i class="bi bi-list"></i>
                </button>
            </div>

            <!-- Right actions -->
            <div class="navbar-actions">
                <div class="navbar-profile-btn">
                    <img src="../assets/images/avatar.png" alt="Profile Image" class="navbar-profile-img">
                    <span class="navbar-profile-name d-none d-md-inline">Bienvenido a la Veterinaria</span>
                </div>
            </div>
        </header>
    ';
}

function MostrarFooter()
{
    echo '
        <footer class="footer-custom">
        <div class="footer-left">
            <span class="footer-logo">
            <i class="bi bi-asterisk"></i> Práctica 2 - Ambiente Web Cliente Servidor
            </span>
        </div>
        </footer>
    ';
}

function MostrarSidebar()
{
    echo '
        <div class="sidebar-wrapper" id="sidebar">
            <!-- Brand Logo / Identity -->
            <a href="../Inicio/home.php" class="sidebar-brand">
            <i class="bi bi-asterisk"></i>
            <span>Práctica 2</span>
            </a>

            <!-- Navigation Menu -->
            <div class="flex-grow-1 overflow-y-auto">
            <div class="sidebar-menu-section">
                <div class="sidebar-menu-title">Menu</div>
                <ul class="sidebar-menu-list">
                <li class="sidebar-menu-item">
                    <a href="../Cliente/registroCliente.php" class="sidebar-menu-link" title="Registro de Clientes">
                    <i class="bi bi-person-plus"></i>
                    <span>Registro de Clientes</span>
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="../Mascota/registroMascota.php" class="sidebar-menu-link" title="Registro de Mascotas">
                    <i class="bi bi-heart"></i>
                    <span>Registro de Mascotas</span>
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="../Mascota/consultaMascotas.php" class="sidebar-menu-link" title="Consulta de Mascotas">
                    <i class="bi bi-table"></i>
                    <span>Consulta de Mascotas</span>
                    </a>
                </li>
                </ul>
            </div>
            </div>
        </div>
    ';
}

function IncludeCSS()
{
    echo '
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Práctica 2 - Veterinaria</title>

            <link rel="icon" type="image/png" href="../assets/images/favicon.ico">
            <link rel="stylesheet" href="../assets/libs/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="../assets/libs/bootstrap-icons/bootstrap-icons.css">
            <link rel="stylesheet" href="../assets/css/main.css">
        </head>
    ';
}

function IncludeJS()
{
    echo '
        <script src="https://cdn.jsdelivr.net/npm/jquery@4.0.0/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.21.0/dist/jquery.validate.min.js"></script>
        <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/dashboard.js"></script>
    ';
}