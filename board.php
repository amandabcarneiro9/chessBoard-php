<?php
require_once 'square.php';

class Board {

    public $pieces = null;


    public function __construct($pieces){
        $this->pieces = $pieces;
    }

    public function __toString(){
        $board = '';
        foreach(range(1,8) as $row) {
            $board .= '<div class="row">';

            foreach(range(1,8) as $column) {
                $piece = isset($this->pieces[$row][$column]) ? $this->pieces[$row][$column] : null ;
                $board .= new Square($row,$column,$piece);
            }

            $board .= '</div>';
        }
        return "<div class='board'>$board</div>";
    }
}