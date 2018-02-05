<?php

namespace VictorMallet;

use VictorMallet\Controller\MessageController as MessageController;

class App {
	private static $instance = null;

	private function __construct() {
	}

	public static function getInstance() {
		if (is_null(self::$instance)) {
			self::$instance = new App();
		}
		return self::$instance;
	}

	public function init() {
		$this->initConfig();

		echo 'Version: ' . VERSION;

		echo '<br/>-------------------------<br/>';

		$sentence = MessageController::hello() . '<br/>';
		$sentence .= 'We are the ' . (new \DateTime())->format("Y-m-d") . '<br/>';
		$sentence .= MessageController::helloWorld();
		echo $sentence;

		echo '<br/>-------------------------<br/>';

		$myArray = [];
		for ($i = 0; $i < 10; $i++) {
			$myArray[$i] = $i;
		}
		foreach ($myArray as $key => $value) {
			echo $value . '<br/>';
		}

		echo '<br/>-------------------------<br/>';

		$i = 0;
		while ($i < 10) {
			$myArray[$i] = $i + 1;
			$i++;
		}

		$i = 0;
		do {
			echo $myArray[$i];
			$i++;
		} while ($i < 10);

		echo '<br/>-------------------------<br/>';

		try {
			if (1 === 2) {
			} else {
				throw new \Exception();
			}
		} catch (\Exception $e) {
			echo '/!\ New error thrown /!\\';
		}

		echo '<br/>-------------------------<br/>';

		$boo = 'Ghost';
		switch ($boo) {
			case 'Dog':
				echo 'Boo is a dog';
				break;
			case 'Human':
				echo 'Boo is a human';
				break;
			case 'Ghost':
			case 'Undead':
				echo 'Whatever Boo is, he\'scarying!';
				break;
			default:
				echo 'I don\'t know what is Boo';
				break;
		}

		echo '<br/>-------------------------<br/>';

		if ($boo === 'Dog') {
			echo 'Boo is a dog';
		} elseif ($boo === 'Human') {
			echo 'Boo is a human';
		} else {
			echo 'Boo is neither a Human nor a Dog.';
		}

		echo '<br/>-------------------------<br/>';

		$isADog = $boo === 'Dog';
		$isAHuman = $boo === 'Human';
		$isAGhost = $boo === 'Ghost';
		$isAnUndead = $boo === 'Undead';

		if ($isADog || $isAHuman) {
			echo 'Boo is Alive!';
		}
		if (
			$isADog
			&& $isAHuman
			&& $isAGhost
			&& $isAnUndead
		) {
			echo 'WTF is Boo!?';
		} else {
			echo 'I don\' know what is Boo!';
		}

		echo '<br/>-------------------------<br/>';
	}

	protected function initConfig() {
		date_default_timezone_set("Europe/Paris");
	}
}
