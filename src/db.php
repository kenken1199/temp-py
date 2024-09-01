<?php
$servername="mysql";
$username="kenta";
$password="Kent@2428";
$dbname="raspi3";

$conn=new mysqli("$servername", "$username", "$password", "$dbname");

if($conn){

}else{
    echo "Connection Failed";
}

?>
