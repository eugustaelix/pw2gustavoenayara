<?php
session_start();
if(isset($_SESSION['funcionario_nm']))
{
    $nome = $_SESSION['funcionario_nm'];
    echo "<label class=olausuario>".$nome.", sua presença faz a nossa loja soar melhor!</label>";
}
else {
    echo "<script>alert('Você não está logado!'); history.back() </script>";
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="imagex/png" href="icone.ico" />
    <link rel="stylesheet" href="styleInicio.css" />
    <title>Início</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rajdhani:wght@300;400;500;600;700&family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap"
        rel="stylesheet" />
</head>

<body>
    <div class="cabecalho">
        <a href="inicio.php" class="active" id="navinicio">Início</a>
        <a href="cadCliente.php" id="navcliente">Cliente</a>
        <a href="cadFuncionario.php" id="navfuncionario">Funcionário</a>
        <a href="cadFornecedor.php" id="navfornecedor">Fornecedor</a>
        <a href="cadCategoria.php" id="navcategoria">Categoria</a>
        <a href="cadLancamentos.php" id="navlancamentos">Lançamentos</a>
        <a href="php/logout.php" id="navsair">Sair</a>
    </div>
    <!--<img src="imgInicio/menina_violino.png" class="menina_violino" />!-->
    <img src="imgInicio/forma_abstrata.png" class="forma_abstrata" />
    <img src="imgInicio/musicos.png" class="musicos"/>
    <div class="desfoque"></div>
    <div class="container">
        <label id="titulo">SUA <span>HARMONIA</span><br>COMEÇA AQUI</label>
        <label id="subtitulo">Pronto para compor uma ótima experiência para nossos clientes? Vamos começar!</label>
        <button class="botao" id="btnCadastrarFuncionario" onclick="javascript:location.href='cadFuncionario.php'">Cadastrar Funcionário</button>
    </div>
    <div class="rodape">
        <p>
            Feito por: Gustavo Felix Ferreira da Silva & Nayara Aparecida Silva
            Fioraneli — 2MD2
        </p>
    </div>
    <img src="imgInicio/usuario.png" class="usuario" />
</body>

</html>
<script>
    document.querySelectorAll(".cabecalho a").forEach(function (link) {
        link.addEventListener("click", function (event) {
            event.preventDefault();

            const currentActive = document.querySelector(".cabecalho a.active");
            if (currentActive) {
                currentActive.classList.remove("active");
                link.classList.add("active");

                setTimeout(function () {
                    window.location.href = link.href;
                }, 100);
            }
        });
    });
</script>