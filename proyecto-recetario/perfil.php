<?php
    
    require 'database.php';

    //session_start();
   // if(isset($_SESSION["isLoggedIn"])){

        $data= $database->select("tb_recipe",[
            "[>]tb_recipe_category"=>["id_recipe_category" => "id_recipe_category"],
            "[>]tb_recipe_complex"=>["id_recipe_complex" => "id_recipe_complex"],
            "[>]tb_recipe_occasion"=>["id_recipe_occasion" => "id_recipe_occasion"]
            
        ],[
            "tb_recipe.id_recipe",
            "tb_recipe.recipe_name",
            "tb_recipe.recipe_prep_time",
            "tb_recipe.recipe_cook_time",
            "tb_recipe.recipe_total_time",
            "tb_recipe.recipe_portions",
            "tb_recipe.recipe_description",
            "tb_recipe.recipe_img",
            "tb_recipe.recipe_likes",
            "tb_recipe_complex.recipe_complex",
            "tb_recipe_occasion.recipe_occasion",
            "tb_recipe_category.recipe_category"
        ]);    
        
   // }else{
        //redirect to login page
        //header("location: login.php");
    //}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Perfil administrador</title>

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

<body class="container">
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
    <!-- Header final -->

    <!--  Searcher -->
    <div class="text-center mt-5 ">
        <div class="input-group-item align-menu container">
            <input type="text" class="form-control border-pink title-regular" placeholder="¿Qué desea cocinar?...">
            <div class="input-group-append">
                <button class="circular-nav search-button-height" type="button">
                    <img src="./imgs/lupa.png" alt="lupa">
                </button>
            </div>
        </div>
    </div>
    <!--  Searcher -->

        <!--  Perfil -->
        <div class="row align-menu text-center mt-5 mb-5">
            <p class="badge badge-pink mb-5 mt-2">Perfil administrador</p>
            
            <div class="mb-5 margin-content">
               
                <img class="float-start" src="./imgs/perfil-grande.png" alt="testimonial from user">
                <div class="float-start ms-5">
                    <p class="title-large text-dark mt-5">Nombre de administrador</p>    
                </div>
            </div>   
             
            <a class="btn-circular d-inline-block p-1" href="registro-receta.php">Registrar receta</a>
        </div>         
        <!--  Perfil end -->
        
        <p class="separation-line mt-5 mb-5"></p>
   

    <!-- Recipes list -->
    <div class="mt-5 position-relative">
      
        <p class="badge badge-pink mt-3 margin-content me-5">Lista de recetas</p>

        <div class="margin-content mt-5 margin-right">
            <table class="table table-bordered border-pink table-hover title-regular text-center">
                <!--<thead class="title-regular text-white text-center">-->
               <tr class="badge-pink"> <!-- tr=fila th=cabecera th=atributo scope=indica celdas afectadas-->
                    <td>Imagen</td>
                    <td>Nombre receta</td> 
                    <td>Categoría</td>
                    <td>Tiempo prep</td>
                    <td>Tiempo cocción</td>
                    <td>Tiempo total</td>
                    <td>Porciones</td>
                    <td>Ocasión</td>
                    <td>Complejidad</td>
                    <td>Descripción</td>
                    <td>Likes</td>
                    <td>Opciones</td>
                </tr>
                <!--</thead>-->

                <?php

                    $len = count($data);

                    for($i=0; $i<$len; $i++){
                        echo "<tr>";
                        echo "<td><img src='./imgs/".$data[$i]["recipe_img"]."></td>";
                        echo "<td>".$data[$i]["recipe_name"]."</td>";
                        echo "<td>".$data[$i]["recipe_category"]."</td>";
                        echo "<td>".$data[$i]["recipe_prep_time"]."</td>"; 
                        echo "<td>".$data[$i]["recipe_cook_time"]."</td>"; 
                        echo "<td>".$data[$i]["recipe_total_time"]."</td>"; 
                        echo "<td>".$data[$i]["recipe_occasion"]."</td>"; 
                        echo "<td>".$data[$i]["recipe_complex"]."</td>"; 
                        echo "<td>".$data[$i]["recipe_description"]."</td>"; 
                        echo "<td>".$data[$i]["recipe_likes"]."</td>";
                        echo "<td><a href='edit.php?id=".$data[$i]["id_recipe"]."'>Edit</a>
                        <a href='delete.php?id=".$data[$i]["id_recipe"]."'>Delete</a> <a href='likes.php?id=".$data[$i]["id_recipe"]."'>Likes</a></td>";
                        echo "</tr>";
                    }

                ?>
                <!--<tbody> 
                <tr>
                    <th scope="row">Arroz con pollo</th>
                    <td>Almuerzo</td>
                    <td>1 hora</td>
                    <td>Día de la madre</td>
                </tr>
                <tr>
                    <th scope="row">Arroz con leche</th>
                    <td>Postre</td>
                    <td>40 min</td>
                    <td>Cumpleaños</td>
                </tr>
                <tr>
                    <th scope="row">Ensalada</th>
                    <td>Almuerzo</td>
                    <td>20 min</td>
                    <td>Verano</td>
                </tr>
                </tbody>-->
            </table>
            
        </div>

        <p class="separation-line mt-5"></p>
    </div>
    <!-- Recipes list final -->
    
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
    
</body>
</html>