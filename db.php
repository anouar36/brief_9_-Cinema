<?php
$hoste = '172.16.11.162';
$Username = 'root';
$passord = 'root_password';
$database  = 'Cenima';
$con = mysqli_connect($hoste,$Username,$passord,$database);
if(!$con){
    echo ('Ples erorr');
}


?>