<?php 
    require 'database.php';

  /*  function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }*/
    //$file_name = $_FILES["recipe_image"]["name"];
    //echo $file_name;

    $data = $database->select("tb_recipe", "*", [
        "id_recipe" => $_POST["id"]
    ]);

    if($_FILES["recipe_img"]["name"] == ""){
        //echo "no files";
        $img = $data[0]["recipe_img"];
    }else{
        //echo "files";
        if(isset($_FILES["recipe_img"])){
            $errors = array();
            $file_name = $_FILES["recipe_img"]["name"];
            $file_size = $_FILES["recipe_img"]["size"];
            $file_tmp = $_FILES["recipe_img"]["tmp_name"];
            $file_type = $_FILES["recipe_img"]["type"];
            $file_ext_arr = explode(".", $_FILES["recipe_img"]["name"]);

            $file_ext = end($file_ext_arr);
            $img_ext = array("jpeg", "png", "jpg", "gif");

            if(!in_array($file_ext, $img_ext)){
                $errors[] = "File type is not supported";
            }

            if(empty($errors)){
                $img = "recipe-upload-".generateRandomString().".".$file_ext;
                move_uploaded_file($file_tmp, "imgs/".$img);
            }
        }
    }

  /*  $ingredients = "";
        foreach($_POST["ingredients"] as $key => $ingredient){
           if($key == array_key_last($_POST["ingredients"])){
                 $ingredients.= $ingredient;
           }else{
                 $ingredients.= $ingredient.",";
           }
    
    }*/   

    $database->insert("tb_recipe", [
        "recipe_name" => $_POST["nombre-receta"],
        "recipe_prep_time" => $_POST["tiempo-prep"],
        "recipe_cook_time" => $_POST["tiempo-coccion"],
        "recipe_total_time" => $_POST["tiempo-total"],
        "recipe_portions" => $_POST["porciones"],
        "id_recipe_complex" => $_POST["nivel"],
        "id_recipe_category" => $_POST["categoria"],
        "id_recipe_occasion" => $_POST["ocasion"],
        "recipe_description" => $_POST["descripcion"],
        "recipe_img" => $img

    ],[
        "id_recipe"=>$_POST["id"]
    ]);

    header("location: perfil.php");
   
   /* $database->update("tb_recipes",[
        "recipe_name"=>$_POST["recipe"],
        "recipe_category"=>$_POST["category"],
        "recipe_time"=>$_POST["time"]
    ],[
        "id_recipe"=>$_POST["id"]
    ]);

    header("location: recipes.php");
    */
?>