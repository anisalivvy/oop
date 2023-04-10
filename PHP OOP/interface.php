<?php
// menggunakan keyword interface
interface User{

    // hanya berupa nama method dan argumen jika ada
    public function username($username);
    public function gender();
}

interface Alamat{
    public function jalan($jalan);
    public function kota($kota);
}

// menggunakan keyword implements. lebih dari satu interface dipisahkan koma
class Member implements User, Alamat{
    
    // hanya method username saja
    public function username($username){  
      echo "Nama saya adalah $username";  
    }

    public function gender(){
        echo "Jenis kelamin Laki-laki, ";
    }

    public function jalan($jalan){
        return $jalan;
    }

    public function kota($kota){
        return $kota;
    }

    public function Alamatsaya($jalan, $kota){
        echo "Alamat saya: ". $this->jalan($jalan) . $this->kota($kota);
    }
}

$jaemin =new Member();
$jaemin->username('Nana, ');
$jaemin->gender();
$jaemin->Alamatsaya('Jeonju, ', 'Korea Selatan');

// Interface merupakan istilah untuk konsep yang akan diimplementasi pada class. Interface mengijinkan kita membuat method yang harus diimplementasi pada class tanpa harus mendefinisikan bagaimana isi dari method tersebut. Interface lebih bertujuan membuat konsep method yang seragam dari pada membuat kerangka class seperti class abstrak.