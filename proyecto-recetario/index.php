<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Receticas</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" onerror="this.onerror=null;this.href='./css/vendors/bootstrap.min.css';">

    <!-- Animacion-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Carrousel -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <!-- Vinculacion css -->
    <link rel="stylesheet" href="./css/main.css">

</head>

<body class="container br-mv">

    <!-- Header -->
    <header>
        <div class="position-absolute top-0 start-0 pt-3 pb-3 ps-3 bar-mb position-tab">
            <img class="icon-mb" src="./imgs/bars.svg" alt="menu bar">
        </div>
        <!--  Menu navigation -->
        <nav id="navbar-main" class="navbar topnav offcanvas-mb">
            <div class="d-flex justify-content-between align-items-center">
                <a href="index.php"><img src="./imgs/logo-blanco.png" class="position-relative ms-5" alt="Graphic identifier"></a>
                <div class="offcanvas-header">  
                    <button id="btn-close" class="btn btn-light float-end me-3">X</button>
                 </div>
            </div>
            <ul class="navbar gap-4 nav">
                <li class="header-no-item position-relative hide-mb hide-tab"><a class="header-text" href="#">Niveles</a>
                    <ul class="mt-1 nav-background-color">
                        <li class="header-no-item"><a class="header-subtext mt-3" href="#">Fácil</a></li>
                        <li class="header-no-item"><a class="header-subtext mt-3" href="#">Intermedio</a></li>
                        <li class="header-no-item"><a class="header-subtext mt-3 mb-3" href="#">Avanzado</a></li>
                    </ul> 
                </li>

                <li class="header-no-item position-relative hide-mb hide-tab"><a class="header-text" href="#">Categorias</a>
                    
                     <ul class="mt-1 nav-background-color">
                        <li class="header-no-item"><a class="header-subtext mt-3" href="#">Almuerzo</a></li>
                        <li class="header-no-item"><a class="header-subtext mt-3" href="#">Bebidas</a></li>
                        <li class="header-no-item"><a class="header-subtext mt-3" href="#">Desayuno</a></li>
                        <li class="header-no-item"><a class="header-subtext mt-3" href="#">Entradas</a></li>
                        <li class="header-no-item"><a class="header-subtext mt-3" href="#">Postres</a></li>
                        <li class="header-no-item"><a class="header-subtext mt-3 mb-3" href="#">Sopas</a></li>
                     </ul>  
                </li>

                <li class="header-no-item position-relative hide-mb hide-tab"><a class="header-text" href="#">Ocasiones</a>
                    <ul class="mt-1 nav-background-color">
                        <li class="header-no-item"><a class="header-subtext mt-3" href="#">Todas</a></li>
                        <li class="header-no-item"><a class="header-subtext mt-3" href="#">Cumpleaños</a></li>
                        <li class="header-no-item"><a class="header-subtext mt-3" href="#">Día del padre</a></li>
                        <li class="header-no-item"><a class="header-subtext mt-3" href="#">Día de la madre</a></li>
                        <li class="header-no-item"><a class="header-subtext mt-3" href="#">Día del niño</a></li>
                        <li class="header-no-item"><a class="header-subtext mt-3" href="#">Navidad</a></li>
                        <li class="header-no-item"><a class="header-subtext mt-3" href="#">Semana Santa</a></li>
                        <li class="header-no-item"><a class="header-subtext mt-3 mb-3" href="#">Verano</a></li>
                    </ul> 
                </li>

                <li class="header-no-item position-relative hide-mb hide-tab"><a class="header-text" href="#">Social</a>
                    <ul class="mt-1 nav-background-color">
                        <li class="header-no-item"><a class="header-subtext mt-3" href="#"><img src="./imgs/icono-instagram.png" class="me-3" alt="Instagram">Rece_Ticas</a></li>
                        <li class="header-no-item"><a class="header-subtext mt-3" href="#"><img src="./imgs/icono-facebook.png" class="me-3" alt="Facebook">ReceTicas</a></li>
                        <li class="header-no-item"><a class="header-subtext mt-3" href="#"><img src="./imgs/icono-whatsapp.png" class="me-3" alt="WhatsApp">+506 2222 2222</a></li>
                        <li class="header-no-item"><a class="header-subtext mt-3 mb-3" href="#"><img src="./imgs/icono-correo.png" class="me-3" alt="Correo">Correo</a></li>
                    </ul> 
                </li>
            </ul>

            <ul class="navbar gap-4 nav">
                <li class="header-no-item position-relative hide-mb hide-tab"><a class="header-text" href="#">
                    <img src="./imgs/perfil-pequeño.png" class="position-relative px-3" alt="Perfil" ></a> 
                    <ul class="mt-1 nav-background-color nav-client-align">
                        <li class="header-no-item"><a class="btn-circular btn-circular-client mt-5" href="login.php">Iniciar Sesión</a></li>
                        <li class="header-no-item"><a class="btn-circular btn-circular-client mt-3 mb-3" href="registro-admin.html">Registrarse</a></li>
                    </ul>  
                </li>
            </ul>

                <div class="offcanvas-header mt-5 mt-5-mb margin-nav-mb">
                    <div class="row">
            
                        <div class="col-md">
                            <div class="row">
                                <p class="text-light header-text">Niveles</p>
                                <div class="col">
                                    <ul class="p-0 ul-class">
                                        <li class="header-no-item mb-3"><a class="header-text" href="#">Fácil</a></li>
                                        <li class="header-no-item mb-3"><a class="header-text" href="#">Intermedio</a></li>
                                        <li class="header-no-item mb-3"><a class="header-text" href="#">Avanzado</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="row">
                                <p class="text-light header-text">Categorías</p>
                                <div class="col">
                                    <ul class="p-0 ul-class">
                                        <li class="header-no-item mb-3"><a class="header-text" href="#">Almuerzo</a></li>
                                        <li class="header-no-item mb-3"><a class="header-text" href="#">Bebidas</a></li>
                                        <li class="header-no-item mb-3"><a class="header-text" href="#">Desayuno</a></li>
                                        <li class="header-no-item mb-3"><a class="header-text" href="#">Entradas</a></li>
                                        <li class="header-no-item mb-3"><a class="header-text" href="#">Postres</a></li>
                                        <li class="header-no-item mb-3"><a class="header-text" href="#">Sopas</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md">
                            <div class="row">
                                <p class="text-light header-text">Ocasiones</p>
                                <div class="col">
                                    <ul class="p-0 ul-class">
                                        <li class="header-no-item mb-3"><a class="header-text" href="#">Todas</a></li>
                                        <li class="header-no-item mb-3"><a class="header-text" href="#">Cumpleaños</a></li>
                                        <li class="header-no-item mb-3"><a class="header-text" href="#">Día del padre</a></li>
                                        <li class="header-no-item mb-3"><a class="header-text" href="#">Día de la madre</a></li>
                                        <li class="header-no-item mb-3"><a class="header-text" href="#">Día del niño</a></li>
                                        <li class="header-no-item mb-3"><a class="header-text" href="#">Navidad</a></li>
                                        <li class="header-no-item mb-3"><a class="header-text" href="#">Semana Santa</a></li>
                                        <li class="header-no-item mb-3"><a class="header-text" href="#">Verano</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md">
                            <div class="row">
                                <p class="text-light header-text">Social</p>
                                <div class="col">
                                    <ul class="p-0 ul-class"> 
                                        <li class="header-no-item mb-3"><a class="header-text" href="#"><img src="./imgs/icono-insta.png" class="me-3" alt="Instagram">Rece_Ticas</a></li>
                                        <li class="header-no-item mb-3"><a class="header-text" href="#"><img src="./imgs/icono-facebook-blanco.png" class="me-3" alt="Facebook">ReceTicas</a></li>
                                        <li class="header-no-item mb-3"><a class="header-text" href="#"><img src="./imgs/icono-whats.png" class="me-3" alt="WhatsApp">+506 2222 2222</a></li>
                                        <li class="header-no-item mb-3"><a class="header-text" href="#"><img src="./imgs/icono-email.png" class="me-3" alt="Correo">Correo</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
        </nav>
         <!--  Menu navigation -->

    </header>
    <!-- Header final -->

    <!--  Searcher -->
    <div class="text-center mt-5 mb-5 align-search container-searcher-mv">
        <div class="input-group-item align-menu container searcher-mv">
            <input type="text" class="form-control border-pink title-regular" placeholder="¿Qué desea cocinar?...">
            <div class="input-group-append">
            <button class="circular-nav search-button-height" type="button">
                <img src="./imgs/lupa.png" alt="">
            </button>
            </div>
        </div>
    </div>
    <!--  Searcher -->

    <!-- Category recipe -->
        <div class="main-carousel margin-left margin-right main-carousel-mb" data-flickity='{ "cellAlign": "left", "contain": true }'>
            <div class="carousel-cell margin-carousel"><a class="nav-link topnav-link" href="informacion-receta.php"><img class="border border-4 border-danger rounded" src="./imgs/receta1.png" alt="receta1"><h4 class="text-center mt-3 mb-3">Almuerzo</h4></a></div>
            <div class="carousel-cell margin-carousel"><a class="nav-link topnav-link" href="informacion-receta.php"><img class="border border-4 border-danger rounded" src="./imgs/receta2.png" alt="receta2"><h4 class="text-center mt-3 mb-3">Cena</h4></a></div>
            <div class="carousel-cell margin-carousel"><a class="nav-link topnav-link" href="informacion-receta.php"><img class="border border-4 border-danger rounded" src="./imgs/receta3.png" alt="receta3"><h4 class="text-center mt-3 mb-3">Bebidas</h4></a></div>
            <div class="carousel-cell margin-carousel"><a class="nav-link topnav-link" href="informacion-receta.php"><img class="border border-4 border-danger rounded" src="./imgs/receta4.png" alt="receta4"><h4 class="text-center mt-3 mb-3">Entradas</h4></a></div>
            <div class="carousel-cell margin-carousel"><a class="nav-link topnav-link" href="informacion-receta.php"><img class="border border-4 border-danger rounded" src="./imgs/receta1.png" alt="receta1"><h4 class="text-center mt-3 mb-3">Desayuno</h4></a></div>
            <div class="carousel-cell margin-carousel"><a class="nav-link topnav-link" href="informacion-receta.php"><img class="border border-4 border-danger rounded" src="./imgs/receta2.png" alt="receta2"><h4 class="text-center mt-3 mb-3">Postre</h4></a></div>
            <div class="carousel-cell margin-carousel"><a class="nav-link topnav-link" href="informacion-receta.php"><img class="border border-4 border-danger rounded" src="./imgs/receta1.png" alt="receta1"><h4 class="text-center mt-3 mb-3">Sopas</h4></a></div>
        </div>
    <!-- Category recipe -->

    <p class="separation-line mt-5"></p>
   
    <!-- Best recipes -->
    <div class="text-center mt-5 mb-4" data-aos="fade-up">
        
        <p class="badge badge-pink">Mejores Recetas</p>

        <div class="row align-menu mt-5">
            <section class="col-md position-relative">
                <a class="nav-link topnav-link" href="informacion-receta.php">
                    <p class="position-absolute margin-left margin-left-mb px-4 mt-3"><img src="./imgs/corazon-blanco.png" alt="corazon blanco"></p>
                    <img class="border border-4 border-danger rounded" src="./imgs/receta5.png" alt="receta5">
                    <h4 class="mt-3 mb-3">Pollo con vegetales</h4>
                    <h6 class="text-dark title-regular opacity-75 mt-3 mb-3">Almuerzo - 40min</h6>
                </a>
            </section>
            <section class="col-md position-relative">
                <a class="nav-link topnav-link" href="informacion-receta.php">
                    <p class="position-absolute margin-left margin-left-mb px-4 mt-3"><img src="./imgs/corazon-blanco.png" alt="corazon blanco"></p>
                    <img class="border border-4 border-danger rounded" src="./imgs/receta6.png" alt="receta6">
                    <h4 class="mt-3 mb-3">Puré de papa</h4>
                    <h6 class="text-dark title-regular opacity-75 mt-3 mb-3">Almuerzo - 30min</h6>
                </a>
            </section>
            <section class="col-md position-relative">
                <a class="nav-link topnav-link" href="informacion-receta.php">
                    <p class="position-absolute margin-left margin-left-mb px-4 mt-3"><img src="./imgs/corazon-blanco.png" alt="corazon blanco"></p>
                    <img class="border border-4 border-danger rounded" src="./imgs/receta7.png" alt="receta7">
                    <h4 class="mt-3 mb-3">Guacamole</h4>
                    <h6 class="text-dark mt-3 mb-3 title-regular opacity-75">Entrada - 10min</h6>
                </a>
            </section>
            <section class="col-md position-relative">
                <a class="nav-link topnav-link" href="informacion-receta.php">
                    <p class="position-absolute margin-left margin-left-mb px-4 mt-3"><img src="./imgs/corazon-blanco.png" alt="corazon blanco"></p>
                    <img class="border border-4 border-danger rounded" src="./imgs/receta8.png" alt="receta8">
                    <h4 class="mt-3 mb-3">Ensalada Criollla</h4>
                    <h6 class="text-dark mt-3 mb-3 title-regular opacity-75">Entrada - 10min</h6>
                </a>
            </section>
            <section class="col-md position-relative">
                <a class="nav-link topnav-link" href="informacion-receta.php">
                    <p class="position-absolute margin-left margin-left-mb px-4 mt-3 margin-left-mb2"><img src="./imgs/corazon-blanco.png" alt="corazon blanco"></p>
                    <img class="border border-4 border-danger rounded" src="./imgs/receta13.png" alt="receta9">
                    <h4 class="mt-3 mb-3">Arroz con leche</h4>
                    <h6 class="text-dark mt-3 mb-3 title-regular opacity-75">Postre - 1h</h6>
                </a>
            </section>
        </div>
        <div class="row align-menu mt-5">
            <section class="col-md position-relative">
                <a class="nav-link topnav-link" href="informacion-receta.php">
                    <p class="position-absolute margin-left margin-left-mb px-4 mt-3"><img src="./imgs/corazon-blanco.png" alt="corazon blanco"></p>
                    <img class="border border-4 border-danger rounded" src="./imgs/receta9.png" alt="receta10">
                    <h4 class="mt-3 mb-3">Ensalada Jitomate</h4>
                    <h6 class="text-dark mt-3 mb-3 title-regular opacity-75">Almuerzo - 20min</h6>
                </a>
            </section>
            <section class="col-md position-relative">
                <a class="nav-link topnav-link" href="informacion-receta.php">
                    <p class="position-absolute margin-left margin-left-mb px-4 mt-3"><img src="./imgs/corazon-blanco.png" alt="corazon blanco"></p>
                    <img class="border border-4 border-danger rounded" src="./imgs/receta10.png" alt="receta11">
                    <h4 class="mt-3 mb-3">Pollo Oriental</h4>
                    <h6 class="text-dark mt-3 mb-3 title-regular opacity-75">Almuerzo - 50min</h6>
                </a>
            </section>
            <section class="col-md position-relative">
                <a class="nav-link topnav-link" href="informacion-receta.php">
                    <p class="position-absolute margin-left margin-left-mb px-4 mt-3"><img src="./imgs/corazon-blanco.png" alt="corazon blanco"></p>
                    <img class="border border-4 border-danger rounded" src="./imgs/receta11.png" alt="receta12">
                    <h4 class="mt-3 mb-3">Pescado</h4>
                    <h6 class="text-dark mt-3 mb-3 title-regular opacity-75">Almuerzo - 1h</h6>
                </a>
            </section>
            <section class="col-md position-relative">
                <a class="nav-link topnav-link" href="informacion-receta.php">
                    <p class="position-absolute margin-left margin-left-mb px-4 mt-3"><img src="./imgs/corazon-blanco.png" alt="corazon blanco"></p>
                    <img class="border border-4 border-danger rounded" src="./imgs/receta12.png" alt="receta12">
                    <h4 class="mt-3 mb-3">Salmón</h4>
                    <h6 class="text-dark mt-3 mb-3 title-regular opacity-75">Almuerzo - 30min</h6>
                </a>
            </section>
            <section class="col-md position-relative">
                <a class="nav-link topnav-link" href="informacion-receta.php">
                    <p class="position-absolute margin-left margin-left-mb px-4 mt-3 margin-left-mb2"><img src="./imgs/corazon-blanco.png" alt="corazon blanco"></p>
                    <img class="border border-4 border-danger rounded" src="./imgs/receta14.png" alt="receta13">
                    <h4 class="mt-3 mb-3">Pinto</h4>
                    <h6 class="text-dark mt-3 mb-3 title-regular opacity-75">Desayuno - 20min</h6>
                </a> 
            </section>
        </div>

        <p class="separation-line mt-5"></p>
    </div>
    <!-- Best recipes final-->

    <!-- New recipes-->
    <div class="text-center mb-5" data-aos="fade-up">
        <p class="mt-3 mb-5 badge badge-pink">Lo más nuevo</p>

        <div class="row align-menu mt-3">
            <section class="col-md position-relative title-medium">
                <a class="nav-link topnav-link" href="informacion-receta.php">
                    <p class="position-absolute margin-left margin-left-mb px-4 mt-3"><img src="./imgs/corazon-blanco.png" alt="corazon blanco"></p>
                    <img class="border border-4 border-danger rounded" src="./imgs/receta5.png" alt="receta5">
                    <h4 class="mt-3 mb-3">Pollo con vegetales</h4>
                    <h6 class="text-dark mt-3 mb-3 title-regular opacity-75">Almuerzo - 40min</h6>
                </a>
            </section>

            <section class="col-md position-relative">
                <a class="nav-link topnav-link" href="informacion-receta.php">
                    <p class="position-absolute margin-left margin-left-mb px-4 mt-3"><img src="./imgs/corazon-blanco.png" alt="corazon blanco"></p>
                    <img class="border border-4 border-danger rounded" src="./imgs/receta6.png" alt="receta6">
                    <h4 class="mt-3 mb-3">Puré de papa</h4>
                    <h6 class="text-dark mt-3 mb-3 title-regular opacity-75">Almuerzo - 30min</h6>
                </a>
            </section>

            <section class="col-md position-relative">
                <a class="nav-link topnav-link" href="informacion-receta.php">
                    <p class="position-absolute margin-left margin-left-mb px-4 mt-3"><img src="./imgs/corazon-blanco.png" alt="corazon blanco"></p>
                    <img class="border border-4 border-danger rounded" src="./imgs/receta7.png" alt="receta7">
                    <h4 class="mt-3 mb-3">Guacamole</h4>
                    <h6 class="text-dark mt-3 mb-3 title-regular opacity-75">Entrada - 10min</h6>
                </a>
            </section>

            <section class="col-md position-relative">
                <a class="nav-link topnav-link" href="informacion-receta.php">
                    <p class="position-absolute margin-left margin-left-mb px-4 mt-3"><img src="./imgs/corazon-blanco.png" alt="corazon blanco"></p>
                    <img class="border border-4 border-danger rounded" src="./imgs/receta8.png" alt="receta8">
                    <h4 class="mt-3 mb-3">Ensalada Criolla</h4>
                    <h6 class="text-dark mt-3 mb-3 title-regular opacity-75">Entrada - 10min</h6>
                </a>
            </section>

            <section class="col-md position-relative">
                <a class="nav-link topnav-link" href="informacion-receta.php">
                    <p class="position-absolute margin-left margin-left-mb px-4 mt-3 margin-left-mb2"><img src="./imgs/corazon-blanco.png" alt="corazon blanco"></p>
                    <img class="border border-4 border-danger rounded" src="./imgs/receta13.png" alt="receta9">
                    <h4 class="mt-3 mb-3">Arroz con leche</h4>
                    <h6 class="text-dark mt-3 mb-3 title-regular opacity-75">Postre - 1h</h6>
                </a>
            </section>
        </div>

        <div class="row text-center align-menu mt-5">
            <section class="col-md position-relative">
                <a class="nav-link topnav-link" href="informacion-receta.php">
                    <p class="position-absolute margin-left margin-left-mb px-4 mt-3"><img src="./imgs/corazon-blanco.png" alt="corazon blanco"></p>
                    <img class="border border-4 border-danger rounded" src="./imgs/receta9.png" alt="receta10">
                    <h4 class="mt-3 mb-3">Ensalada Jitomate</h4>
                    <h6 class="text-dark mt-3 mb-3 title-regular opacity-75">Almuerzo - 20min</h6>
                </a>
            </section>

            <section class="col-md position-relative">
                <a class="nav-link topnav-link" href="informacion-receta.php">
                    <p class="position-absolute margin-left margin-left-mb px-4 mt-3"><img src="./imgs/corazon-blanco.png" alt="corazon blanco"></p>
                    <img class="border border-4 border-danger rounded" src="./imgs/receta10.png" alt="receta11">
                    <h4 class="mt-3 mb-3">Pollo Oriental</h4>
                    <h6 class="text-dark mt-3 mb-3 title-regular opacity-75">Almuerzo - 40min</h6>
                </a>
            </section>

            <section class="col-md position-relative">
                <a class="nav-link topnav-link" href="informacion-receta.php">
                    <p class="position-absolute margin-left margin-left-mb px-4 mt-3"><img src="./imgs/corazon-blanco.png" alt="corazon blanco"></p>
                    <img class="border border-4 border-danger rounded" src="./imgs/receta11.png" alt="receta12">
                    <h4 class="mt-3 mb-3">Pescado</h4>
                    <h6 class="text-dark mt-3 mb-3 title-regular opacity-75">Almuerzo - 1h</h6>
                </a>
            </section>

            <section class="col-md position-relative">
                <a class="nav-link topnav-link" href="informacion-receta.php">
                    <p class="position-absolute margin-left margin-left-mb px-4 mt-3"><img src="./imgs/corazon-blanco.png" alt="corazon blanco"></p>
                    <img class="border border-4 border-danger rounded" src="./imgs/receta12.png" alt="receta12">
                    <h4 class="mt-3 mb-3">Salmón</h4>
                    <h6 class="text-dark mt-3 mb-3 title-regular opacity-75">Almuerzo - 30min</h6>
                </a>
            </section>

            <section class="col-md position-relative">
                <a class="nav-link topnav-link" href="informacion-receta.php">
                    <p class="position-absolute margin-left margin-left-mb px-4 mt-3 margin-left-mb2"><img src="./imgs/corazon-blanco.png" alt="corazon blanco"></p>
                    <img class="border border-4 border-danger rounded" src="./imgs/receta14.png" alt="receta13">
                    <h4 class="mt-3 mb-3">Pinto</h4>
                    <h6 class="text-dark mt-3 mb-3 title-regular opacity-75">Desayuno - 20min</h6>
                </a>
            </section>
        </div>

        <p class="separation-line mt-5"></p>

    </div>
    <!-- New recipes final-->
  
    <!--Footer information about us-->
    <footer class="center-mb">
        <div class="mt-5 mt-5-mb">
            <div class="row">
                <div class="col-md mt-5 mt-5-mb">
                    <img src="./imgs/logo-rojo.png" class="p-5 p-5-mb" alt="Graphic identifier">   
                </div>
    
                <div class="col-md hide-mb hide-tab">
                    <div class="row">
                        <p class="title-medium">Secciones</p>
                        <div class="col">
                            <ul class="p-0">
                                <li class="footer-no-item mb-3"><a class="footer-text" href="#">Categorias</a></li>
                                <li class="footer-no-item mb-3"><a class="footer-text" href="#">Niveles</a></li>
                                <li class="footer-no-item mb-3"><a class="footer-text" href="#">Ocasiones</a></li>
                                <li class="footer-no-item mb-3"><a class="footer-text" href="#">Top 10</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
    
                <div class="col-md mt-mb">
                    <div class="row">
                        <p class="title-medium">Social</p>
                        <div class="col">
                            <ul class="p-0"> 
                                <li class="footer-no-item mb-3"><a class="footer-text" href="#"><img src="./imgs/icono-instagram.png" class="me-3" alt="Instagram">Rece_Ticas</a></li>
                                <li class="footer-no-item mb-3"><a class="footer-text" href="#"><img src="./imgs/icono-facebook.png" class="me-3" alt="Facebook">ReceTicas</a></li>
                                <li class="footer-no-item mb-3"><a class="footer-text" href="#"><img src="./imgs/icono-whatsapp.png" class="me-3" alt="WhatsApp">+506 2222 2222</a></li>
                                <li class="footer-no-item mb-3"><a class="footer-text" href="#"><img src="./imgs/icono-correo.png" class="me-3" alt="Correo">Correo</a></li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
    
                <div class="col-md hide-mb mt-mb">
                    <div class="row">
                        <p class="title-medium">Acerca de nosotros</p>
                        <div class="col mb-5">
                            <ul class="p-0">
                                <li class="footer-no-item mb-3"><a class="footer-text" href="#">Equipo</a></li>
                                <li class="footer-no-item mb-3"><a class="footer-text" href="#">Términos y políticas</a></li>
                                <li class="footer-no-item mb-3"><a class="footer-text" href="#">Únete</a></li>
                                <li class="footer-no-item mb-3"><a class="footer-text" href="#">Visión</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </footer>
    <!--Footer end-->

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="./js/main.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function(){

            document.querySelector('.icon-mb').addEventListener('click', function(event){
                document.getElementById('navbar-main').classList.add('show-mb-nav');
            });

            document.querySelector('#btn-close').addEventListener('click', function(event){
                document.getElementById('navbar-main').classList.remove('show-mb-nav');
            });
        });
    </script>
    
</body>
</html>