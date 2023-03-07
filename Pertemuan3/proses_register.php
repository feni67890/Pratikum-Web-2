<?php
if(isset($_POST['submit'])){
   $nim =$_POST['nim'];
   $nama=$_POST['nama'];
   $gender=$_POST['gender'];
   $prodi=$_POST['prodi'];
   $skills=$_POST['skill'];
   $domisili=$_POST['domisili']; 
   $email=$_POST['email'];


   function skor_skill($skills){
      foreach($skills as $skills){
         $result = $result + $skill_lists [$skill];

         return $result;
         }
      }
   }
   echo "NIM: $nim";
   echo "<br> Nama: $nama";
   echo "<br> Jenis Kelamin: $gender";
   echo "<br> Program Studi: $prodi";
   echo "<br> Skill Programming: ";
   
   foreach($skills as $skills){
      echo $skills.",";
   }
   echo "<br> Domisili: $domisili";
   echo "<br> Email: $email";
   echo "<br> skor skill" . skor;
   echo"<br> kategori skills" ;

}
