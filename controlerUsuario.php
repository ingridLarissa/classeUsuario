<?php


$nome = $_POST["nome"];
$email = $_POST["email"];
$login = $_POST["login"];
$senha = $_POST["senha"];

/*$nome = "ingrid" ;
$email = "ingrid.oliveira.dias@escola.pr.gov.br" ;
$login = "ingrid" ;
$senha = "85";*/

include("classeUsuario.php");

$usuario = new Usuario();

$usuario->addusuario($nome, $email, $login, $senha);

print_r($usuario);
?>
