<!-- Menú -->
<header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <div>
        <div class="header_img"> <img src="https://innovation.com.mx/assets/images/avatar.png" alt=""> </div>
    </div>
</header>
<div class="l-navbar" id="nav-bar" style="font-size: 20px">
    <nav class="nav">
        <div> <a href="dashboard.php" class="nav_logo"> <img src="media/logo-menu.png" style="height: 30px" /> <span class="nav_logo-name">Soporte Técnico CDB</span> </a>
            <div class="nav_list">
                <?php
                if ($_SESSION['tipo'] == "trabajador") {
                    if ($pag == "Articulos") {
                ?>
                        <!--clase (active) para dar enfoque en la sección del menú en que se encuentre-->
                        <a href="articulos.php" class="nav_link active"> <i class='bx bxs-devices nav_icon'></i> <span class="nav_name">Artículos</span> </a>
                        <a href="equipos.php" class="nav_link"> <i class='bx bx-desktop nav_icon'></i> <span class="nav_name">Equipos</span> </a>
                        <a href="bodega.php" class="nav_link"> <i class='bx bx-box nav_icon'></i> <span class="nav_name">Bodega</span> </a>
                        <a href="chatarra.php" class="nav_link"> <i class='bx bx-scatter-chart nav_icon'></i></i> <span class="nav_name">Chatarra</span> </a>
                        <a href="vista_areas.php" class="nav_link"> <i class='bx bx-buildings nav_icon'></i></i> <span class="nav_name">Áreas</span> </a>
                        <a href="ticketsTrabajadores.php" class="nav_link"> <i class='bx bxs-receipt nav_icon'></i> <span class="nav_name">Tickets</span> </a>
                        <a href="trabajadores.php" class="nav_link"> <i class='bx bxs-user-account'></i><span class="nav_name">Trabajadores</span> </a>
                        <a href="personal.php" class="nav_link"> <i class='bx bxs-user-badge'></i><span class="nav_name">Personal</span> </a>
                    <?php
                    }
                    if ($pag == "Equipos") {
                    ?>
                        <a href="articulos.php" class="nav_link"> <i class='bx bxs-devices nav_icon'></i> <span class="nav_name">Artículos</span> </a>
                        <a href="equipos.php" class="nav_link active"> <i class='bx bx-desktop nav_icon'></i> <span class="nav_name">Equipos</span> </a>
                        <a href="bodega.php" class="nav_link"> <i class='bx bx-box nav_icon'></i> <span class="nav_name">Bodega</span> </a>
                        <a href="chatarra.php" class="nav_link"> <i class='bx bx-scatter-chart nav_icon'></i></i> <span class="nav_name">Chatarra</span> </a>
                        <a href="vista_areas.php" class="nav_link"> <i class='bx bx-buildings nav_icon'></i></i> <span class="nav_name">Área</span> </a>
                        <a href="ticketsTrabajadores.php" class="nav_link"> <i class='bx bxs-receipt nav_icon'></i> <span class="nav_name">Tickets</span> </a>
                        <a href="trabajadores.php" class="nav_link"> <i class='bx bxs-user-account'></i><span class="nav_name">Trabajadores</span> </a>
                        <a href="personal.php" class="nav_link"> <i class='bx bxs-user-badge'></i><span class="nav_name">Personal</span> </a>
                    <?php
                    }
                    if ($pag == "Bodega") {
                    ?>
                        <a href="articulos.php" class="nav_link"> <i class='bx bxs-devices nav_icon'></i> <span class="nav_name">Artículos</span> </a>
                        <a href="equipos.php" class="nav_link"> <i class='bx bx-desktop nav_icon'></i> <span class="nav_name">Equipos</span> </a>
                        <a href="bodega.php" class="nav_link active"> <i class='bx bx-box nav_icon'></i> <span class="nav_name">Bodega</span> </a>
                        <a href="chatarra.php" class="nav_link"> <i class='bx bx-scatter-chart nav_icon'></i></i> <span class="nav_name">Chatarra</span> </a>
                        <a href="vista_areas.php" class="nav_link"> <i class='bx bx-buildings nav_icon'></i></i> <span class="nav_name">Área</span> </a>
                        <a href="ticketsTrabajadores.php" class="nav_link"> <i class='bx bxs-receipt nav_icon'></i> <span class="nav_name">Tickets</span> </a>
                        <a href="trabajadores.php" class="nav_link"> <i class='bx bxs-user-account'></i><span class="nav_name">Trabajadores</span> </a>
                        <a href="personal.php" class="nav_link"> <i class='bx bxs-user-badge'></i><span class="nav_name">Personal</span> </a>
                    <?php
                    }
                    if ($pag == "Chatarra") {
                    ?>
                        <a href="articulos.php" class="nav_link"> <i class='bx bxs-devices nav_icon'></i> <span class="nav_name">Artículos</span> </a>
                        <a href="equipos.php" class="nav_link"> <i class='bx bx-desktop nav_icon'></i> <span class="nav_name">Equipos</span> </a>
                        <a href="bodega.php" class="nav_link"> <i class='bx bx-box nav_icon'></i> <span class="nav_name">Bodega</span> </a>
                        <a href="chatarra.php" class="nav_link active"> <i class='bx bx-scatter-chart nav_icon'></i></i> <span class="nav_name">Chatarra</span> </a>
                        <a href="vista_areas.php" class="nav_link"> <i class='bx bx-buildings nav_icon'></i></i> <span class="nav_name">Área</span> </a>
                        <a href="ticketsTrabajadores.php" class="nav_link"> <i class='bx bxs-receipt nav_icon'></i> <span class="nav_name">Tickets</span> </a>
                        <a href="trabajadores.php" class="nav_link"> <i class='bx bxs-user-account'></i><span class="nav_name">Trabajadores</span> </a>
                        <a href="personal.php" class="nav_link"> <i class='bx bxs-user-badge'></i><span class="nav_name">Personal</span> </a>
                    <?php
                    }
                    if ($pag == "Equipos-area") {
                    ?>
                        <a href="articulos.php" class="nav_link"> <i class='bx bxs-devices nav_icon'></i> <span class="nav_name">Artículos</span> </a>
                        <a href="equipos.php" class="nav_link"> <i class='bx bx-desktop nav_icon'></i> <span class="nav_name">Equipos</span> </a>
                        <a href="bodega.php" class="nav_link"> <i class='bx bx-box nav_icon'></i> <span class="nav_name">Bodega</span> </a>
                        <a href="chatarra.php" class="nav_link"> <i class='bx bx-scatter-chart nav_icon'></i></i> <span class="nav_name">Chatarra</span> </a>
                        <a href="vista_areas.php" class="nav_link active"> <i class='bx bx-buildings nav_icon'></i></i> <span class="nav_name">Área</span> </a>
                        <a href="ticketsTrabajadores.php" class="nav_link"> <i class='bx bxs-receipt nav_icon'></i> <span class="nav_name">Tickets</span> </a>
                        <a href="trabajadores.php" class="nav_link"> <i class='bx bxs-user-account'></i><span class="nav_name">Trabajadores</span> </a>
                        <a href="personal.php" class="nav_link"> <i class='bx bxs-user-badge'></i><span class="nav_name">Personal</span> </a>
                    <?php
                    }
                    if ($pag == "Tickets") {
                    ?>
                        <a href="articulos.php" class="nav_link"> <i class='bx bxs-devices nav_icon'></i> <span class="nav_name">Artículos</span> </a>
                        <a href="equipos.php" class="nav_link"> <i class='bx bx-desktop nav_icon'></i> <span class="nav_name">Equipos</span> </a>
                        <a href="bodega.php" class="nav_link"> <i class='bx bx-box nav_icon'></i> <span class="nav_name">Bodega</span> </a>
                        <a href="chatarra.php" class="nav_link"> <i class='bx bx-scatter-chart nav_icon'></i></i> <span class="nav_name">Chatarra</span> </a>
                        <a href="vista_areas.php" class="nav_link"> <i class='bx bx-buildings nav_icon'></i></i> <span class="nav_name">Área</span> </a>
                        <a href="ticketsTrabajadores.php" class="nav_link active"> <i class='bx bxs-receipt nav_icon'></i> <span class="nav_name">Tickets</span> </a>
                        <a href="trabajadores.php" class="nav_link"> <i class='bx bxs-user-account'></i><span class="nav_name">Trabajadores</span> </a>
                        <a href="personal.php" class="nav_link"> <i class='bx bxs-user-badge'></i><span class="nav_name">Personal</span> </a>
                    <?php
                    }
                    if ($pag == "Dashboard") {
                    ?>
                        <a href="articulos.php" class="nav_link"> <i class='bx bxs-devices nav_icon'></i> <span class="nav_name">Artículos</span> </a>
                        <a href="equipos.php" class="nav_link"> <i class='bx bx-desktop nav_icon'></i> <span class="nav_name">Equipos</span> </a>
                        <a href="bodega.php" class="nav_link"> <i class='bx bx-box nav_icon'></i> <span class="nav_name">Bodega</span> </a>
                        <a href="chatarra.php" class="nav_link"> <i class='bx bx-scatter-chart nav_icon'></i></i> <span class="nav_name">Chatarra</span> </a>
                        <a href="vista_areas.php" class="nav_link"> <i class='bx bx-buildings nav_icon'></i></i> <span class="nav_name">Área</span> </a>
                        <a href="ticketsTrabajadores.php" class="nav_link"> <i class='bx bxs-receipt nav_icon'></i> <span class="nav_name">Tickets</span> </a>
                        <a href="trabajadores.php" class="nav_link"> <i class='bx bxs-user-account'></i><span class="nav_name">Trabajadores</span> </a>
                        <a href="personal.php" class="nav_link"> <i class='bx bxs-user-badge'></i><span class="nav_name">Personal</span> </a>
                    <?php
                    }
                    if ($pag == "Trabajador") {
                        ?>
                            <a href="articulos.php" class="nav_link"> <i class='bx bxs-devices nav_icon'></i> <span class="nav_name">Artículos</span> </a>
                            <a href="equipos.php" class="nav_link"> <i class='bx bx-desktop nav_icon'></i> <span class="nav_name">Equipos</span> </a>
                            <a href="bodega.php" class="nav_link"> <i class='bx bx-box nav_icon'></i> <span class="nav_name">Bodega</span> </a>
                            <a href="chatarra.php" class="nav_link"> <i class='bx bx-scatter-chart nav_icon'></i></i> <span class="nav_name">Chatarra</span> </a>
                            <a href="vista_areas.php" class="nav_link"> <i class='bx bx-buildings nav_icon'></i></i> <span class="nav_name">Área</span> </a>
                            <a href="ticketsTrabajadores.php" class="nav_link"> <i class='bx bxs-receipt nav_icon'></i> <span class="nav_name">Tickets</span> </a>
                            <a href="trabajadores.php" class="nav_link"> <i class='bx bxs-user-account'></i><span class="nav_name">Trabajadores</span> </a>
                            <a href="personal.php" class="nav_link"> <i class='bx bxs-user-badge'></i><span class="nav_name">Personal</span> </a>
                        <?php
                    }
                    if ($pag == "Personal") {
                        ?>
                            <a href="articulos.php" class="nav_link"> <i class='bx bxs-devices nav_icon'></i> <span class="nav_name">Artículos</span> </a>
                            <a href="equipos.php" class="nav_link"> <i class='bx bx-desktop nav_icon'></i> <span class="nav_name">Equipos</span> </a>
                            <a href="bodega.php" class="nav_link"> <i class='bx bx-box nav_icon'></i> <span class="nav_name">Bodega</span> </a>
                            <a href="chatarra.php" class="nav_link"> <i class='bx bx-scatter-chart nav_icon'></i></i> <span class="nav_name">Chatarra</span> </a>
                            <a href="vista_areas.php" class="nav_link"> <i class='bx bx-buildings nav_icon'></i></i> <span class="nav_name">Área</span> </a>
                            <a href="ticketsTrabajadores.php" class="nav_link"> <i class='bx bxs-receipt nav_icon'></i> <span class="nav_name">Tickets</span> </a>
                            <a href="trabajadores.php" class="nav_link"> <i class='bx bxs-user-account'></i><span class="nav_name">Trabajadores</span> </a>
                            <a href="personal.php" class="nav_link"> <i class='bx bxs-user-badge'></i><span class="nav_name">Personal</span> </a>
                        <?php
                    }
                    } 
                    else if ($_SESSION['tipo'] == "personal") {
                    if ($pag == "Tickets") {
                    ?>
                        <a href="ticketsPersonal.php" class="nav_link active"> <i class='bx bxs-receipt nav_icon'></i> <span class="nav_name">Tickets</span> </a>
                    <?php
                    }
                    if ($pag == "Dashboard") {
                    ?>
                        <a href="ticketsPersonal.php" class="nav_link"> <i class='bx bxs-receipt nav_icon'></i> <span class="nav_name">Tickets</span> </a>
                <?php
                    }
                    }
                ?>
            </div>
        </div>
        <div>
            <?php 
            if($_SESSION['tipo'] == "personal"){
            ?>
                <a data_tipo="personal" data_id="<?php echo $_SESSION["id"]; ?>" class="cambiarContra nav_link"> <i class='bx bxs-lock nav_icon'></i> <span class="nav_name">Cambiar contraseña</span> </a>
            <?php
            }else{
            ?>
                <a data_tipo="trabajador" data_id="<?php echo $_SESSION["id"]; ?>" class="cambiarContra nav_link"> <i class='bx bxs-lock nav_icon'></i> <span class="nav_name">Cambiar contraseña</span> </a>
            <?php
            }
            ?>
            
            <a href="controlador/cerrarSesion.php?cerrar=yes" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Cerrar sesión</span> </a>
        </div>
    </nav>
</div>