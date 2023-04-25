<?php

class Gost{
    public $id;
    public $username;
    public $password;

    public function __construct($id=null, $username=null, $password=null){
        $this->id=$id;
        $this->username=$username;
        $this->password=$password;
    }

    public static function ulogujSe($usr, mysqli $conn){
        $query="SELECT * FROM gost WHERE username='$usr->username' AND password='usr->password'";
        return $conn->query($query);
    }
}

?>