<?php>
    private class Tablet{
        $id;
        $brand;
        $model;
        $color;
        $price;
        $provider;

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

        // SETTERS
        public function setId($id){
            $this->id=$id;
        }

        public function setBrand($brand){
            $this->brand=$brand;
        }

        public function setModel($model){
            $this->modelo=$model;
        }

        public function setColo($color){
            $this->cor=$color;
        }

        public function setPrice($price){
            $this->price=$price;
        }

        public function setProvider($provider){
            $this->provider=$provider;
        }

    }



?>