<?php
    require 'database.php';

    $pass = password_hash("pass01", PASSWORD_DEFAULT, ['cost' => 12]); //permite definir una serie de caracteres que no tienen que ver con el password original
   
   $database->insert("tb_users",[
    "username"=>"user01",
  
    "password"=> $pass
   ]);

?>