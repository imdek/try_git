<?php
require 'board.php';
require 'solution.php';



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


//Init
$possible = new \Ds\Vector();
$possible->push(100,120,150);

$target = new \Ds\Vector();
$target->push(45,25,15,85);

$solution = new \Ds\Vector();


$board1 = new board(100);
echo "Stored ".$board1->len()."cm\n";

$cut = new \Ds\Vector();
$cut->push($board1);
print_r($cut);

?>