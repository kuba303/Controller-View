<?php

declare(strict_types=1);

namespace ViewApp;
// debug
require_once("src/utils/debug.php");

// Controller class
require_once("src/Controller.php");



$controller = new Controller($_GET, $_POST);
$controller->run();
