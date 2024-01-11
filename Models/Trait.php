<?php

trait Weightable {
    private $peso;

    public function setpeso($_peso) {
        if($_peso > 0) {
            $this->peso = $_peso;
        } else {
            return 'Error: peso deve essere numero positivo';
        }
    }

    public function getpeso() {
        return $this->peso . 'kg';
    }
}