<?php

$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "trinity";

$connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);
$dbconfig = mysqli_select_db($connection,$db_name);
if(isset($_POST['partrequest']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $zip = $_POST['zip'];
 

    $query = "INSERT INTO  form1 (name,email,phone,zip) VALUES('$name','$email','$phone','$zip') ";
    $query_run = mysqli_query($connection, $query);
    if($query_run){
       
        header('location:thank-you.php');
        
    }
else {
  
    header('location:index.php');    
}
}
?>