<?php
session_start();
require_once('./conexao_BD/conexao_prod.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Gustavo Castanho Duarte">
    <meta name="palavra chave" content="html5, loja_virtual, produtos">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/bootstrap/bootstrap.css">
    <title>Full-Stack-Eletro</title>

    <style>
        @media(max-width: 993px) {
            .desktop {
                display: none !important;
            }
        }

        @media(min-width: 993px) {
            .phone {
                display: none !important;
            }
        }
    </style>


</head>

<body style="background-color: #777777; background-image: url('./imgs/bg-pattern.png');">
    <!--  -->

    <!-- MENU DESKTOP -->
    <nav class="desktop nav d-flex align-items-center bg-danger" style="height: 12vh; box-shadow: 2px 2px 10px black; ">

        <a class="col-lg-3 d-flex align-items-center justify-content-left" href="index.html" style="height: 100% !important;  ">
            <img class="col-lg-5 p-2" src="./imgs/svgs/logoSVG.svg" style="width: 150px; height: 100% !important;" alt="">
        </a>

        <div class="d-flex col-lg-9">

            <div class="d-flex justify-content-end col-lg-10">
                <a class="nav-link2 font-weight-bold text-white text-center col-lg-2 bg-danger" style="font-size: 20px; color: black !important;" href="homeLogado.php">Home</a>
                <a class="nav-link2 font-weight-bold text-white text-center col-lg-2" style="font-size: 20px; color: black !important; background-color: rgba(228, 220, 220, 0.651); border-radius: 20px;" href="produtosLogado.php">Produtos</a>
                <a class="nav-link2 font-weight-bold text-white text-center col-lg-2 bg-danger" style="font-size: 20px; color: black !important;" href="lojasLogado.php">Lojas</a>
                <a class="nav-link2 font-weight-bold text-white text-center col-lg-2 bg-danger" style="font-size: 20px; color: black !important;" href="contatoLogado.php">Contatos</a>
            </div>
            <div class="d-flex justify-content-center align-items-center col-lg-2">
                <h5 class="col-lg-7 d-flex justify-content-end">Oi, <?php echo $_SESSION['nome'] ?></h5>
<button class="btn text-white rounded-circle dropdown-toggle mb-1 p-auto" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #292929; box-shadow: 3px 3px 5px black;">
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" style="">
                    <a class="dropdown-item py-2" href="perfilUsuario.php">Meu perfil</a>
                    <a class="dropdown-item py-2" href="./conexao_BD/sair.php">Sair</a>
                </div>
            </div>
        </div>

        </div>

    </nav>
    <!-- /MENU DESKTOP -->

    <!-- MENU DEVICE -->
    <nav class="phone nav row align-items-center bg-danger" style="height: 15vh; box-shadow: 2px 2px 10px black;">

        <a class="col-6 col-sm-6 col-md-6 col-lg-6 d-flex align-items-center justify-content-left" href="index.html" style="height: 100% !important;">
            <img class="col-lg-5 p-2" src="./imgs/svgs/logoSVG.svg" style="width: 150px; height: 100% !important;" alt="">
        </a>


        <button class="navbar-toggler col-5 col-sm-5 col-md-5 col-lg-5 d-flex align-items-center justify-content-end bg-danger pr-4" type="button" style="height: 100%;">
            <div class="dropdown">
                <a class="btn navbar-toggler-icon" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="mx-auto my-auto" src="./imgs/svgs/seta-para-baixo-do-angulo.svg" alt="" style="width: 20px;">
                </a>

                <div class="dropdown-menu dropdown-menu-right" style="width: 80vw;" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item p-3 dropBar" style="background-color:#DB465A !important; font-weight: bold;" href="index.html">HOME</a>
                    <a class="dropdown-item p-3 dropBar" style="background-color:#E17A84 !important; font-weight: bold;" href="lojas.html">LOJAS</a>
                    <a class="dropdown-item p-3 dropBar" style="background-color:#DB465A !important; font-weight: bold;" href="contato.html">CONTATO</a>
                </div>
            </div>
        </button>
    </nav>
    <!-- /MENU DEVICE -->




    <!-- MENU PRODUTOS -->
    <nav class="desktop container d-flex align-items-center justify-content-center mt-4 shadow" style="height: 8vh; border-radius:10px; background-color: #252525;">

        <div class="row">
            <a class="font-weight-bold text-white text-center mx-3" style="font-size: 20px; color: #E0E0E0;" onclick="exibirTodos('Todos')">TODOS</a>
            <a class="font-weight-bold text-white text-center mx-3" style="font-size: 20px; color: #E0E0E0;" onclick="exibirCategoria('Geladeira')">GELADEIRAS</a>
            <a class="font-weight-bold text-white text-center mx-3" style="font-size: 20px; color: #E0E0E0;" onclick="exibirCategoria('Fogão')">FOGÕES</a>
            <a class="font-weight-bold text-white text-center mx-3" style="font-size: 20px; color: #E0E0E0;" onclick="exibirCategoria('Máquina de Lavar')">LAVA-ROUPA</a>
            <a class="font-weight-bold text-white text-center mx-3" style="font-size: 20px; color: #E0E0E0;" onclick="exibirCategoria('Micro-ondas')">MICROONDAS</a>
            <a class="font-weight-bold text-white text-center mx-3" style="font-size: 20px; color: #E0E0E0;" onclick="exibirCategoria('Freezer')">FREEZER</a>
            <a class="font-weight-bold text-white text-center mx-3" style="font-size: 20px; color: #E0E0E0;">EXAUSTORES</a>
        </div>
    </nav>
    <!-- /MENU PRODUTOS -->

    <!-- MENU PRODUTOS DEVICE -->
    <nav class="phone row align-items-center justify-content-center mt-4 mx-5" style="height: 8vh; border-radius: 20px; border-radius:10px; background-color: #252525;">

        <h3 class="col-6 col-sm-6 col-md-6 col-lg-6 d-flex align-items-center justify-content-left ml-3" style="color: #E0E0E0; font-weight:bold;">
            PRODUTOS
        </h3>


        <button class="navbar-toggler col-5 col-sm-5 col-md-5 col-lg-5 d-flex align-items-center justify-content-end pr-4" type="button" style="height: 100%;">
            <div class="dropdown">
                <a class="btn navbar-toggler-icon" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="mx-auto my-auto" src="./imgs/svgs/seta-para-baixo-do-angulo.svg" alt="" style="width: 20px;">
                </a>

                <div class="dropdown-menu dropdown-menu-right" style="width: 80vw; border-radius: 0px 0px 10px 10px;" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item p-3 dropBar" style="font-weight: bold;" onclick="exibirTodos('Todos')">TODOS</a>
                    <a class="dropdown-item p-3 dropBar" style="font-weight: bold;" onclick="exibirCategoria('Geladeira')">GELADEIRAS</a>
                    <a class="dropdown-item p-3 dropBar" style="font-weight: bold;" onclick="exibirCategoria('Fogão')">FOGÕES</a>
                    <a class="dropdown-item p-3 dropBar" style="font-weight: bold;" onclick="exibirCategoria('Máquina de Lavar')">LAVA-ROUPA</a>
                    <a class="dropdown-item p-3 dropBar" style="font-weight: bold;" onclick="exibirCategoria('Micro-ondas')">MICROONDAS</a>
                    <a class="dropdown-item p-3 dropBar" style="font-weight: bold;" onclick="exibirCategoria('Freezer')">FREEZER</a>
                    <a class="dropdown-item p-3 dropBar" style="font-weight: bold;">EXAUSTORES</a>
                </div>
            </div>
        </button>
    </nav>
    <!-- /MENU PRODUTOS DEVICE -->

    <div class="container-fluid">

        <!-- PRODUTOS -->
        <div class="row d-flex justify-content-center text-center m-3">
            <?php
            $sql = "select * from produtos";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($rows = $result->fetch_assoc()) {
            ?>

                    <div class="prod col-sm-10 col-md-4 col-lg-3 col-xl-3 mx-4 my-2" id="<?php echo $rows["categoria"]; ?>" style="background-color: white; box-shadow: 3px 3px 3px black;">

                        <img class="m-3 img-fluid" src="./imgs/<?php echo $rows["imagem"]; ?>" alt="<?php echo $rows["categoria"]; ?>" style="width: 200px; height: 170px;">
                        <p class="text-muted"><?php echo $rows["descricao"]; ?></p>
                        <hr>
                        <small class="text-muted"><del>R$<?php echo $rows["preco"]; ?></del></small>
                        <p class="" style="font-size: 1.4rem; color:#DC3545;"><strong>R$<?php echo $rows["preco"]; ?></strong></p>

                    </div>

            <?php
                }
            } else {
                echo "Não há produtos cadastrados";
            }
            ?>
        </div>
    </div>



    <!-- FOOTER -->
    <footer class="container-fluid font-weight-bold" style="height: 10vh; font-size: 110%; background-color: rgb(37, 37, 37);">
        <div class="container text-center d-flex align-items-center justify-content-center" style="height: 100%; font-family: 'Rubik', sans-serif; color: rgb(224, 224, 224);">
            ©2020 - Recode Pró - Full-Stack-Eletro
        </div>
    </footer>

    <script>

    </script>

    <script src="./JS/eventos.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>