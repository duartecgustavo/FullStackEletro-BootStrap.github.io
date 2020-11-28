<?php

// DECLARAÇÃO DE VARIAVEIS

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nascimento = $_POST['nascimento'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];


// TRATANDO NASCIMENTO 

// separando yyyy, mm, ddd
list($ano, $mes, $dia) = explode('-', $nascimento);

// data atual
$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));

// Descobre a unix timestamp da data de nascimento do fulano
$nasc = mktime(0, 0, 0, $mes, $dia, $ano);

// cálculo
$idade = floor((((($hoje - $nasc) / 60) / 60) / 24) / 365.25);
//  echo "Idade: $idade Anos";

if (
    strlen($nome) > 3 && strlen($email) > 3 && strlen($senha) > 3 && strlen($cep) > 3
    && strlen($cidade) > 3 && strlen($nascimento) > 3 && $idade > 18
) {

    $conn = mysqli_connect("localhost", "root", "", "fseletro-v2");
    $sql = "INSERT INTO usuarios (nome, email, nascimento, senha, cep, cidade) values ('$nome', '$email', '$nascimento', '$senha', '$cep', '$cidade')";
    $conn->query($sql);

    // RETORNANDO A HOME
    echo "<script>
            alert('Cadastro efetuado!')
            window.location.href = 'http://localhost/FullStackEletro-v2/cadastro.html'
        </script>
        ";

    // NOME INVALIDO

} else if (strlen($nome) <= 4) {
    echo "<script>
    alert('Digite um nome válido!')
    window.location.href = 'http://localhost/FullStackEletro-v2/cadastro.html'
    </script>
    ";
} else if (strlen($email) <= 3) {

    echo "<script>
        alert('Digite um e-mail válido!')
        window.location.href = 'http://localhost/FullStackEletro-v2/cadastro.html'
        </script>
        ";

        // SENHA INVALIDA

} else if (strlen($senha) <= 3) {

    echo "<script>
            alert('Digite uma senha válida!')
            window.location.href = 'http://localhost/FullStackEletro-v2/cadastro.html'
        </script>
        ";

        // CEP INVALIDO

} else if (strlen($cep) <= 5) {

    echo "<script>
            alert('Digite um CEP valido!')
            window.location.href = 'http://localhost/FullStackEletro-v2/cadastro.html'
        </script>
        ";

        // CIDADE INVALIDA

} else if (strlen($cidade) <= 3) {

    echo "<script>
            alert('Digite uma cidade valida!')
            window.location.href = 'http://localhost/FullStackEletro-v2/cadastro.html'
        </script>
        ";

        // BAIRRO INVALIDO

} else if ($idade < 18) {

    echo "<script>
            alert('Você precisa ter 18 anos para se cadastrar.')
            window.location.href = 'http://localhost/FullStackEletro-v2/cadastro.html'
        </script>
        ";
}