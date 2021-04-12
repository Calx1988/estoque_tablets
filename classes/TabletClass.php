<?php
    include("includes/db.php");
    
    class Tablet{
        private $id;
        private $brand;
        private $model;
        private $color;
        private $price;
        private $provider;
        private $fabricationDate;
        private $registerDate;        

        // GETTERS
        public function getId(){
            return $this->id;
        }

        public function getBrand(){
            return $this->brand;
        }

        public function getModel(){
            return $this->model;
        }

        public function getColor(){
            return $this->color;
        }

        public function getPrice(){
            return $this->price;
        }

        public function getProvider(){
            return $this->provider;
        }

        public function getFabricationDate(){
            return $this->fabricationDate;
        }

        public function getRegisterDate(){
            return $this->registerDate;
        }

        // SETTERS
        public function setId($id){
            $this->id=$id;
        }

        public function setBrand($brand){
            global $connection;
            $query="SELECT id, nome FROM marca WHERE nome='$brand'";
            $res=mysqli_query($connection, $query);
            while($obj=mysqli_fetch_object($res)){
                $this->brand=$obj->id;
              }
        }

        public function setModel($model){
            global $connection;
            $query="SELECT id, nome FROM modelo WHERE nome='$model'";
            $res=mysqli_query($connection, $query);
            while($obj=mysqli_fetch_object($res)){
                $this->model=$obj->id;
            }
        }

        public function setColor($color){
            global $connection;
            $query="SELECT id, nome FROM cor WHERE nome='$color'";
            $res=mysqli_query($connection, $query);
            while($obj=mysqli_fetch_object($res)){
                $this->color=$obj->id;
              }
        }

        public function setPrice($price){
            $this->price=$price;
        }

        public function setProvider($provider){
            global $connection;
            $query="SELECT id, nome FROM fornecedor WHERE nome='$provider'";
            $res=mysqli_query($connection, $query);
            while($obj=mysqli_fetch_object($res)){
                $this->provider=$obj->id;
              }
        }

        public function setFabricationDate($fabricationDate){
            $this->fabricationDate=$fabricationDate;
        }

        public function setRegisterDate($registerDate){
            $this->registerDate=$registerDate;
        }

    }



?>