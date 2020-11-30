<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Gustavo Castanho Duarte">
    <meta name="palavra chave" content="html5, tecnologia">

    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="./CSS/bootstrap/global.css">
    <title>Seu Perfil</title>

    <style>
        @media(max-width: 993px) {
            .desktop {
                display: none !important;
            }
        }

        @media(max-width: 993px) {
            .phone-min {
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

<body style="background-color: #777777; background-image: url('./imgs/bg\ pattern');">

    <script>
        function confirmar() {
            let confirmacao = confirm("Você realmente deseja excluir a conta?");

            if (confirmacao == true) {
                location.href = "./conexao_BD/removerConta.php?id=" + <?php echo $_SESSION["idusuario"] ?>
            }
        }

        function alterar(campo) {
            let confirmacao = confirm(`Você realmente deseja alterar a informação, ${campo}?`);

            if (confirmacao == true) {
                location.href = `./conexao_BD/alterarInfo.php?info=${campo}`
            }
        }
    </script>

    <!-- MENU DESKTOP -->
    <nav class="desktop nav d-flex align-items-center bg-danger" style="height: 12vh; box-shadow: 2px 2px 10px black; ">

        <a class="col-lg-3 d-flex align-items-center justify-content-left" href="index.html" style="height: 100% !important;  ">
            <img class="col-lg-5 p-2" src="./imgs/svgs/logoSVG.svg" style="width: 150px; height: 100% !important;" alt="">
        </a>

        <div class="d-flex col-lg-9">

            <div class="d-flex justify-content-end col-lg-10">
                <a class="nav-link2 font-weight-bold text-white text-center col-lg-2" style="font-size: 20px; color: black !important; background-color: rgba(228, 220, 220, 0.651); border-radius: 20px;" href="homeLogado.php">Home</a>
                <a class="nav-link2 font-weight-bold text-white text-center col-lg-2 bg-danger" style="font-size: 20px; color: black !important;" href="produtosLogado.php">Produtos</a>
                <a class="nav-link2 font-weight-bold text-white text-center col-lg-2 bg-danger" style="font-size: 20px; color: black !important;" href="lojasLogado.php">Lojas</a>
                <a class="nav-link2 font-weight-bold text-white text-center col-lg-2 bg-danger" style="font-size: 20px; color: black !important;" href="contatoLogado.php">Contatos</a>
            </div>
            <div class="d-flex justify-content-center align-items-center col-lg-2 mt-2">
                <h5 class="col-lg-7 d-flex justify-content-end">Oi, <?php echo $_SESSION['nome'] ?></h5>
                <div class="dropdown" style="">
                    <button class="btn text-white rounded-circle dropdown-toggle mb-1 p-auto" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #292929; ">
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
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

    <div class="desktop" style="height: 23vh;"></div>
    <main class="d-flex justify-content-center align-items-center">
        <div class="row">

            <div class="col-lg-6">
                <div class="col-lg-12 py-2" style="background-color: hsla(0, 0%, 100%, 0.5); border-radius:20px;">

                    <div class="input-group my-3 col-lg-12 d-flex align-items-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nome: <?php echo $_SESSION["nome"] ?></span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" name="nome" aria-describedby="inputGroup-sizing-sm">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" onclick="alterar('nome')" style="border-radius: 5px">Alterar</button>
                        </div>
                    </div>

                    <div class="input-group my-3 col-lg-12 d-flex align-items-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Email: <?php echo $_SESSION["email"] ?></span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button" onclick="alterar('email')" style="border-radius: 5px">Alterar</button>
                        </div>
                    </div>

                    <div class="input-group my-3 col-lg-12 d-flex align-items-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text">CEP: <?php echo $_SESSION["cep"] ?></span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button" onclick="alterar('cep')" style="border-radius: 5px">Alterar</button>
                        </div>
                    </div>

                    <div class="input-group my-3 col-lg-12 d-flex align-items-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Cidade: <?php echo $_SESSION["cidade"] ?></span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button" onclick="alterar('cidade')" style="border-radius: 5px">Alterar</button>
                        </div>
                    </div>
                    <div class="input-group my-3 col-lg-12 d-flex align-items-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Id: <?php echo $_SESSION["idusuario"] ?></span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button" onclick="alterar('idusuario')" style="border-radius: 5px">Alterar</button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-6 my-3 p-5 d-flex align-items-center justify-content-center" style="background-color:rgb(37, 37, 37, 0.5)">

                <div class="">

                    <div class=" d-block alert alert-danger" role="alert">
                        Cuidado! ao remover a conta, não poderá ser recuperada!
                    </div>

                    <button class="d-block btn btn-danger" onclick="confirmar()" style="width: 100%;">Remover a conta</button>

                </div>
            </div>

        </div>

    </main>
    <div class="desktop" style="height: 235px;"></div>


    <!-- /Body -->
    <footer class="container-fluid font-weight-bold" style="height: 10vh; font-size: 110%; background-color: rgb(37, 37, 37); bottom:0; position: relative;">
        <div class="container text-center d-flex align-items-center justify-content-center" style="height: 100%; font-family: 'Rubik', sans-serif; color: rgb(224, 224, 224);">
            ©2020 - Recode Pró - Full-Stack-Eletro
        </div>
    </footer>
    <!-- FOOTER -->

    <script src="./JS/eventos.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>