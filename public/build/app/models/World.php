<?php

namespace MerciMichel\Model;

class World extends Hello {
	public static function talk() {
		$string = parent::talk();
		return $string . ' World';
	}
}
