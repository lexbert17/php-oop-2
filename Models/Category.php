<?php

class category  {

    public $titolo;
    public $icona;

    public function __construct($_titolo , $_icona)
    {
        $this->titolo = $_titolo;
        $this->icona = $_icona;
    }

    public function print_info()
    {
        return 'Titolo: ' .$this->titolo . ', Icona: ' .$this->icona;
    }
}