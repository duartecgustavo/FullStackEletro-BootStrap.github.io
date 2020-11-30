<?php

session_start();
// DECLARAÇÃO DE VARIAVEIS

$email = $_POST['email'];
$senha = $_POST['senha'];

// Validando informações

if (strlen($email) > 3 && strlen($senha) > 3) {
    // Realizando conexão com banco
    $conn = mysqli_connect("localhost", "root", "", "fseletro-v2");

    // Execução da instrução SQL e validando e-mail e senha
    $resultado_consulta = $conn->query("SELECT * from usuarios where email = '$email' AND senha = '$senha'");
    $usuarios = mysqli_fetch_row($resultado_consulta);

    if ($usuarios) {

        echo '<pre>';
        print_r($usuarios);
        echo '</pre> <hr />';

        $_SESSION['nome'] = $usuarios[1];
        $_SESSION['email'] = $usuarios[2];

        header('Location: http://localhost/FullStackEletro-v2/homeLogado.php');
        "<script>
            alert('Logado')

        </script>";
        // location.href='http://localhost/fullstackeletro.2.0/home.php'
    } else {
        // header('Location: homeLogado.html');
        echo
            "<script>
            alert('E-mail ou senha invalidos!')
            location.href=' http://localhost/FullStackEletro-v2/index.html'
        </script>";
    }
} else {
    echo
        "<script>
        alert('E-mail ou senha invalidos!')
        location.href=' http://localhost/FullStackEletro-v2/index.html'
    </script>";
}
