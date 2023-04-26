<?php

require "../dbBroker.php";
require "../rezervacija.php";

if(isset($_POST['id'])){
    $obj = new Rezervacija($_POST['id']);
    $status = $obj->deleteById($conn);
    if ($status){
        echo "Success";
    }else{
        echo "Failed";
    }
}

?>