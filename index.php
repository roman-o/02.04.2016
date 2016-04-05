 <meta charset="utf-8"> 
<?php
class Car{
	public $type  ;
	public $color  ;
	public $transmision;
	public $engine;
	public $speed;
	public $time;
	
	public function drive() {
		echo "Установлен $this->engine  движок...разгоняюсь до $this->speed км\ч за $this->time сек";
		
	}
}
class Jiguli extends  Car{
	public $engine = "стандартный";
	public $speed = "100";
	public $time = "40";
}

class Ferrari extends  Car{
	public $engine = "продвинутый";
	public $speed = "100";
	public $time = "3";
}

$lada = new Jiguli;

$fer = new Ferrari;
$lada -> drive();
echo "<br>";
$fer -> drive();
