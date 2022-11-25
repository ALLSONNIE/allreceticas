<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Información receta</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">

    <!-- Animacion-->

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

    <div>
         <!--  List information  -->
        <div class="row align-menu mt-4 d-flex">
            <p class="badge badge-pink mb-3 mt-5">Nombre de la receta</p>

            <div class="row mt-2 mb-3 align-menu">
                <img class="mt-5 border border-danger border-5 rounded badge-xlg" src="./imgs/recetica.png" alt="">
            </div>
            
            <section class="row mt-5 margin-content margin-right me-5 mb-icons margin-text">

                <div class="mb-5 col-md">
                    <h3 class="title-medium">Nombre de la receta:</h3>
                    <p class="text-dark title-regular">Arroz con pollo</p>
                  
                </div>

                <div class="mb-5 col-md">
                    <h3 class="title-medium">Tiempo de preparación:</h3>
                    <p class="text-dark title-regular">1 hora</p>
                </div>

                <div class="mb-5 col-md">
                    <h3 class="title-medium">Tiempo de cocción:</h3>
                    <p class="text-dark title-regular">30 minutos</p>
                </div>
            </section>

            <section class="row margin-content margin-right me-5 mb-icons margin-text">
                <div class="mb-5 col-md">
                    <h3 class="title-medium">Tiempo total:</h3>
                    <p class="text-dark title-regular">1 hora 30 min</p>
                </div>

                <div class="mb-5 col-md">
                    <h3 class="title-medium">Porciones:</h3>
                    <p class="text-dark title-regular">6</p>
                </div>

                <div class="mb-5 col-md">
                    <h3 class="title-medium">Nivel de complejidad:</h3>
                    <p class="text-dark title-regular">Intermedio</p>
                </div>
            </section>

            <section class="row margin-content margin-right me-5 mb-icons margin-text">
                <div class="mb-5 col-md">
                    <h3 class="title-medium">Categoría:</h3>
                    <p class="text-dark  title-regular">Almuerzo</p>
                </div>

                <div class="mb-5 col-md">
                    <h3 class="title-medium">Ocasión:</h3>
                    <p class="text-dark title-regular">Navidad</p>
                </div>

                <div class="mb-5 col-md">
                    <h3 class="title-medium">Cantidad de votos:</h3>
                    <p class="text-dark title-regular">50</p>
                </div>
            </section>

        </div>
        <!--  List information final  -->

        <!--  Box Information  -->
        <div class="mt-3 mb-5">
           
                <div class="row gap-3 margin-content margin-right infobox-mb">
                    <section class="background-block me-3 p-4 mb-5 col-md">
                        <h3 class="title-medium">Descripción</h3>
                        <p class="text-dark mt-3">is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                             unknown printer took a galley of type and scrambled it to make a type specimen book.  
                        </p>
                    </section>

                    <section class="background-block p-4 mb-5 col-md">
                        <h3 class="title-medium">Ingredientes</h3>
                        <p class="text-dark mt-3">is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                             unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </section>
                </div>

                <section class="background-block p-4 mb-5 margin-content margin-right infobox-mb">
                    <h3 class="title-medium">Instrucciones</h3>
                    <p class="text-dark mt-3">is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                         unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </section> 
           
            <p class="separation-line mt-5"></p>
            </div>
         <!--  Box Information final  -->

        </div>
    
        
         <!-- Similar recipes -->
        <div class="mt-5 mb-5">
            
            <p class="badge badge-pink badge-lg mt-3 margin-content infobox-mb ">Recetas Relacionadas</p>
            

            <div class="main-carousel margin-left margin-right main-carousel-mb mt-5" data-flickity='{ "cellAlign": "left", "contain": true }'>
                <div class="carousel-cell margin-carousel"><a class="nav-link topnav-link" href="informacion-receta.php"><img class="border border-4 border-danger rounded" src="./imgs/receta8.png" alt="receta8"><h4 class="text-center mt-3 mb-3">Ensalada Criolla</h4></a></div>
                <div class="carousel-cell margin-carousel"><a class="nav-link topnav-link" href="informacion-receta.php"><img class="border border-4 border-danger rounded" src="./imgs/receta11.png" alt="receta11"><h4 class="text-center mt-3 mb-3">Pescado</h4></a></div>
                <div class="carousel-cell margin-carousel"><a class="nav-link topnav-link" href="informacion-receta.php"><img class="border border-4 border-danger rounded" src="./imgs/receta12.png" alt="receta12"><h4 class="text-center mt-3 mb-3">Salmón</h4></a></div>
                <div class="carousel-cell margin-carousel"><a class="nav-link topnav-link" href="informacion-receta.php"><img class="border border-4 border-danger rounded" src="./imgs/receta13.png" alt="receta13"><h4 class="text-center mt-3 mb-3">Arroz con leche</h4></a></div>
            
            </div>

            <p class="separation-line mt-5"></p>
        </div>
        <!-- Similar recipes final-->
        
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
        
                    <div class="col-md">
                        <div class="row">
                            <p class="title-medium mt-mb">Social</p>
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
        
                    <div class="col-md hide-mb">
                        <div class="row">
                            <p class="title-medium mt-mb">Acerca de nosotros</p>
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