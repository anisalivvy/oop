<?php
class Siswa{
    public $nama ="nama";
    public $jurusan ="jurusan";
    public $jeniskelamin ="jeniskelamin";
    public $sekolah ="sekolah";
}

$Siswa1 =new Siswa();
$Siswa1->nama ="Anisa";
$Siswa1->jurusan ="Rekayasa Perangkat Lunak";
$Siswa1->jeniskelamin ="Perempuan";
$Siswa1->sekolah ="SMK Negeri 1 Denpasar";

echo "Nama : $Siswa1->nama, 
    Jurusan : $Siswa1->jurusan, 
    Jenis kelamin : $Siswa1->jeniskelamin,
    Sekolah : $Siswa1->sekolah";
