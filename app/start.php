<?php

ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('BASE_URL', 'http://localhost/stef.host/php-basic-cms/');

$db = new PDO('mysql:host=localhost;dbname=cms_learn', 'admin', 'admin');

require 'functions.php';