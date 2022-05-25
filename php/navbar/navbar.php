<nav id="navs">
    <div class="logo">
        <a href="index.php"><img src="img/Logos/PNG/LogoPNG_color.png" alt="Logo Image"></a>
    </div>
    <div class="hamburger">
        <div class="bars1"></div>
        <div class="bars2"></div>
        <div class="bars3"></div>
    </div>
    <ul class="nav-links">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="galeria.php">Galerías</a></li>
        <li><a href="nosotros.php">Nosotros</a></li>
        <li><a href="contacto.php">Contacto</a></li>
        <?php if ($tipo_usuario == 0 || $tipo_usuario == 1 ) { ?>
        <div class="dropdown">
        <li><a><button onclick="myFunction()" class="dropbtn">Perfil</button></li></a>    
            <div id="myDropdown" class="dropdown-content">
                <a href="dashboard.php">Opciones</a>
                <a href="php/Inicio_Sesion/cerrar_sesion.php">Cerrar sesion</a>
            </div>
        </div>
        <?php } ?>
        <?php if ($tipo_usuario == 3) { ?>
        <li><a href="login.php">Login</a></li>
        <?php } ?>
        
    </ul>
</nav>

