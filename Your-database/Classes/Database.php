<?php

class DataBase{
    private $idDatabase;
    private $nameDatabase;

    public function getIdDatabase(){
        return $this->idDatabase; 
    }
    public function setIdDatabase($idDatabase){
        $this->idDatabase = $idDatabase;
    }
    public function getNameDatabase(){
        return $this->nameDatabase;
    }
    public function setNameDatabase($nameDatabase){
        $this->nameDatabase = $nameDatabase;
    }

    public function createDatabase(){
        $insert = "INSERT INTO y_database VALUES(default, '$this->getNameDatabase()')";

    
    }
}