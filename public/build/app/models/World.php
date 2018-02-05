<?php

namespace VictorMallet\Model;

class World extends Hello {
	public static function talk() {
		$string = parent::talk();
		return $string . ' World';
	}
}
