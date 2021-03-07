<!DOCTYPE html>
<html>

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
                            <li><a href="#">Buscar Tablet</a></li>
                            <li><a href="#">Cadastrar Tablet</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Fornecedores</a>
                        <ul>
                            <li><a href="#">Buscar Fornecedor</a></li>
                            <li><a href="#">Cadastrar Fornecedor</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="corpo">
            <section>
                <p><h2>Buscar Dispositivo</h2></p>
                <form method="post" action="#">
                    <label>Código do Tablet:</label>
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
                    <label>Preço:</label>
                    <select name="preco">
                        <option>Selecione o valor:</option>
                        <option>Até R$150,00</option>
                        <option>Até R$300,00</option>
                        <option>Até R$500,00</option>
                        <option>Até R$1000,00</option>
                        <option>Acima de R$1000,00</option>
                    </select>
                    <label>Fornecedor</label>
                    <input type="text" name="fornecedor" placeholder="Digite o fornecedor..."><br>
                    <button>Buscar</button>
                    <button>Limpar</button>
                </form>

            </section>
        </div>
    </body>
    </html>