<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PROGRAM GRADE NILAI</h1>
    <form action="" method="GET">
    <input type="number" name="nilai" placeholder="Isikan Nilai Disini">
    <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
class Grade{

    var$nilai;

    function setNama($nl){
        
        $this->nilai=$nl;
    }

    function getNilai(){
        if($this->nilai<=50){
            $grade = 'D';
            }
            else if($this->nilai<=60){
                $grade = 'C';
            }
            else if($this->nilai<=80){
                $grade = 'B';
            }
            else if($this->nilai>=90){
                $grade = 'A';
            }
            return $grade;
    }
}
?>

<?php
$grade = new Grade;
?>

<?php
if(isset($_GET["submit"])){
    echo"<br>Grade : ";
    $ponten=$grade->setNama($_GET["nilai"]);
    echo $grade->getNilai();
}
?>
