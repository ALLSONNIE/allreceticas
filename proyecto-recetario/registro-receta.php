<?php

    require 'database.php';
    
    $complex = $database->select("tb_recipe_complex","*");
    $category = $database->select("tb_recipe_category", "*");
    $occasion = $database->select("tb_recipe_occasion", "*");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Registro receta</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">

    <!-- Animacion-->

    <!-- Vinculacion css -->
    <link rel="stylesheet" href="./css/main.css">

</head>

<body  class="container">
     <!-- Header -->
     <header>
        <!--  Menu navigation -->
        <nav class="navbar topnav">
            <a href="index.php"><img src="./imgs/logo-blanco.png" class="position-relative ms-5" alt="Graphic identifier"></a>
            <ul class="navbar gap-4 nav">
                <li class="header-no-item position-relative"><a class="header-text" href="#">Niveles</a>
                    <ul class="mt-1 nav-background-color">
                        <li class="header-no-item"><a class="header-subtext mt-3" href="#">Fácil</a></li>
                        <li class="header-no-item"><a class="header-subtext mt-3" href="#">Intermedio</a></li>
                        <li class="header-no-item"><a class="header-subtext mt-3 mb-3" href="#">Avanzado</a></li>
                    </ul> 
                </li>

                <li class="header-no-item position-relative"><a class="header-text" href="#">Categorias</a>
                    
                     <ul class="mt-1 nav-background-color">
                        <li class="header-no-item"><a class="header-subtext mt-3" href="#">Almuerzo</a></li>
                        <li class="header-no-item"><a class="header-subtext mt-3" href="#">Bebidas</a></li>
                        <li class="header-no-item"><a class="header-subtext mt-3" href="#">Desayuno</a></li>
                        <li class="header-no-item"><a class="header-subtext mt-3" href="#">Entradas</a></li>
                        <li class="header-no-item"><a class="header-subtext mt-3" href="#">Postres</a></li>
                        <li class="header-no-item"><a class="header-subtext mt-3 mb-3" href="#">Sopas</a></li>
                     </ul>  
                </li>

                <li class="header-no-item position-relative"><a class="header-text" href="#">Ocasiones</a>
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

                <li class="header-no-item position-relative"><a class="header-text" href="#">Social</a>
                    <ul class="mt-1 nav-background-color">
                        <li class="header-no-item"><a class="header-subtext mt-3" href="#"><img src="./imgs/icono-instagram.png" class="me-3" alt="Instagram">Rece_Ticas</a></li>
                        <li class="header-no-item"><a class="header-subtext mt-3" href="#"><img src="./imgs/icono-facebook.png" class="me-3" alt="Facebook">ReceTicas</a></li>
                        <li class="header-no-item"><a class="header-subtext mt-3" href="#"><img src="./imgs/icono-whatsapp.png" class="me-3" alt="WhatsApp">+506 2222 2222</a></li>
                        <li class="header-no-item"><a class="header-subtext mt-3 mb-3" href="#"><img src="./imgs/icono-correo.png" class="me-3" alt="Correo">Correo</a></li>
                    </ul> 
                </li>
            </ul>

            <ul class="navbar gap-4 nav">
                <li class="header-no-item position-relative"><a class="header-text" href="#">
                    <img src="./imgs/perfil-pequeño.png" class="position-relative px-3" alt="Perfil" ></a> 
                    <ul class="mt-1 nav-background-color nav-client-align">
                        <li class="header-no-item"><a class="btn-circular btn-circular-client mt-5" href="login.php">Iniciar Sesión</a></li>
                        <li class="header-no-item"><a class="btn-circular btn-circular-client mt-3 mb-3" href="registro-admin.html">Registrarse</a></li>
                    </ul>  
                </li>
            </ul>
        </nav>
         <!--  Menu navigation -->
    </header>

     <!--  Searcher -->
     <div class="text-center mt-5 ">
        <div class="input-group-item align-menu container">
            <input type="text" class="form-control border-pink title-regular" placeholder="¿Qué desea cocinar?...">
            <div class="input-group-append">
                <button class="circular-nav search-button-height" type="button">
                    <img src="./imgs/lupa.png"  alt="lupa">
                </button>
            </div>
        </div>
    </div>
    <!--  Searcher -->

        <!--  Registrar receta -->
        <div class="row align-menu text-center mt-4 d-flex">
            <p class="badge badge-pink mb-3 mt-5">Registro de receta</p>

            <form action="response.php" method="post" enctype="multipart/form-data">
    
            <div class="mb-5 mt-3 margin-content title-medium text-center">

                <div class="form-group mt-5 d-flex">
                    <label for="nombre-receta" class="col-2 d-flex">Nombre de la receta:</label>
                    <div class="col-sm-10">
                      <input type="text" name="nombre-receta" class="form-control input-size border-pink ms-5 shadow-lg title-regular" id="nombre-receta" placeholder="Arroz con pollo...">
                    </div>
                </div>

                <div class="form-group mt-5 d-flex">
                    <label for="tiempo-prep" class="col-2 d-flex">Tiempo preparación:</label>
                    <div class="col-sm-10">
                      <input type="text" name="tiempo-prep" class="form-control input-size border-pink ms-5 shadow-lg title-regular" id="tiempo-prep" placeholder="10 min, 30 min, 1 hora...    ">
                    </div>
                </div>

                <div class="form-group mt-5 d-flex">
                    <label for="tiempo-coccion" class="col-2 d-flex">Tiempo de cocción:</label>
                    <div class="col-sm-10">
                      <input type="text" name="tiempo-coccion" class="form-control input-size border-pink ms-5 shadow-lg title-regular" id="tiempo-coccion" placeholder="10 min, 30 min, 1 hora...    ">
                    </div>
                </div>

                <div class="form-group mt-5 d-flex">
                    <label for="tiempo-total" class="col-2 d-flex">Tiempo total:</label>
                    <div class="col-sm-10">
                      <input type="text" name="tiempo-total" class="form-control input-size border-pink ms-5 shadow-lg title-regular" id="tiempo-total" placeholder="10 min, 30 min, 1 hora...    ">
                    </div>
                </div>

                <div class="form-group mt-5 d-flex">
                    <label for="porciones" class="col-2 d-flex">Porciones:</label>
                    <div class="col-sm-10">
                      <input type="text" name="porciones" class="form-control input-size border-pink ms-5 shadow-lg title-regular" id="porciones" placeholder="1, 2, 3, 4...   ">
                    </div>
                </div>

                <div class="form-group margin-right mt-5 mb-5 d-flex">
                    <label for="nivel" class="col-2 d-flex">Nivel complejidad:</label>
                    <select name="nivel" class="form-control-lg  border-pink ms-5 shadow-lg title-regular" id="nivel">
                        <?php 

                            $len = count($complex);
                            for($i=0; $i < $len; $i++) {
                                echo '<option value="'.$complex[$i]
                                ['id_recipe_complex'].'">'.$complex[$i]
                                ['recipe_complex'].'</option>';
                            }
                        ?>
                
                    </select>
                  </div>

                  <div class="form-group margin-right mt-5 mb-5 d-flex">
                    <label for="categoria" class="col-2 d-flex">Categoría:</label>
                    <select name="categoria" class="form-control-lg  border-pink ms-5 shadow-lg title-regular" id="categoria">
                         <?php 
                            $len = count($category);
                            for($i=0; $i < $len; $i++) {
                                echo '<option value="'.$category[$i]
                                ['id_recipe_category'].'">'.$category[$i]
                                ['recipe_category'].'</option>';
                            }
                        ?>
                      </select>
                  </div>

                  <div class="form-group margin-right mt-5 mb-5 d-flex">
                    <label for="ocasion" class="col-2 d-flex">Ocasión:</label>
                    <select name="ocasion" class="form-control-lg border-pink ms-5 shadow-lg title-regular" id="ocasion">
                       
                        <?php 
                            $len = count($occasion);
                            for($i=0; $i < $len; $i++) {
                                echo '<option value="'.$occasion[$i]
                                ['id_recipe_occasion'].'">'.$occasion[$i]
                                ['recipe_occasion'].'</option>';
                            }
                        ?>
                
                    </select>
                  </div>

                <div class="form-group margin-right mt-5 mb-4 d-flex">
                    <label for="descripcion" class="col-2 d-flex">Descripción:</label>
                    <textarea name="descripcion" class="form-control textarea-width border-pink ms-5 shadow-lg title-regular" rows="5" id="descripcion"></textarea>
                  </div>
                   
                </div>   

            <div class="custom-file title-medium mb-5 d-flex margin-content">
                <label class="custom-file-label col-2 d-flex" for="foto">Seleccionar foto</label>
                <img id="preview" src="./imgs/preview.png" width="188" height="190" alt="Preview">
                <input type="file" name="foto" class="ms-5" id="foto" lang="es" onchange="readURL(this)">
               
              </div>
          
              <input type="submit" class="btn-circular border-danger d-inline-block p-1 mt-5 mb-4" value="Guardar receta">
           
            </div>         
        <!--  Registrar receta end -->
       
        </form>

        <p class="separation-line mt-5 mb-5"></p>
    
    
    <!--Footer information about us-->
    <footer>
        <div class="mt-5">
            <div class="row">
                <div class="col-md mt-5">
                    <img src="./imgs/logo-rojo.png" class="p-5" alt="Graphic identifier">   
                </div>
    
                <div class="col-md">
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
    
                <div class="col-md">
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

    <script>

        function click(event) {
            event.preventDefault();
        }

        function readURL(input) {
            if(input.files && input.files[0]){
                let reader = new FileReader();

                reader.onload = function(e) {
                    let preview = document.getElementById('preview').setAttribute('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    
</body>
</html>