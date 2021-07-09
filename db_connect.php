<?php
$hostname ="localhost";
$username ="root";
$password ="";


$connection = mysqli_connect($id, $name, $phonenumber, $mpesapin);
 
if(!$connection){
    echo" Connection Successful";
}

?>