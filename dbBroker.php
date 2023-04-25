<?php
$host="localhost";
$db="restoran";
$user="root";
$pass="";

$conn=new mysqli($host,$user,$pass,$db);

if ($conn->connect_errno){
    exit("neuspesna konekcija: greska> ".$conn->connect_error. ",err kod>".$conn->connect_errno);
}
?>