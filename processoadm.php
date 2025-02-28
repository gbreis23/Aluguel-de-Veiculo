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
    header("Location: adm.php");
}else{
    header("Location: adm.php");
}
}


// $nomesobrenome = $_POST['nomesobrenome'];
// $email = $_POST['email'];
// $telefone = $_POST['telefone'];
// $cpf = $_POST['cpf'];
// $estatus = "cliente";
// $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

// $result_usuario = "INSERT INTO `passageiro` (`idPassageiro`, `nomePassageiro`, `cpfPassageiro`, `telefonePassageiro`, `emailPassageiro`,`estatusPassageiro`,`senhaPassageiro`) VALUES (NULL, '$nomesobrenome', '$cpf', '$telefone', '$email','$estatus','$senha')";
// $resultado_usuario = mysqli_query($conn, $result_usuario);

// if (mysqli_insert_id($conn)){
//     header("Location: index.php");
// }else{
//     header("Location: index.php");
// }

?>