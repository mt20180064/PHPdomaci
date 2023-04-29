<?php

require "../dbBroker.php";
require "../rezervacija.php";

if(isset($_POST['gost']) && isset($_POST['sala']) 
&& isset($_POST['sto']) && isset($_POST['datum']) && isset($_POST['vreme'])
&& isset($_POST['brojljudi'])){
    $rezervacija = new Rezervacija(null,$_POST['gost'],$_POST['sala'],$_POST['sto'],$_POST['datum'],$_POST['vreme'],$_POST['brojljudi'] );
    $status = Rezervacija::add($rezervacija, $conn);

    if($status){
        echo 'Success';
    }else{
        echo $status;
        echo 'Failed';
    }
}


?>