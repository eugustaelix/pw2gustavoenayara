<?php
include_once ('config.php');

$Nome = $_POST['nm_funcionario'];
$Sobrenome = $_POST['nm_sobrenome'];
$Nascimento = $_POST['dt_nascimento'];
$Cargo = $_POST['nm_cargo'];
$Salario = $_POST['vl_salario'];
$Admissao = $_POST['dt_admissao'];
$Senha = $_POST['nm_senha'];

$insert_funcionario = " INSERT INTO tb_funcionario
values (null,'$Nome', '$Sobrenome', '$Nascimento', '$Cargo', '$Salario', '$Admissao', '$Senha')";

$resultado = $conexao->query($insert_funcionario);

header('Location: ../cadFuncionario.html');

?>