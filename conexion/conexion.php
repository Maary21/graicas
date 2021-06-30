<?php
    $username="root";
    $password="";
    try {  //si la conexion es exitosa 
        $conn = new PDO("mysql:host=localhost;dbname=reportes", $username, $password);
        // set the PDO error mode to exception
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->exec('SET NAMES "utf8"');
    }catch(PDOException $e){ //si la conexion falla
        echo "Conexion fallo <br>" . $e->getMessage();
    }
?>