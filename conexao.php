<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "muze";

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    if($conn ->error){
        die("Falha ao conectador ao banco de dados ". $conn->error);
    }else{
        // echo "conectado com sucesso!";
    }
?>
