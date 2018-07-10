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
?>
