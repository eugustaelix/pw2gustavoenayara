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
    <link rel="stylesheet" href="stylecadCliente.css" />
    <title>Cadastro | Cliente</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rajdhani:wght@300;400;500;600;700&family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap"
        rel="stylesheet" />
</head>

<body>
    <div class="cabecalho">
        <a href="inicio.php" id="navinicio">Início</a>
        <a href="cadCliente.php" class="active" id="navcliente">Cliente</a>
        <a href="cadFuncionario.php" id="navfuncionario">Funcionário</a>
        <a href="cadFornecedor.php" id="navfornecedor">Fornecedor</a>
        <a href="cadCategoria.php" id="navcategoria">Categoria</a>
        <a href="cadLancamentos.php" id="navlancamentos">Lançamentos</a>
        <a href="php/logout.php" id="navsair">Sair</a>
    </div>
    <img src="imgcadCliente/menina_violino.png" class="menina_violino" />
    <img src="imgcadCliente/forma_abstrata.png" class="forma_abstrata" />
    <div class="desfoque"></div>
    <div class="caixa">
        <img src="imgcadCliente/notas_musicais.png" class="notas_musicais" />
        <div class="container">
            <form action="php/insert_cliente.php" method="POST">
                <div class="titulo">
                    <label class="cadastro">CADASTRO</label>
                    <hr />
                    <label class="cliente">CLIENTE</label>
                </div>
                <label for="primeironome" id="txtprimeironome" class="texto">Primeiro Nome:
                </label>
                <label for="sobrenome" id="txtsobrenome" class="texto">Sobrenome:
                </label>
                <div class="doiscampos">
                    <input type="text" class="campo" id="primeironome" name="nm_cliente" placeholder="Primeiro Nome" />
                    <input type="text" class="campo" id="sobrenome" name="nm_sobrenome" placeholder="Sobrenome" />
                </div>
                <label for="email" class="texto">E-mail: </label>
                <input type="text" class="campo" id="email" name="nm_email" placeholder="E-mail" />
                <label for="telefone" class="texto">Telefone: </label>
                <input type="number" class="campo" id="telefone" name="nr_telefone" placeholder="Telefone" />
                <label for="endereco" id="txtendereco" class="texto">Endereço:
                </label>
                <label for="numero" id="txtnumero" class="texto">Número: </label>
                <div class="doiscampos">
                    <input type="text" class="campo" id="endereco" name="nm_endereco" placeholder="Endereço" />
                    <input type="text" class="campo" id="numero" name="nr_endereco" placeholder="Número" />
                </div>
                <div class="botoes">
                    <input type="button" class="botao" value="Cancelar" />
                    <input type="submit" class="botao" value="Cadastrar" />
                </div>
            </form>
        </div>
    </div>
    <div class="rodape">
        <p>
            Feito por: Gustavo Felix Ferreira da Silva & Nayara Aparecida Silva
            Fioraneli — 2MD2
        </p>
    </div>
    <img src="imgcadCliente/usuario.png" class="usuario" />
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