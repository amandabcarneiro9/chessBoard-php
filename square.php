<?php
require_once 'piece.php';

class Square {
    public $x_coord = null;
    public $y_coord = null;
    public $piece  = null;


    public function __construct($x,$y, $piece = null){
        $this->x_coord = $x;
        $this->y_coord = $y;
        $this->piece = $piece == null ? '': new Piece($piece);
    }

    public function isDark(){
        if (($this->x_coord + $this->y_coord) % 2 == 0){
            return 'white';
        }
        return 'black';
    }


    public function __toString(){
        $class = $this->isDark();
        return "<div class='$class'>" . $this->piece . '</div>';
    }
}