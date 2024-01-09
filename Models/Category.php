<?php

class category  {

    public $name;
    public $icon;

    public function __construct($_name , $_icon)
    {
        $this->name = $_name;
        $this->icon = $_icon;
    }

    public function print_info()
    {
        return 'Name: ' .$this->name . ', Icon: ' .$this->icon;
    }
}