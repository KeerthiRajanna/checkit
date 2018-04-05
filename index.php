<?php
class Mammals{
	
	
	public $species ;
	public $lifespan;
	public $vertebrates;
	
	function __construct($m, $l,$v){
	
		$this->animal = $m;
		$this->lifespan = $l;
		$this->vertebrates =$v;
	}
	
	function lifespan_increase(){
		
		return $this->lifespan++;
	}
	
	function lifespan_decrease(){
		
		return $this->lifespan--;
	}
}
$mammal1 = new Mammals('human being', 79,'YES');
$mammal2 = new Mammals('elephant ',48 ,'YES ');

echo "ANIMAL="."&nbsp". $mammal1->animal."<br>";
echo "LIFE SPAN="."&nbsp". $mammal1->lifespan."<br>";
echo "IS VERTEBRATES?"."&nbsp". $mammal1->vertebrates."<br>"."<br>"."<br>";

class Mammals_layschildclass extends Mammals{
	public $islayschildclass="true";
	
	function __construct(){
		$this->animal = "platypus";
		$this->lifespan =12 ;
		$this->vertebrates="YES";
	}
	
	function lifespan_increase(){
		return $this->lifespan=$this->lifespan+5;
	}
}

$childclass = new Mammals_layschildclass();


echo "ANIMAL=".$childclass->animal."<br>";

$childclass->lifespan_increase();

echo "LIFE SPAN="."&nbsp". $childclass->lifespan."<br>";
echo "IS VERTEBRATES?"."&nbsp".$childclass->vertebrates."<br>";
echo "LAYS EGG =". "&nbsp".$childclass->islayschildclass;
?>