<?php
if(isset($_GET['submit'])){
    $Nama = $_GET['Nama'];
    $matkul = $_GET['matkul'];
    $uts = $_GET['uts'];
    $uas = $_GET['uas'];
    $pratik = $_GET['praktik'];
    $average=($uts+$uas+$pratikum)/3;

    echo "Nama: $Nama <br>";
    echo "Mata Kuliah: $matkul <br>";
    echo "Nilai UTS: $uts <br>";
    echo "Nilai UAS: $uas <br>";
    echo "Nilai Pratikum: $pratik <br>";   

    echo "<br> <br>";
    echo "Nilai rata-rata:" . round ($average,2) ."<br>";
    echo "Grade Nilai:";
}else{
    echo"Tidak ada data!";
}