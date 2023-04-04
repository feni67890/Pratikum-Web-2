<?php
class Hero{
    // Attribut / properties pada class 
    public $name;
    public $health;
    public $damage;
    public $level = 1;

    // constructor akan di jalankan secara otomatis
    public function __construct($name,$health,$damage)
    {
        $this->name = $name;
        $this->health = $health;
        $this->damage = $damage;
    }
    public function getInfo(){
        echo "Name Hero:" . $this->name;
        echo "<br> level:" . $this->level;
        echo "<br> HP:".$this->health;
        echo "<br> damage:".$this->damage;
    }
    // method untuk naik satu level
    public function levelUp(){
        $this->level += 1;
    }
}

// membuat objek dari class Hero
$Hero1 = new Hero('Alucard',3200,200);
$Hero2 = new Hero('Franco',5000,50);

// memanggil method
$Hero1->getInfo();


echo "<br> <hr>";

$Hero1->levelUp();
$Hero1->getInfo();
