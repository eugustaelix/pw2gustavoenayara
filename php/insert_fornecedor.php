<?php
include_once ('config.php');

$Nome = $_POST['nm_fornecedor'];
$Contato = $_POST['nm_contato'];
$Email = $_POST['nm_email'];
$Telefone = $_POST['nr_telefone'];
$Endereco = $_POST['nm_endereco'];
$Numero = $_POST['nr_endereco'];

$insert_fornecedor = " INSERT INTO tb_fornecedor
values (null,'$Nome', '$Contato', '$Email', '$Telefone', '$Endereco', '$Numero')";

$resultado = $conexao->query($insert_fornecedor);

header('Location: ../cadFornecedor.html');
?>