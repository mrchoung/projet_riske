<?php

Class Unit 
{
	public $strength;
	public $type;
	public $price;

	const ELF_TYPE = 1;
	const MAN_TYPE = 2;
	const ORC_TYPE = 3;

	const ELF_COST = 20;
	const MAN_COST = 15;
	const ORC_COST = 25;

	public function __construct($typeUnit) {						// Construct of unit with the type of unit. By that, define set the cost and strength
		$this->setType($typeUnit);
		if ($typeUnit == self::MAN_TYPE) {
			$this->strength = 40;
		} else if ($typeUnit == self::ELF_TYPE) {
			$this->strength = 55;
		} else if ($typeUnit == self::ORC_TYPE) {
			$this->strength = 70;
		}
		$this->type = $typeUnit;
		$this->setPrice($typeUnit);
	}

	public function getStrength() {
		return $this->strength;
	}

	public function getType() {
		return $this->type;
	}

	public function getPrice() {
		return $this->price;
	}

	/*public function setStrength($strength, Area $area) { 			Set the strength unit when this on own area
		if ($this->on specific area) {
			$strength = $this->strength*Coeff;
		} else {
			$strength = $this->strength;
		}
	}*/



	// End of get function

	public function setStrength($strength) {
		if (is_int($strength)) {
			$this->strength = $strength;
		} else {
			return false;
		}
	}

	public function setArea(Area $area) {
		$this->area = $area;
	}

	public function setType($typeUnit) {
		if (in_array($typeUnit, [self::MAN_TYPE, self::ELF_TYPE, self::ORC_TYPE])) {
			$this->type = $typeUnit;
		} else {
			return false;
		}
	}

	private function setPrice($price) {       			
		if (in_array($price, [self::MAN_PRICE, self::ELF_PRICE, self::ORC_PRICE])) {
			$this->price = $price;
		} else {
			return false;
		}
	}

}

