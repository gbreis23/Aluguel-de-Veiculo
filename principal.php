<?php

include('protect.php');

?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> -->

<!-- <style>
*{
    font-family: 'Poppins', sans-serif;
    font-size:45px;
}

    .conteiner{
        width:100%;
        margin:auto;
        text-align: center;
        padding: 20px;
        border: 1px solid black;
        margin-top: 200px;
        font-weight: bolder;
    }

    .conteiner p{
    }
    .conteiner span{
        color: green;
    }

</style>

    <div class="conteiner">
        <h1>Bem vinda, <span> < ?php echo $_SESSION['nomePassageiro'].'<br><br> ID: '.$_SESSION['idPassageiro']; ?></span></h1>
        <p>
            <a href="logout.php">sair</a>
        </p>
    </div>
</body>
</html> -->

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
    <link rel="stylesheet" href="css/responsivo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <header class="header">

        <a href="index.php" class="logo"><img src="imagens/favicon.png" width="50px" alt=""></a>

        <nav class="navbar">
            <a href="viagens.php">VIAGENS</a>
            <a href="sobre.php">SOBRE</a>
            <a href="ajuda.php">AJUDA</a>
        </nav>

        <div class="icons">
            <strong><span style="font-size:18px; color:var(--vinho);"><?php echo $_SESSION['nomePassageiro'];?></span><span><a style="position:absolute; text-decoration: none; font-size:14px; color:red; margin:5px 0px 0px 60px; cursor:pointer; opacity:75%;" href="logout.php">SAIR</a></span></strong>
            <div class="fas fa-bars" id="menu-btn"></div>
            <span id="span-icon"
                style="font-size: 16px; color: var(--vinho); font-weight: bolder; text-transform: uppercase;"></span>
        </div>
        <form action="" method="POST" id="form" class="login-form">

            <h3>Entrar</h3>
            <input type="email" placeholder="Email" id="user" class="box" name="email">
            <input type="password" placeholder="Senha" class="box" name="senha">
            <p>Esqueceu sua senha? <a href="esqueceusenha.php">clique aqui</a></p>
            <p>Não tem uma conta? <a href="cadastro.php">crie agora</a></p>
            <input type="submit" value="Entrar" class="btn1">

            <?php

// if(isset($_POST['email']) || isset($_POST['senha'])){

//     if(strlen($_POST['email']) == 0){
//         echo "Preencha seu e-mail;";
//     } else if(strlen($_POST['senha']) == 0){
//         echo "Preencha sua senha";
//     } else {

//         $email = $conn -> real_escape_string($_POST['email']);
//         $senha = $conn -> real_escape_string($_POST['senha']);

//         $sql_code = "SELECT * FROM passageiro WHERE emailPassageiro = '$email' AND senhaPassageiro = '$senha'";
//         $sql_query = $conn->query($sql_code) or die("Falha na execução do codigo SQL: ". $conn->error);

//         $quantidade = $sql_query->num_rows;

//         if($quantidade == 1){

//             $usuario = $sql_query->fetch_assoc();

//             if(!isset($_SESSION)){
//                 session_start();
//             }

//             $_SESSION['idPassageiro'] = $usuario['idPassageiro'];
//             $_SESSION['nomePassageiro'] = $usuario['nomePassageiro'];

//             header("Location: principal.php");

//         }else{
//             echo "Falha ao logar! e-mail ou senha incorretos";
//         }

//     }


// }

//             ?>

        </form>
    </header>

    <p style="margin-top: 80px;"></p>

    <div class="heading2" style="background:url(imagens/banner.jpg) no-repeat">
        <span>ㅤ</span>
        <div class="viagem">
            <h1>Faça uma viagem</h1>
            <h1>nesse momento<i style="margin-left: 10px;" class="fa-solid fa-car"></i></h1>
            <p class="p-3"></p>
            <input type="text" class="viajar" name="cep" onblur="pesquisacep(this.value);" maxlength="9" id="partida"
                size="10" placeholder="Informe local de partida ou CEP">
            <input type="text" class="viajar" name="cep" onblur="pesquisacep(this.value);" maxlength="9" id="partida"
                size="10" placeholder="Informe local de destino ou CEP">
            <p class="p-1"></p>
            <input type="button" value="Chamar Motorista" onclick="spinnerr()" class="btn1">
            <input type="button" value="Agendar Viagem" onclick="spinnerr()" class="btn2">
        </div>

    </div>

    <p class="p-5"></p>
    <p class="p-5"></p>

    <section>

        <div class="servicos row">
            <div class="a1 col">
                <img src="https://static.wixstatic.com/media/7e8b18_68b3530a13024cc99a414ca4a70f596b~mv2.png/v1/fill/w_872,h_480,fp_0.45_0.37,q_90,usm_0.66_1.00_0.01,enc_auto/7e8b18_68b3530a13024cc99a414ca4a70f596b~mv2.png"
                    alt="">
                <p class="pneu1">
                    A MUZE disponibiliza carros equipados com cadeirinhas. Antes de solicitar a viagem, a
                    passageira precisará acionar a corrida MUZE baby para este serviço.</p>
            </div>

            <div class="a2 col">
                <img src="https://static.wixstatic.com/media/7e8b18_dea16b7c5b7b46eea88a304e734cffc4~mv2.jpg/v1/fill/w_872,h_480,fp_0.50_0.50,q_85,usm_0.66_1.00_0.01,enc_auto/7e8b18_dea16b7c5b7b46eea88a304e734cffc4~mv2.jpg"
                    alt="">
                <p class="pneu">A MUZE vem inovando com carros espaçosos com tablets para
                    suas passageiras e bebês se entreterem nas viagens. Esse serviço está disponível na plataforma
                    de corridas como MUZE Premium.</p>
            </div>
        </div>

        <p class="p-5"></p>
        <p class="p-2"></p>

        <div class="container text-center">
            <div class="row">

                <div class="col-5">
                    <img src="https://images.pexels.com/photos/6169866/pexels-photo-6169866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        class="img" alt="">
                </div>

                <div class="col-1"></div>

                <div class="col-6 texto">
                    <p class="p-5"></p>
                    <p class="p-1"></p>
                    <h1>Venha fazer parte da MUZE!</h1>
                    <p>MUZE deseja passar segurança e confiança
                        a nossas passageiras, pensando nisso apenas, apenas mulheres podem ser motoristas
                        no MUZE. Se inscreva e faça parte do nosso mundo!</p>
                    <a href="cadastromotorista.html" class="saiba">SER MOTORISTA</a>
                </div>
            </div>
        </div>



    </section>

    <p class="p-5"></p>
    <p class="p-5"></p>


    <footer class="footer">

        <div class="box row">
            <div class="col-4"></div>
            <div class="col contato">

                <h1>Entre em contato</h1>
                <p>R . Tonelero, 271 - Copacabana</p>
                <p>muzecarros@gmail.com</p>
                <p>Tel: (21) 3456-7890 </p>

            </div>
            <div class="col">
                <p class="p-4"></p>
                <div class="icon">
                    <a href="https://www.instagram.com/Muze_ni/" target="_blank"><i
                            class="fa-brands fa-instagram"></i></a>
                </div>
                <div class="icon">
                    <a href="https://www.tiktok.com/@muze_ni" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                </div>
                <div class="icon">
                    <a href="https://twitter.com/Muze_ni" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
            <div class="col-4"></div>

        </div>
    </footer>

    <script src="js/script.js"></script>

</body>

</html>