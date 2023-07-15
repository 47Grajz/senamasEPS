                        <!DOCTYPE html>
<html>
<head>
    <title>title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../css/resetPro.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/lateral.css">
    <link rel="stylesheet" href="../../../css/details.css">
<!-- Aca van los estilos de la plantilla -->

</head>
<body>

<!-- 
    <header class="header">
        <h1><a href="/paciente/index">SENAMASEPS</a></h1>
        <ul>
            <li><a href="#">Nosotros</a></li>
            <?php 
            # Validacion tipo de usuario

            if(isset($_SESSION['tipo_usuario']) && $_SESSION['tipo_usuario'] == "paciente"):?>
               <li><a href="#">Documentacion</a></li>
               <?php endif ?>
            <li><a href="#">Politicas internas</a></li>
            <li><a href="#">Acerca de </a></li>
            <?php if(isset($_SESSION['tipo_usuario'])){          
                echo "<li> <a href='/login/logout'>Cerrar Sesion{$_SESSION['nombre']} </a> </li>";
            } 
            ?>
        </ul>
    </header> -->

    <div class="containersito">
 <div class="container-lateral">
 <header class="header">
        <div class="menu-dashboard">
        <!-- TOP MENU -->
        <div class="top-menu">
            <div class="logo">
                <img src="../../../img/logo.svg" alt="">
                <span>SENAMASEPS</span>
            </div>
            <div class="toggle">
                <i class='bx bx-menu'></i>
            </div>
        </div>
        <!-- INPUT SEARCH -->
        <div class="input-search">
            <input type="hidden" class="input" placeholder="Buscar">
        </div>
        <!-- MENU -->
        <div class="menu">

        <a href="/paciente/index">
        <div class="enlace">
            <i class='bx bxs-home-heart' ></i>
                <span>Inicio</span>
            </div>
        </a>
            

        <a href="/paciente/index">
        <div class="enlace">
        <i class='bx bxs-user'></i>
                <span>Pacientes</span>
            </div>
        </a>
            

            <a href="/cita/index">
            <div class="enlace">
            <i class='bx bx-notepad' ></i>
                <span>Citas</span>
            </div>
            </a>
            
         
               
            <a href="/medico/index">
            <div class="enlace">
            <i class='bx bxs-group'></i>
                <span>Medicos</span>
            </div>
            </a>
            

            <a href="/especialidad/index">
            <div class="enlace">
                <i class="bx bx-file-blank"></i>
                <span>Especialidad</span>
            </div>
            </a>
         


            <?php
            if(isset($_SESSION['tipo_usuario']) && $_SESSION['tipo_usuario'] == "paciente"):?>

            <a href="/usuario/index">

            <div class="enlace">
            <i class='bx bxs-user-account'></i>
                <span>Usuarios</span>
            </div>
            </a>

          
        
               <?php endif ?>

               <a href="/login/logout">
            <div class="logout ">
                <i class='bx bx-log-out'></i>
                <span>Salir</span>
            </div>
            </a>

          
        </div>
    </div>
    </header>
</div> 

                <div class="container-php" >
                    <div class="navbar">
                    <h1><a href="/paciente/index">SENAMASEPS</a></h1>
        <ul>
            <li><a href="#">Nosotros</a></li>
            <?php 
            # Validacion tipo de usuario

            if(isset($_SESSION['tipo_usuario']) && $_SESSION['tipo_usuario'] == "paciente"):?>
               <li><a href="#">Documentacion</a></li>
               <?php endif ?>
            <li><a href="#">Politicas internas</a></li>
            <li><a href="#">Acerca de </a></li>
            <?php if(isset($_SESSION['tipo_usuario'])){
                ?>
                <li class="user"> <i class='bx bxs-user-circle' ></i> <a href='/login/logout'> <?php echo $_SESSION['nombre'];  ?> </a> 
            </li>
                
                <?php
            } 
                ?>
        </ul>
                    </div>
                <?php include_once $content; ?>
                </div>



        <!-- Aqui se incluye el contenido de la vista especifica -->
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="../../../../js/app.js" ></script>
</body>
</html>