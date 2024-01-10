<?php
require_once __DIR__ . '/Product.php';

class Toy extends product {
    private $materiale;

    function __construct($_nome, $_prezzo, $_quantita, category $_categoria, $_materiale){
        parent:: __construct($_nome, $_prezzo, $_quantita, $_categoria);
        $this->materiale = $_materiale;
    }
    
    public function get_materiale(){
        return $this-> materiale;
    }

    public function set_materiale($materiale){
        $this->materiale = $materiale;
    }
}