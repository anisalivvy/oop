<?php
class Manusia{
    public $sifat;
    
    public function __construct($sifat){
        $this->sifat = $sifat;
    }
    public function intro(){
      echo "sifat{$this->sifat}";
    }
}

class Pria extends Manusia{
    public function message(){
        echo "Manusia memiliki ";
    }
}

$pria =new Pria("makan, minum, menangis, senang dan bahagia..");
$pria->message();
$pria->intro();