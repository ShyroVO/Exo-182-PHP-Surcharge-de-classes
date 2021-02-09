<?php
class Sorcier extends Personnage {
    public function __construct(){
        parent::__construct();
        $this->x = 125;
        $this->y = 125;
    }
}