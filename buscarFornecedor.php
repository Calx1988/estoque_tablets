<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title>Buscar Tablet</title>
        <meta charset="utf-8">
        <link rel= "stylesheet" href= "styles/styles.css"/>
    </head>

    <body>
        <header class="topo">Controle de Estoque de Tablets</header>
        <div class="menulateral">
            <nav class="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Tablets</a>
                        <ul>
                            <li><a href="buscarTablet.php">Buscar Tablet</a></li>
                            <li><a href="cadastrarTablet.php">Cadastrar Tablet</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Fornecedores</a>
                        <ul>
                            <li><a href="buscarFornecedor.php">Buscar Fornecedor</a></li>
                            <li><a href="cadastrarFornecedor.php">Cadastrar Fornecedor</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="corpo">
            <section>
                <header><h2>Buscar Fornecedor</h2></header>
                <form method="post" action="#">
                    <label>CNPJ:</label>
                    <input type="text" name="cnpj" maxlength="11" minlength="11" placeholder="Digite o CNPJ...">
                    <label>Nome:</label>
                    <input type="text" name="nome" size="60" placeholder="Digite o nome..."><br>
                    <label>Cidade:</label>
                    <input type="text" name="cidade" size="25" placeholder="Digite a cidade...">
                    <label>UF:</label>
                    <input type="text" name="uf" maxlength="2" size="2"><br>
                </form>
                <button class="acoes">Buscar</button>
                <button class="acoes">Limpar</button>
            </section>
        </div>
    </body>
</html>