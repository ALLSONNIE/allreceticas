<?php 
    namespace Medoo;
    require 'Medoo.php';

    if(!isset($database)){
        $database = new Medoo([
            
            'type' => 'mysql',
            'host' => 'localhost',
            'database' => 'proyecto_recetario',
            'username' => 'root',
            'password' => ''
        ]);
    }
?>