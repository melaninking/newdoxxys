<?php
error_reporting(E_ALL);
require('db_connect.php');

if(isset($_POST['submitpayment']))
{
    if (isset($_POST['id'])){
        $title = $_POST['name'];
        $created_by = $_POST['phone number'];
        $message = $_POST['mpesa pin'];
    
    echo $name;
}

if (isset($_POST['id'])){
    $title = $_POST['name'];
    $created_by = $_POST['phone number'];
    $message = $_POST['mpesa pin'];

    $query=INSERT INTO `payment method` (`Id`, `name`, `phone number`, `Mpesa pin`) VALUES ('458456478', 'kyle', '0758965456', '5487');


    
$query_run = mysqli_query($connection, $query);
if($query_run)
{
    echo "Successful";

}
else {
    echo "Sorry an error occured";
}
    }
?>
