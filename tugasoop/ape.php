<?php

require_once('animal.php');

class Ape extends Animal {

    public function getApeName(){
        echo "Name : Sun ";
    }

    public function getApeLegs(){
        echo "Legs : 2";
    }
    
    public function getApeBlood(){
        echo "Cold Blooded :No ";
    }
    
    public function getApeYell(){
        echo "Yell : Auooo";
    }

}
    
?>

