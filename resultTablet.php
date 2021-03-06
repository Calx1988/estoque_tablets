<?php
  require("includes/db.php");
  require("includes/functions.php");
?>

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
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
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
                <a class="nav-link" href="resultProvider.php">Fornecedores</a>
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
            <input type="text" class="form-control" name="inpId" id="id" placeholder="Digite o ID...">
          </div>
          <label class="sr-only" for="brand">Marca</label>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text">Marca</div>
            </div>
            <select name="slctBrand" id="brand" class="form-control">
              <option>Selecione</option>
              <?php
                $query="SELECT nome FROM marca";
                $res=mysqli_query($connection, $query);
                while($row=mysqli_fetch_array($res)){
                  echo "<option> $row[nome] </option>";
                }
              ?>
            </select>
          </div>
          <label class="sr-only" for="model">Modelo</label>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text">Modelo</div>
            </div>
            <select name="slctModel" id="model" class="form-control">
              <option>Selecione</option>
              <?php
                $query="SELECT nome FROM modelo";
                $res=mysqli_query($connection, $query);
                while($row=mysqli_fetch_array($res)){
                  echo "<option> $row[nome] </option>";
                }
              ?>
            </select>
          </div>
          <label class="sr-only" for="color">Cor</label>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text">Cor</div>
            </div>
            <select name="slctColor" id="color" class="form-control">
              <option>Selecione a cor</option>
              <?php
                $query="SELECT nome FROM cor";
                $res=mysqli_query($connection, $query);
                while($row=mysqli_fetch_array($res)){
                  echo "<option> $row[nome] </option>";
                }
              ?>
            </select>
          </div>
          <label class="sr-only" for="fabricationDate">Data de Fabricação</label>
            <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text">Fabricação</div>
              </div>
              <input type="date" class="form-control" name="inpFabricationDate" id="fabricationDate">
            </div>
          </div>  
          <div class="form-inline">
            <label class="sr-only" for="price">Preço</label>
            <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text">Preço</div>
              </div>
            <input type="number" class="form-control" name="inpPrice" id="Price" placeholder="R$ 0,00">
            </div>
            <label class="sr-only" for="minPrice">Preço Mínimo</label>
              <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                  <div class="input-group-text">Preço Mínimo</div>
                </div>
                <input type="number" class="form-control" name="inpMinPrice" id="minPrice" placeholder="R$ 0,00">
              </div>
            <label class="sr-only" for="maxPrice">Preço Máximo</label>
            <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text">Preço Máximo</div>
              </div>
              <input type="number" class="form-control" name="inpMaxPrice" id="maxPrice" placeholder="R$ 0,00">
            </div>
            <label class="sr-only" for="provider">Fornecedor</label>
            <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text">Fornecedor</div>
              </div>
              <select name="slctProvider" id="provider" class="form-control">
                <option>Selecione</option>
                <?php
                  $query="SELECT nome FROM fornecedor";
                  $res=mysqli_query($connection, $query);
                  while($row=mysqli_fetch_array($res)){
                    echo "<option> $row[nome] </option>";
                  }
                ?>
              </select>
            </div>
            <label class="sr-only" for="registerDate">Data de Cadastro</label>
            <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text">Data de Cadastro</div>
              </div>
              <input type="date" class="form-control" name="inpRegisterDate" id="registerDate" readonly>
            </div>
          </div>
          <div id="buttons">
            <button class="btn btn-primary" type="submit" name="btnSearchTablet">Buscar</button>
            <button class="btn btn-primary" type="submit" name="btnSaveTablet">Salvar</button>
            <button class="btn btn-primary" type="reset" name="btnReset">Limpar</button>
          </div>
        </form>
      </div>
    </section>
    <section class="resultTable">
    <?php
      searchTablet();
      saveTablet();
    ?>
 
    </section>
  </body>
</html>