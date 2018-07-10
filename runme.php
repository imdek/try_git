<?php


class board{
	private $length = 0;
	function __construct($lng){
		$this->length=$lng;
		echo "Construct: ".$this->length."\n";
	}
	function len(){
		return $this->length;
	}
}

class temp{
	var $tmp;

	function __construct()
	{
		echo "const";
		$tmp = "123";
	}

	function out()
	{
		echo "123";
	}
}


$board1 = new board(100);
echo "Stored ".$board1->len()."cm\n";

$vector = new \Ds\Vector();

$vector->push('a');
$vector->push('b', 'c');

$vector[] = 'd';

print_r($vector);


$vector2 = new \Ds\Vector();
$vector2->push(new temp());
$vector2[0]->out();

?>