<?php
class motor {
   
    public $merk;
    public $bensin;
    public $topspeed;
    public $cc;

    
    public function __construct($merk,$bensin,$topspeed,$cc)
    {
        $this->merk = $merk;
        $this->bensin= $bensin;
        $this->topspeed= $topspeed;
        $this->cc = $cc;
    }
    public function jalan($jarak)
    {
       $jalan = $jarak / 30;
       $waktu = $jarak / $this->topspeed;
       $this->bensin -= $jalan;

       echo "Motor <p>$this->merk $this->cc cc</b>, telah berjalan sepangang <b>$jarak km<?b>
       dengan kecepatan<b>$this->topspeed km/h</b>, sampai ke tempat tujuan dengan waktu <b> $waktu jam</b> 
       dan bensin yang tersisa yaitu <b>$this->bensin liter</b> <hr><br>";
    }

}  


$motor = new motor('supra',4,200,230);
$motor->jalan(20);

$motor = new motor('Beat',5,500,340);
$motor->jalan(30);

$motor = new motor('NMX',1,100,200);
$motor->jalan(10);

$motor = new motor('supra',6,200,1000);
$motor->jalan(40);

?>