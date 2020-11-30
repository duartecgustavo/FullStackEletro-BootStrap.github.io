<?php

session_start();

$info = $_GET['info'];
$info2 = $_POST['nome'];

echo $info; 
echo $info2; 

// if ($id == $_SESSION['idusuario']) {

//     $conn = mysqli_connect("localhost", "root", "", "fseletro-v2");

//     $result = $conn->query("DELETE FROM usuarios WHERE idusuario = $id");

//     if ($result == true) {
//         session_destroy();

//         echo "
//             <script>
//                 alert('Conta excluída com sucesso!')
//                 window.location.href = '../index.html'
//             </script>
//             ";
//     } else {
//         echo "
//                 <script>
//                     alert('Não foi possível exluir a conta!')
//                     window.location.href = '../perfilUsuario.php'
//                 </script>
//             ";
//     }
// } else {

//     echo "
//                 <script>
//                     alert('Não foi possível exluir a conta!')
//                     window.location.href = '../perfilUsuario.php'
//                 </script>
//             ";
// }