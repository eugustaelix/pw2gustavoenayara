<?php
// Pegar os dados do formulário e armazená-los nas variáveis!
$id_usuario = $_POST['id'];
$senha_usuario = $_POST['senha'];

// Fazer a conexão com o banco de dados

include_once('config.php');

// Executar instrução select no banco de dados e puxar o primeiro registro e armazenar em $resultado
$select = "SELECT * FROM tb_funcionario WHERE id_funcionario = $id_usuario";
$query = $conexao->query($select);
$resultado = $query->fetch_assoc();

$id_usuario_banco = $resultado['id_funcionario'];
$senha_usuario_banco = $resultado['nm_senha'];

if ($id_usuario == $id_usuario_banco && $senha_usuario == $senha_usuario_banco) {
    session_start();
    $_SESSION['funcionario_nm'] = $resultado['nm_funcionario'];
    header('Location: ../inicio.php');
} else {
    echo "<script>alert('Usuário ou senha inválida!'); history.back() </script>";
}
?>