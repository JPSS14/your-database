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

    // CREATE DATABASE
    public function createDatabase($cx){
        $connection = $cx;

        $insert = "INSERT INTO y_database VALUES(default, '$this->getNameDatabase()')";
        $result = mysqli_query($connection, $insert);
        if(!$result){
            die("Erro no banco y_database no método createDatabase");
        }
        return $result;
    }

    // LIST ALL DATABASES
    public function listAllDatabases($cx){
        $connection = $cx;

        $select = "SELECT * FROM y_database";
        $result = mysqli_query($connection, $select);

        if(!$result){
            die("Erro no banco y_database no método listAllDatabase");
        }
        return $result;
    }
}