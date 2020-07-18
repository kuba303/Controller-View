<?php

declare(strict_types=1);

namespace ViewApp;
// debug
require_once("src/utils/debug.php");

// Controller class
require_once("src/Controller.php");

// set const action
const DEFAULT_ACTION = 'home';

// what on url??
$action = $_GET['action'] ?? DEFAULT_ACTION;

$controller = new Controller();
$controller->run($action);
