<?php

require "../dbBroker.php";
require "../rezervacija.php";

if(isset($_POST['id'])){
    $myArray = Rezervacija::getById($_POST['id'], $conn);
    echo json_encode($myArray);
}
?>