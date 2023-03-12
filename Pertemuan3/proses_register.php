<?php
if(isset($_POST['submit'])){
   $nim =$_POST['nim'];
   $nama=$_POST['nama'];
   $gender=$_POST['gender'];
   $prodi=$_POST['prodi'];

   if (!empty($_POST['skill'])) {
      $skill = $_POST['skill'];
   }


   $Domisili = $_POST['domisili'];
   $Email = $_POST['email'];
  

   
   
   echo "NIM: $nim";
   echo "<br> Nama: $nama";
   echo "<br> Jenis Kelamin: $gender";
   echo "<br> Program Studi: $prodi";
   echo "<br> Skill Programming: ";
   

   $listNilai =[];

   if (!empty($_POST['skill'])) {
       foreach($skill as $skill){


         if ($skill == 'HTML'){
            array_push($listNilai,10);
         } else if ($skill == 'CSS') {
            array_push($listNilai,10);
         } else if ($skill == 'JavaScript') {
            array_push($listNilai,20);
         }else if ($skill == 'RWD Boostrap') {
            array_push($listNilai,20);
         }else if ($skill == 'PHP') {
            array_push($listNilai,30);
         }else if ($skill == 'Phyton') {
            array_push($listNilai,30);
         } else {
            array_push($listNilai,50);
         }
         echo $skill. " ,";
           
 
       }




   }



    $nilai = array_sum($listNilai);

    echo "<br> Domisili: $Domisili";
    echo "<br> Email: $Email";
    echo "<br> Total Nilai:  $nilai";
   

    if ($nilai == 0){
        echo "<br> predikat: Tidak Memadai";
    } else if ($nilai >0 AND $nilai <= 40) {
        echo "<br> Predikat: Kurang";
    } else if ($nilai >40 AND $nilai <= 60) {
        echo "<br> Predikat: Kurang";
    } else if ($nilai >60 AND $nilai <= 100) {
         echo "<br> Predikat: Baik";
    } else{
        echo "<br> Predikat : Sangat Bagus";
   }
 
   
   }
  

?>