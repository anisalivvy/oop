<?php
class Manusia{
    public $makan;
    public $minum;

    function __construct($makan,$minum) {
        $this->makan = $makan; 
        $this->minum = $minum;
    }

    function Makan(){
        return $this->makan; 
    }

    function Minum(){
        return $this->minum;
    }
}

class Pria extends Manusia{
    function Menangis(){
        echo "Jaemin menangis karena terharu dengan NCTZen";
    }
    function Senang(){
        echo "Jaemin senang karena dream menjadi fix unit";
    }
    function Bahagia(){
        echo "Jaemin bahagia jadi center di NCT Dream";
    }
}

$pria=new Pria("Jaemin suka makan Nasi Goreng","Jaemin minum Lemon tea");
echo $pria->Makan();
echo "<br>";
echo $pria->Minum();
echo "<br>";
$pria->Menangis();  
echo "<br>";
$pria->Senang();
echo "<br>";
$pria->Bahagia();