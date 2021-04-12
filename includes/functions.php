<?php
require_once("includes/db.php");
include_once("classes/TabletClass.php");
include_once("classes/ProviderClass.php");

function searchTablet(){
    if(isset($_POST['btnSearchTablet'])){
        if(empty($_POST['inpId']) && $_POST['slctProvider']=="Selecione"){
            
            global $connection;
            
            $query="SELECT * FROM tablet";
            $run=mysqli_query($connection, $query);
            echo "<table class='table table-striped'>";
                echo "<thead>";
                    echo "<tr>";
                        echo "<th>ID</th>";
                        echo "<th>Marca</th>";
                        echo "<th>Modelo</th>";
                        echo "<th>Cor</th>";
                        echo "<th>Preço</th>";
                        echo "<th>Data de Fabricação</th>";
                        echo "<th>Fornecedor</th>";
                        echo "<th>Data de Cadastro</th>";
                        echo "<th>Ações</th>";
                    echo "</tr>";
                echo "</thead>";  
                while($obj=mysqli_fetch_object($run)){
                    echo "<tr>";
                        echo "<td>$obj->id</td>";
                        echo "<td>$obj->idMarca</td>";
                        echo "<td>$obj->idModelo</td>";
                        echo "<td>$obj->idCor</td>";
                        echo "<td>$obj->preco</td>";
                        echo "<td>$obj->dataFabricacao</td>";
                        echo "<td>$obj->idFornecedor</td>";
                        echo "<td>$obj->dataCadastro</td>";
                        echo "<td><button class='btn btn-primary' name='btnEditTablet'>Alterar</button><button class='btn btn-danger' name='btnDeleteTablet'>Excluir</button></td>";
                    echo "</tr>";
                    unset($obj);
                }
            echo "</table>";

            if($run == TRUE){
                echo "<div class='alert alert-success' role='alert'>Busca realizada com sucesso!</div>";
            }else{
                echo "<div class='alert alert-danger' role='alert'>Erro! Busca não realizada.</div>";
            }
        }else if(!empty($_POST['inpId'])){
            global $connection;
            $searchItem=mysqli_real_escape_string($connection,$_POST['inpId']);
            $query="SELECT * FROM tablet WHERE id='".$searchItem."'";
            $run=mysqli_query($connection, $query);
            echo "<table class='table table-striped'>";
                echo "<thead>";
                    echo "<tr>";
                        echo "<th>ID</th>";
                        echo "<th>Marca</th>";
                        echo "<th>Modelo</th>";
                        echo "<th>Cor</th>";
                        echo "<th>Preço</th>";
                        echo "<th>Data de Fabricação</th>";
                        echo "<th>Fornecedor</th>";
                        echo "<th>Data de Cadastro</th>";
                        echo "<th>Ações</th>";
                    echo "</tr>";
                echo "</thead>";    
                while($obj=mysqli_fetch_object($run)){
                    echo "<tr>";
                        echo "<td>$obj->id</td>";
                        echo "<td>$obj->idMarca</td>";
                        echo "<td>$obj->idModelo</td>";
                        echo "<td>$obj->idCor</td>";
                        echo "<td>$obj->preco</td>";
                        echo "<td>$obj->dataFabricacao</td>";
                        echo "<td>$obj->idFornecedor</td>";
                        echo "<td>$obj->dataCadastro</td>";
                        echo "<td><button class='btn btn-primary'>Alterar</button><button class='btn btn-danger'>Excluir</button></td>";
                    echo "</tr>";
                    unset($obj);
                }
            echo "</table>";

            if($run == TRUE){
                echo "<div class='alert alert-success' role='alert'>Busca realizada com sucesso!</div>";
            }else{
                echo "<div class='alert alert-danger' role='alert'>Erro! Busca não realizada.</div>";
            }

        }else if(empty($_POST['inpId']) && $_POST['slctProvider']!="Selecione"){
            global $connection;
            $searchItem=mysqli_real_escape_string($connection, $_POST['slctProvider']);
            $query="SELECT id, nome FROM fornecedor WHERE nome='".$searchItem."'";
            $run=mysqli_query($connection, $query);
            while($obj=mysqli_fetch_object($run)){
                $searchItem=$obj->id;
                unset($obj);
            }
            $query="SELECT * FROM tablet WHERE idFornecedor='".$searchItem."'";
            $run=mysqli_query($connection, $query);
            echo "<table class='table table-striped'>";
                echo "<thead>";
                    echo "<tr>";
                        echo "<th>ID</th>";
                        echo "<th>Marca</th>";
                        echo "<th>Modelo</th>";
                        echo "<th>Cor</th>";
                        echo "<th>Preço</th>";
                        echo "<th>Data de Fabricação</th>";
                        echo "<th>Fornecedor</th>";
                        echo "<th>Data de Cadastro</th>";
                        echo "<th>Ações</th>";
                    echo "</tr>";
                echo "</thead>";    
                while($obj=mysqli_fetch_object($run)){
                    echo "<tr>";
                        echo "<td>$obj->id</td>";
                        echo "<td>$obj->idMarca</td>";
                        echo "<td>$obj->idModelo</td>";
                        echo "<td>$obj->idCor</td>";
                        echo "<td>$obj->preco</td>";
                        echo "<td>$obj->dataFabricacao</td>";
                        echo "<td>$obj->idFornecedor</td>";
                        echo "<td>$obj->dataCadastro</td>";
                        echo "<td><button class='btn btn-primary'>Alterar</button><button class='btn btn-danger'>Excluir</button></td>";
                    echo "</tr>";
                    unset($obj);
                }
            echo "</table>";

            if($run == TRUE){
                echo "<div class='alert alert-success' role='alert'>Busca realizada com sucesso!</div>";
            }else{
                echo "<div class='alert alert-danger' role='alert'>Erro! Busca não realizada.</div>";
            }
        }    
    }
}

function saveTablet(){
    if(isset($_POST['btnSaveTablet'])){      
        
        global $connection; 
        
        $tablet = new Tablet;
        
        // SETTING VALUES
        
        $tablet->setId(mysqli_real_escape_string($connection,$_POST['inpId']));
        $tablet->setBrand($_POST['slctBrand']); 
        $tablet->setModel($_POST['slctModel']);
        $tablet->setColor($_POST['slctColor']);
        $tablet->setPrice($_POST['inpPrice']);
        $tablet->setFabricationDate($_POST['inpFabricationDate']);
        $tablet->setProvider($_POST['slctProvider']);
        $tablet->setRegisterDate(date('Y/m/d'));
        

        // MYSQL QUERIES
    
        $query="INSERT INTO tablet VALUES ('".$tablet->getId()."','".$tablet->getBrand()."', 
                '".$tablet->getModel()."', '".$tablet->getColor()."', '".$tablet->getPrice()."', 
                '".$tablet->getFabricationDate()."', '".$tablet->getProvider()."', 
                '".$tablet->getRegisterDate()."')";

        $run=mysqli_query($connection, $query);
        
        if($run == TRUE){
            echo "<div class='alert alert-success' role='alert'>Dispositivo foi salvo no Banco de Dados.</div>";
        }else{
            echo "<div class='alert alert-danger' role='alert'>Erro! Dados não salvos.</div>";
        }
        
    }
}

function searchProvider(){
    if(isset($_POST['btnSearchProvider'])){

        global $connection;
        
        $query="SELECT * FROM fornecedor";
        $run=mysqli_query($connection, $query);
        echo "<table class='table table-striped'>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>CNPJ</th>";
                    echo "<th>Razão Social</th>";
                    echo "<th>Telefone</th>";
                    echo "<th>Email</th>";
                    echo "<th>Endereço</th>";
                    echo "<th>CEP</th>";
                    echo "<th>Cidade/UF</th>";
                echo "</tr>";
            echo "</thead>";    
            while($obj=mysqli_fetch_object($run)){
                echo "<tr>";
                    echo "<td>$obj->id</td>";
                    echo "<td>$obj->cnpj</td>";
                    echo "<td>$obj->nome</td>";
                    echo "<td>($obj->ddd) $obj->telefone</td>";
                    echo "<td>$obj->email</td>";
                    echo "<td>$obj->endereco, $obj->numero, $obj->complemento</td>";
                    echo "<td>$obj->cep</td>";
                    echo "<td>$obj->cidade/$obj->uf</td>";
                    echo "<td><button class='btn btn-primary'>Alterar</button><button class='btn btn-danger'>Excluir</button></td>";
                echo "</tr>";
                unset($obj);
            }
        echo "</table>";

        if($run == TRUE){
            echo "<div class='alert alert-success' role='alert'>Busca realizada com sucesso!</div>";
        }else{
            echo "<div class='alert alert-danger' role='alert'>Erro! Busca não realizada.</div>";
        }
    }
}

function saveProvider(){
    if(isset($_POST['btnSaveProvider'])){      
        
        global $connection; 
        
        $fornecedor = new Fornecedor;
        
        // SETTING VALUES
        
        $fornecedor->setId(mysqli_real_escape_string($connection,$_POST['inpId']));
        $fornecedor->setCnpj(mysqli_real_escape_string($connection,$_POST['inpCnpj']));
        $fornecedor->setName(mysqli_real_escape_string($connection,$_POST['inpName']));
        $fornecedor->setAreaCode($_POST['inpAreaCode']);
        $fornecedor->setPhone($_POST['inpPhone']);
        $fornecedor->setEmail(mysqli_real_escape_string($connection,$_POST['inpEmail']));
        $fornecedor->setAdress(mysqli_real_escape_string($connection,$_POST['inpAdress']));
        $fornecedor->setNumber($_POST['inpNumber']);
        $fornecedor->setComplement(mysqli_real_escape_string($connection,$_POST['inpComplement']));
        $fornecedor->setCep($_POST['inpCep']);
        $fornecedor->setCity(mysqli_real_escape_string($connection,$_POST['inpCity']));
        $fornecedor->setState($_POST['slctState']);    

        // MYSQL QUERIES
    
        $query="INSERT INTO fornecedor (cnpj, nome, ddd, telefone, email, endereco, numero, complemento, cep, cidade, uf) VALUES ('".$fornecedor->getCnpj()."', 
                '".$fornecedor->getName()."', '".$fornecedor->getAreaCode()."', '".$fornecedor->getPhone()."', '".$fornecedor->getEmail()."', 
                '".$fornecedor->getAdress()."', '".$fornecedor->getNumber()."','".$fornecedor->getComplement()."', '".$fornecedor->getCep()."', '".$fornecedor->getCity()."', 
                '".$fornecedor->getState()."')";

        $run=mysqli_query($connection, $query);
        
        if($run == TRUE){
            echo "<div class='alert alert-success' role='alert'>Fornecedor foi salvo no Banco de Dados.</div>";
        }else{
            echo "<div class='alert alert-danger' role='alert'>Erro! Dados do Fornecedor não salvos.</div>";
        }
        
    }
}
