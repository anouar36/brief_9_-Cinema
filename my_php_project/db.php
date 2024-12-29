<?php
CLASS DBconnection{

    public $con ;
public function __construct(){
    $host   = '192.168.1.16';
    $username = 'root';
    $password  = 'root_password';
    $database = 'Cenima';

try {
    $this->con = new PDO("mysql:host=$host;dbname=Cenima", $username, $password);
    $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
} catch (PDOException $e){
    echo 'anouar rah kyn erroer f db : ' . $e->getMessage();
    exit();
}

}

}


?>