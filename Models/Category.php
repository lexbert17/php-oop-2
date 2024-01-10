<?php

class category  {

    private $icon;
    private $name;
    

     function __construct($_icon, $_name)
    {
        $this->icon = $_icon;
        $this->name = $_name;  
    }

    public function setIcon($_icon){
        $this->icon = $_icon;
    }
    public function getIcon(){
        return $this->icon;
    }
    public function setName ($_name){
        $this->name = $_name;
    }
    public function getName(){
        return $this->name;
    }
}   