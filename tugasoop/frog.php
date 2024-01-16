<?php

require_once('animal.php');

class Frog extends Animal {

    public function getFrogName(){
        echo "Name : Kodok ";
    }

    public function getFrogLegs(){
        echo "Legs : 4 ";
    }
    
    public function getFrogBlood(){
        echo "Cold Blooded : No ";
    }
    
    public function getFrogJump(){
        echo "Jump : Hop Hop";
    }
    }

    
?>