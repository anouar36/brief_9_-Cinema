<?php
$host   = '172.16.11.162';
$username = 'root';
$password  = 'root_password';
$database = 'Cenima';
$con = new PDO("mysql:host=$host; dbname=Cenima", $username, $password);
if(!$con){
    echo ('Ples erorr');
}


?>