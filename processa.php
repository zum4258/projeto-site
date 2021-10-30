<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO usuarios (nome, email, telefone) VALUES ('$nome', '$email', NOW () )";
 $resultado_usuario = mysqli_query ($result_usuario);

if (mysqli_insert_id($conn)) (
    header ("location: index.php");
}else{  
    header ("location: index.php");
}


?> 