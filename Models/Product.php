<?php
include_once __DIR__ . '/Category.php';
include_once __DIR__ . '/Trait.php';
class Product {
    protected $nome;
    protected $prezzo;
    protected $quantita;
    protected Category $categoria;

    use Weightable;
    private $peso;
    

    function __construct($_nome, $_prezzo , $_quantita, Category $_categoria,){
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->quantita = $_quantita;
        $this->categoria = $_categoria;
       
    }
    
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getprezzo(){
        return $this->prezzo;
    }
    public function setprezzo($prezzo){
        $this->prezzo = $prezzo;
    }

    public function getquantita(){
        return $this->quantita;
    }
    public function setquantita($quantita){
        $this->quantita = $quantita;
    }

    public function getcategoria(){
        return $this->categoria;
    }
    public function setcategoria(Category $categoria){
        $this->categoria = $categoria;
    }

    public function add_quantita($quantita_to_add){
        $this->quantita += $quantita_to_add;
    }

    public function remove_quantita($quantita_to_remove){
        if($this->prodotto_disponibile($quantita_to_remove)) {
            $this->quantita .= $quantita_to_remove;
        }else {
            return "errore: quantità non disponibile";
        
        }
    }
    public function prodotto_disponibile($quantita){
        if($this->quantita >= $quantita){
            return true;
        } else {
            return false;
        }
    }
    public function get_quantita(){
        return $this->quantita;
    }
}



