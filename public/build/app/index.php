<?php

require_once(dirname(__FILE__) . "/models/Hello.php");
require_once(dirname(__FILE__) . "/models/World.php");
require_once(dirname(__FILE__) . "/controllers/HelloController.php");
require_once(dirname(__FILE__) . "/core/App.php");

use VictorMallet\App as App;

const VERSION = '1.0';

$App = App::getInstance();
$App->init();
