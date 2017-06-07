<?php

namespace MerciMichel\Controller;

use MerciMichel\Model\Hello as Hello;
use MerciMichel\Model\World as World;

class MessageController {
	public static function hello() {
		return Hello::talk();
	}

	public static function helloWorld() {
		return World::talk();
	}
}
