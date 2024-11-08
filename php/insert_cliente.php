<?php
include_once ('config.php');

$Nome = $_POST['nm_cliente'];
$Sobrenome = $_POST['nm_sobrenome'];
$Email = $_POST['nm_email'];
$Telefone = $_POST['nr_telefone'];
$Endereco = $_POST['nm_endereco'];
$Numero = $_POST['nr_endereco'];

$insert_cliente = " INSERT INTO tb_cliente
values (null,'$Nome', '$Sobrenome', '$Email', '$Telefone', '$Endereco', '$Numero')";

$resultado = $conexao->query($insert_cliente);

header('Location: ../cadCliente.html');

?>