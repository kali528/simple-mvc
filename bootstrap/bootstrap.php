<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once '../application/routing/Router/Router.php';
require_once '../application/helpers/helper_functions.php';

Router::route( $_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD'], 'routes' );