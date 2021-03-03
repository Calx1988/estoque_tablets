<?php>
    class Tablet{
    private $id:Int;
    private $marca:String;
    private $modelo:String;
    private $cor:String;
    private $preco:Double;
    private $fornecedor:String;

    // Getters

    public function getId($id){
        return $this->id;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function getCor(){
        return $this->cor;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function getFornecedor(){
        return $this->fornecedor;
    }

    // Setters
    

    }



?>