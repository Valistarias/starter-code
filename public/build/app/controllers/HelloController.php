<?php

namespace VictorMallet\Controller;

use VictorMallet\Model\Hello as Hello;
use VictorMallet\Model\World as World;

class MessageController {
	public static function hello() {
		return Hello::talk();
	}

	public static function helloWorld() {
		return World::talk();
	}
}
