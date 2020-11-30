<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Gustavo Castanho Duarte">
    <meta name="palavra chave" content="html5, loja_virtual, lojas">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <title>Full-Stack-Eletro</title>

    <link rel="stylesheet" href="./CSS/bootstrap/bootstrap.css">

    <style>

        @media(max-width: 993px){
            .desktop{
                display: none !important;
            }
        }
    
        @media(min-width: 993px){
            .phone {
                display: none !important;
            }               
        }
    </style>

</head>
<body style="background-color: rgb(240, 240, 240);">


    <!-- MENU DESKTOP -->
    <nav class="desktop nav d-flex align-items-center bg-danger" style="height: 12vh; box-shadow: 2px 2px 10px black; ">

        <a class="col-lg-3 d-flex align-items-center justify-content-left" href="index.html" style="height: 100% !important;  ">
            <img class="col-lg-5 p-2" src="./imgs/svgs/logoSVG.svg" style="width: 150px; height: 100% !important;" alt="">
        </a>

        <div class="d-flex col-lg-9">

            <div class="d-flex justify-content-end col-lg-10">
                <a class="nav-link2 font-weight-bold text-white text-center col-lg-2" style="font-size: 20px; color: black !important; background-color: rgba(228, 220, 220, 0.651); border-radius: 20px;" href="index.html">Home</a>
                <a class="nav-link2 font-weight-bold text-white text-center col-lg-2 bg-danger" style="font-size: 20px; color: black !important;" href="produtos.php">Produtos</a>
                <a class="nav-link2 font-weight-bold text-white text-center col-lg-2 bg-danger" style="font-size: 20px; color: black !important;" href="lojas.html">Lojas</a>
                <a class="nav-link2 font-weight-bold text-white text-center col-lg-2 bg-danger" style="font-size: 20px; color: black !important;" href="contato.html">Contatos</a>
            </div>
            <div class="d-flex justify-content-center align-items-center col-lg-2">
                <h5 class="col-lg-7 d-flex justify-content-end"><?php echo $_SESSION['nome'] ?></h5>
                <div class="dropdown">
                    <button class="btn text-white rounded-circle dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </button>
                    <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item py-2" href="perfil.php">Meu perfil</a>
                        <a class="dropdown-item py-2" href="./conexao_BD/sair.php">Sair</a>
                    </div>
                </div>
            </div>

        </div>

    </nav>
    <!-- /MENU DESKTOP -->

    <!-- MENU DEVICE -->
    <nav class="phone nav row align-items-center bg-danger" style="height: 15vh; box-shadow: 2px 2px 10px black;">

        <a class="col-6 col-sm-6 col-md-6 col-lg-6 d-flex align-items-center justify-content-left" 
            href="index.html"
            style="height: 100% !important;">
            <img class="col-lg-5 p-2" src="./imgs/svgs/logoSVG.svg" 
            style="width: 150px; height: 100% !important;" alt="">
        </a>


        <button class="navbar-toggler col-5 col-sm-5 col-md-5 col-lg-5 d-flex align-items-center justify-content-end bg-danger pr-4" type="button" style="height: 100%;" >
            <div class="dropdown">
                <a class="btn navbar-toggler-icon" 
                    href="#" 
                    
                    role="button" 
                    id="dropdownMenuLink" 
                    data-toggle="dropdown" 
                    aria-haspopup="true" 
                    aria-expanded="false">
                    <img class="mx-auto my-auto" src="./imgs/svgs/seta-para-baixo-do-angulo.svg" alt="" style="width: 20px;">
                    </a>
            
                <div class="dropdown-menu dropdown-menu-right"  style="width: 80vw;" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item p-3 dropBar" style="background-color:#DB465A !important; font-weight: bold;" href="index.html">HOME</a>
                    <a class="dropdown-item p-3 dropBar" style="background-color:#E17A84 !important; font-weight: bold;" href="produtos.php">PRODUTOS</a>
                    <a class="dropdown-item p-3 dropBar" style="background-color:#DB465A !important; font-weight: bold;" href="contato.html">CONTATO</a>
                </div>
            </div>
        </button>
    </nav>

    <div class="desktop container" style="height: 151px;"></div>

    <div class="container-fluid d-flex">

        <div class="row container-fluid d-flex justify-content-center my-auto">

            <div class="col-12 col-sm-12 col-lg-3 my-5 mx-4 p-0" style="background-color: #ffffff; box-shadow: 4px 4px 2px black;">
                <div> 
                    <h3 class="text-center m-2" style="color: #DB465A;">SÃO PAULO</h3>
                    <p class="text-center m-1"  style="color: #252525;">Avenida Paulista, 550 - Jardim Paulista</p>
                    <p class="text-center mb-2" style="color: #252525;">(11)99999-9999</p>
                </div>
                <div>
     
                    <img class="img-fluid" src="./imgs/sp.jpg" alt="">
                </div>
            </div>


            <div class="col-12 col-sm-12 col-lg-3 my-5 mx-4 p-0" style="background-color: #ffffff; box-shadow: 4px 4px 2px black;">
                <div>
                    <h3 class="text-center m-2" style="color: #DB465A;">RIO DE JANEIRO</h3>
                    <p class="text-center m-1"  style="color: #252525">Avenida Leblon, 777 - Asa Delta</p>
                    <p class="text-center mb-2" style="color: #252525">(25)66666-6666</p>
                </div>
                <div>
                    <img class="img-fluid" src="./imgs/Rio.jpg" alt="">
                </div>
            </div>
            
            <div class="col-12 col-sm-12 col-lg-3 my-5 mx-4 p-0" style="background-color:#ffffff; box-shadow: 4px 4px 2px black;">
                <div>
                    <h3 class="text-center m-2" style="color: #DB465A;">SALVADOR</h3>
                    <p class="text-center m-1"  style="color: #252525">Rua Larica, 1882 - Jardim America</p>
                    <p class="text-center mb-2" style="color: #252525">(12)88888-8888</p>
                </div>
                <div>
                    <img class="img-fluid" src="./imgs/salvador.jpg" alt="">    
                </div>
            </div>  

        </div>

    </div>

    <div class="desktop container" style="height: 152px;"></div>

    <!-- FOOTER -->
    <footer class="container-fluid font-weight-bold" style="height: 10vh; font-size: 110%; background-color: rgb(37, 37, 37);">
        <div class="container text-center d-flex align-items-center justify-content-center" style="height: 100%; font-family: 'Rubik', sans-serif; color: rgb(224, 224, 224);">
            ©2020 - Recode Pró - Full-Stack-Eletro
        </div>
    </footer>

    <script src="./JS/eventos.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>