<?php

include_once __DIR__ . '/Product.php';

class food extends Product {
    private $gusto;

    function __construct($_nome , $_prezzo, $_quantita, Category $_categoria, $_gusto){
        parent:: __construct ($_nome, $_prezzo, $_quantita, $_categoria);
        $this-> gusto = $_gusto;
    }

    public function get_gusto(){
        return $this->gusto;
    }

    public function set_gusto($gusto){
        $this->gusto = $gusto;
    }
}    