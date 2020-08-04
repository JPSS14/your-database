<?php

class Connection
{

    public function connect()
    {
        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "your_database";

        $result = mysqli_connect($host, $user, $password, $db);

        if(mysqli_connect_errno()){
            die ("Falha na conexão " . mysqli_connect_errno());
        }else{
            return $result;
        }
    }
}
