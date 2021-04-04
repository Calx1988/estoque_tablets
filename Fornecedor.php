<?php>
    private class Fornecedor{
        $id;
        $name;
        $cnpj;
        $phone;
        $email;
        $adress;
        $number;
        $complement;
        $cep;
        $city;
        $state;
        
        // GETTERS
        public function getId{
            return $this->id;
        }
        public function getName{
            return $this->name;
        }
        public function getCnpj{
            return $this->cnpj;
        }
        public function getPhone{
            return $this->phone;
        }
        public function getEmail{
            return $this->email;
        }
        public function getAdress{
            return $this->adress;
        }
        public function getNumber{
            return $this->number;
        }
        public function getComplement{
            return $this->complement;
        }
        public function getCep{
            return $this->cep;
        }
        public function getCity{
            return $this->city;
        }
        public function getState{
            return $this->state;
        }

        // SETTERS
        public function setId($id){
            $this->id=$id;
        }
        public function setName($name){
            $this->name=$name;
        }
        public function setCnpj($cnpj){
            $this->cnpj=$cnpj;
        }
        public function setPhone($phone){
            $this->phone=$phone;
        }
        public function setEmail($email){
            $this->email=$email;
        }
        public function setAdress($adress){
            $this->adress=$adress;
        }
        public function setNumber($number){
            $this->number=$number;
        }
        public function setComplement($complement){
            $this->complement=$complement;
        }
        public function setCep($cep){
            $this->cep=$cep;
        }
        public function setCity($city){
            $this->city=$city;
        }
        public function setState($state){
            $this->state=$state;
        }
    }


?>
