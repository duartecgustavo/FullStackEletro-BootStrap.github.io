<?php

session_start();

$id = $_GET['id'];

if ($id == $_SESSION['idusuario']) {

    $conn = mysqli_connect("localhost", "root", "", "fseletro_v2");

    $result = $conn->query("DELETE FROM usuarios WHERE idusuario = $id");

    if ($result == true) {
        session_destroy();

        echo "
            <script>
                alert('Conta excluída com sucesso!')
                window.location.href = '../index.html'
            </script>
            ";
    } else {
        echo "
                <script>
                    alert('Não foi possível exluir a conta!')
                    window.location.href = '../perfilUsuario.php'
                </script>
            ";
    }
} else {

    echo "
                <script>
                    alert('Não foi possível exluir a conta!')
                    window.location.href = '../perfilUsuario.php'
                </script>
            ";
}