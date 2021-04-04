<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <title>Inventory System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel= "stylesheet" href= "styles/styles.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <h3 id="logo">DeviceStock</h3>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="resultTablet.php">Dispositivos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="resultFornecedor.php">Fornecedores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Marcas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Modelos</a>
              </li>                      
            </ul>                    
          </div>
        </div>
      </nav>
    </header>
    <section id="inputForm">
      <div class="form-group">
        <form method="POST" action="resultTablet.php" class="form-inline">
          <label class="sr-only" for="id">ID</label>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text">ID</div>
            </div>
            <input type="text" class="form-control" id="id" placeholder="Digite o ID...">
          </div>
          <label class="sr-only" for="name">Nome</label>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text">Razão Social</div>
            </div>
            <input type="text" class="form-control" id="name" name="inpName" placeholder="Digite o nome...">
          </div>
          <label class="sr-only" for="cnpj">CNPJ</label>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text">CNPJ</div>
            </div>
            <input type="text" class="form-control" id="cnpj" name="inpCnpj" placeholder="Digite o CNPJ...">
          </div>
          <label class="sr-only" for="phone">Telefone</label>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text">Telefone</div>
            </div>
            <input type="text" class="form-control" id="phone" name="inpPhone" placeholder="(XX) XXXXX-XXXX">
          </div>              
          <div class="form-inline">
            <label class="sr-only" for="email">Email</label>
            <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text">Email</div>
              </div>
              <input type="email" class="form-control" name="inpEmail" id="email" placeholder="exemplo@dominio.com.br">
            </div>
            <label class="sr-only" for="adress">Logradouro</label>
            <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text">Logradouro</div>
              </div>
              <input type="text" class="form-control" name="inpAdress" id="adress" placeholder="Avenida Exemplo">
            </div>          
            <label class="sr-only" for="number">Número</label>
            <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text">Número</div>
              </div>
              <input type="number" class="form-control" name="inpNumber" id="number" placeholder="XXX">
            </div>
            <label class="sr-only" for="complement">Complemento</label>
            <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text">Complemento</div>
              </div>
              <input type="text" class="form-control" name="inpComplement" id="complement" placeholder="AP, Casa, Lote, Bloco, etc...">
            </div>    
          </div>
          <div class="form-inline">
            <label class="sr-only" for="cep">CEP</label>
            <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text">CEP</div>
              </div>
              <input type="text" class="form-control" name="inpCep" id="cep" placeholder="XXXXX-XXX">
            </div>
            <label class="sr-only" for="city">Cidade</label>
            <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text">Cidade</div>
              </div>
              <input type="text" class="form-control" name="inpCity" id="city" placeholder="Digite a Cidade...">
            </div>
            <label class="sr-only" for="state">UF</label>
            <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text">UF</div>
              </div>
              <input type="text" class="form-control" name="inpState" id="state" placeholder="Digite o Estado...">
            </div>
          </div>
          <div id="buttons">
            <button class="btn btn-primary" type="submit" name="btnSearch">Buscar</button>
            <button class="btn btn-primary" type="submit" name="btnSave">Salvar</button>
            <button class="btn btn-primary" type="reset" name="btnReset">Limpar</button>
          </div>
        </form>
      </section>
      <section class="resultTable">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>CNPJ</th>
              <th>Telefone</th>
              <th>Email</th>
              <th>Endereço</th>
              <th>CEP</th>
              <th>Cidade</th>
              <th>UF</th>
              <th>Ações</th>
            </tr>
          </thead>
        </table>
      </section>
    </div>
  </body>
</html>