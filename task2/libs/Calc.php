<?php
class Calc
{
	private $a;
	private $b;
	private $mem;

	public function setVariables ($a, $b){
		
		if (is_int($a)) $this->a =$a; 
			else{
				$this->a = (int)$a;
				return INT_ERROR_CONFIG;
			}
		if (is_int($b)) $this->b = $b; 
			else{
				$this->b = (int)$b;
				return INT_ERROR_CONFIG;
			}
		return true;
	}

	public function add(){
		return $this->a + $this->b;
	}

	public function substract(){
		return $this->a - $this->b;
	}

	public function multiply(){
		return $this->a * $this->b;
	}
	
	public function divide(){
		if (0 == $this->b) return DEVISION_CONFIG;
			else return $this->a / $this->b;
	}

	public function square(){
		return $this->b * $this->b;
	}

	public function getSqrt($var){
		return sqrt($var);
	}

	public function memRead(){
		return $this->mem;
	}

	public function memClear(){
		$this->mem = 0;
		return $this->mem;
	}

	public function memAdd($var){
		$this->mem += $var;
		return true;
	}
	
	public function memSub($var){
		$this->mem -= $var;
		return true;
	}

	public function percent(){
		return ($this->a / 100)*$this->b;
	}



}
?>
