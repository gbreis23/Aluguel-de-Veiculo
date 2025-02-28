<?php

    include('conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUZE</title>
    <script src="https://kit.fontawesome.com/3c52f9b82b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/adm.css">
    <link rel="stylesheet" href="css/responsivo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: #eee;">


    <p style="margin-top: 100px;"></p>
    <div class="container">
                <div class="box-adm">
                    <h2>CONSULTA PASSAGEIRA</h1>
                        <p class="p-2"></p>

                        <form action="" method="POST">
                            <input class="input-adm" type="text" name="consulta"
                                placeholder="PROCURAR POR: ID DO PASSAGEIRO">
                            <input type="submit" class="btn-adm" value="PROCURAR">
                            <p class="resu_consulta">
                                <style>
                                    .resu_consulta {
                                        width: 100%;
                                        margin: 5px;
                                        border-radius: 2px;
                                        box-shadow: var(--box-shadow);
                                        padding: 10px;
                                        color: var(--vinho);
                                        font-size: 18px;
                                        border: .1px solid var(--vinho);
                                        color: var(--vinho);
                                        height: 320px;
                                    }

                                    .box-adm{
                                        width:635px;
                                        margin:auto;
                                    }

                                    .btn-adm{
                                        cursor:pointer;
                                    }

                                </style>
                                <?php 
                                if(isset($_POST['consulta'])) {
                                     
                                $blabla = $_POST['consulta'];

                                $sql = "SELECT * FROM passageiro WHERE idPassageiro = $blabla";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                echo "ID: " . $row["idPassageiro"]."<br><br>"."NOME: ".$row['nomePassageiro'] ."<br><br>"."CPF: ".$row['cpfPassageiro'] ."<br><br>"."TELEFONE: ".$row['telefonePassageiro'] ."<br><br>"."E-MAIL: ".$row['emailPassageiro'] ."<br><br>"."STATUS: ".$row['estatusPassageiro'];
                                }
                                } else {
                                    echo "<p class='resu_consulta' style='color:red;'>NÃO FOI ENCONTRADO NENHUMA PASSAGEIRA COM ESSE ID</p>";
                                }
                                $conn->close(); 

                                }
                            ?>
                            </p>
                            <input type="" class="btn-adm" value="APAGAR USUARIA " style="width: 100%; padding: 17px; text-align:center;">
                            <input type="" class="btn-adm" value="SALVAR ALTERAÇÕES" style="width: 100%; padding: 17px; text-align:center;">
                        </form>

            <!-- <div class="col">
                <div class="box-adm">
                    <h2>CONSULTA MOTORISTA</h1>
                        <p class="p-2"></p>
                        <input class="input-adm" type="text"
                            placeholder=" PROCURAR POR: CPF, NOME, TELEFONE, CRLV, CNH">
                        <input type="submit" class="btn-adm" value="PROCURAR">
                        <input type="text" disabled class="input-adm"><i class="fa-solid fa-pen-to-square"></i><i
                            class="fa-solid fa-delete-left"></i>
                        <input type="text" disabled class="input-adm"><i class="fa-solid fa-pen-to-square"></i><i
                            class="fa-solid fa-delete-left"></i>
                        <input type="text" disabled class="input-adm"><i class="fa-solid fa-pen-to-square"></i><i
                            class="fa-solid fa-delete-left"></i>
                        <input type="text" disabled class="input-adm"><i class="fa-solid fa-pen-to-square"></i><i
                            class="fa-solid fa-delete-left"></i>
                        <input type="text" disabled class="input-adm"><i class="fa-solid fa-pen-to-square"></i><i
                            class="fa-solid fa-delete-left"></i>
                        <p class="p-2"></p>
                        <input type="submit" class="btn-adm" value="APAGAR USUARIA "
                            style="width: 100%; padding: 17px;">
                        <input type="submit" class="btn-adm" value="SALVAR ALTERAÇÕES "
                            style="width: 100%; padding: 17px;">
                </div>
            </div> -->
        </div>
    </div>
    </form>

        <!-- Button trigger modal -->
        <p class="p-4"></p>
<div class="container text-center" style="width: 550px;">
    <button type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#exampleModal">
        CADASTRAR ADMINISTRADOR
      </button>
</div>
<?php

include_once("conexao.php");

if(isset($_POST['consultaemail'])) {
$consultanome = $_POST['consultanome'];
$consultaemail = $_POST['consultaemail'];
$consultacpf = $_POST['consultacpf'];
$consultasenha = password_hash ($_POST['consultasenha'], PASSWORD_DEFAULT);
$result_usuario = "INSERT INTO `adm` (`idAdm`, `nomeAdm`, `emailAdm`, `cpfAdm`, `senhaAdm`) VALUES (NULL, '$consultanome', '$consultaemail', '$consultacpf', '$consultasenha');";
$resultado_usuario = mysqli_query($conn, $result_usuario);
if (mysqli_insert_id($conn)){
echo "<div style='margin:auto; width:300px;'><strong><p style='color:green; font-size:16px; text-align:center; margin:3px;'>CADASTRO FEITO COM SUCESSO!</p><strong></div>";
    
}else{
    header("Location: adm.php");
}
}


            ?>

    <script src="js/script.js"></script>

</body>

                            </html>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>

  
  <!-- Modal -->

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <p class="p-5"></p>
    <p class="p-5"></p>
    <p class="p-5"></p>
    <div class="modal-dialog">
      <div class="modal-content" style="border-radius:10px; padding:15px;">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel" style="color: var(--vinho);">Cadastrar ADM</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" method="post">
            <input class="input-adm" type="text" style="width: 97%;" name="consultanome" required maxlength="50" placeholder="Nome">
            <input class="input-adm" type="text" style="width: 97%;" name="consultaemail" required maxlength="100" placeholder="E-mail">
            <input class="input-adm" type="text" style="width: 97%;" name="consultacpf" required maxlength="11" placeholder="CPF">
            <input class="input-adm" type="text" style="width: 97%;" name="consultasenha" required maxlength="30" placeholder="Senha">
            <input type="submit" class="btn-adm" style="width: 97%;">
            
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" style="margin-right: 11px;" class="btn-adm" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>