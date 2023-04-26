<?php

require "../dbBroker.php";
require "../rezervacija.php";

if(isset($_POST['gost']) && isset($_POST['datum']) 
&& isset($_POST['vreme']) && isset($_POST['user']) && isset($_POST['brojljudi'])
&& isset($_POST['sala']) && isset($_POST['sto'])){
    $rezervacija = new Rezervacija(null,$_POST['gost'],$_POST['sala'],$_POST['sto'],$_POST['datum'],$_POST['vreme'],$_POST['brojljudi'],$_POST['user'] );
    $status = Rezervacija::add($rezervacija, $conn);

    if($status){
        echo 'Success';
    }else{
        echo $status;
        echo 'Failed';
    }
}


?>