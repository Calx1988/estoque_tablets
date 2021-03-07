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
                            <li id="activepage"><a href="buscarTablet.php">Buscar Tablet</a></li>
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
                <header><h2>Buscar Dispositivo</h2></header>
                <form method="post" action="#">
                    <label>Código:</label>
                    <input type="text" name="id" placeholder="Digite a ID...">
                    <label>Marca:</label>
                    <input type="text" name="marca" placeholder="Digite a marca.">
                    <label>Modelo:</label>
                    <input type="text" name="modelo" placeholder="Digite o modelo..."><br>
                    <label>Cor:</label>
                    <select name="cor">
                        <option>Selecione a cor:</option>
                        <option>Preto</option>
                        <option>Branco</option>
                        <option>Azul</option>
                        <option>Vermelho</option>
                        <option>Outro</option>
                    </select>
                    <label>Preço Min.:</label>
                    <input type="text" name="precomin" size="8">
                    <label>Preço Máx.:</label>
                    <input type="text" name="precomax" size="8"><br>
                    <button>Buscar</button>
                    <button>Limpar</button>
                </form>

            </section>
        </div>
    </body>
    </html>