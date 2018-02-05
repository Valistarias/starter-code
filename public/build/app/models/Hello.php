<?php

namespace VictorMallet\Model;

class Hello {
	public static function talk() {
		return 'Hello';
	}

	final public static function SaySomethingToSomeone($firstname, $str = 'Hello') {
		return $str . ' ' . $firstname;
	}

	// Same method but with multiple lines
	// final public static function SaySomethingToSomeone(
	// 	$firstname,
	// 	$str = 'Hello'
	// ) {
	// 	return $str . ' ' . $firstname;
	// }
}
