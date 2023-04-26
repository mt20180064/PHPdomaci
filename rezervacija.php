<?php
class Rezervacija{
    public $id;   
    public $gost;   
    public $sala;   
    public $sto;   
    public $datum;
    public $vreme;
    public $brojljudi;
    public $user;
    
    public function __construct($id=null, $gost=null, $sala=null, $sto=null, $datum=null, $vreme=null, $brojljudi=null, $user=null)
    {
        $this->id = $id;
        $this->gost = $gost;
        $this->sala = $sala;
        $this->sto = $sto;
        $this->datum = $datum;
        $this->vreme = $vreme;
        $this->brojljudi = $brojljudi;
        $this->user = $user;

       
    }


    public static function getAll(mysqli $conn)
    {
        $query = "SELECT * FROM rezervacija";
        return $conn->query($query);
    }



  
    public static function getById($id, mysqli $conn){
        $query = "SELECT * FROM rezervacija WHERE id=$id";

        $myObj = array();
        if($msqlObj = $conn->query($query)){
            while($red = $msqlObj->fetch_array(1)){
                $myObj[]= $red;
            }
        }

        return $myObj;

    }

  

    public function deleteById(mysqli $conn)
    {
        $query = "DELETE FROM rezervacija WHERE id=$this->id";
        return $conn->query($query);
    }


    public function update($id, mysqli $conn)
    {
        $query = "UPDATE rezervacija set gost = $this->gost,sala = $this->sala,sto = $this->sto,datum = $this->datum, vreme = $this->vreme,brojljudi = $this->brojljudi,user = $this->user WHERE id=$id";
        return $conn->query($query);
    }


    public static function add(Rezervacija $rezervacija, mysqli $conn)
    {
        $query = "INSERT INTO rezervacija(gost, sala, sto, datum, vreme, brojljudi, user) VALUES('$rezervacija->gost','$rezervacija->sala','$rezervacija->sto','$rezervacija->datum','$rezervacija->vreme','$rezervacija->brojljudi','$rezervacija->user')";
        return $conn->query($query);
    }
}

?>