<?php
/**
 * RoxPHP
 *
 * Copyright (C) 2008 - 2011 Ramon Torres
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) 2008 - 2011 Ramon Torres
 * @package App
 * @license The MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

// include the bootstrap file
require dirname(__DIR__) . '/config/bootstrap.php';

if (!isset($_GET['route'])
	&& isset($_SERVER['REQUEST_URI'])
	&& strlen(trim($_SERVER['REQUEST_URI'])) > 0) {
	$_GET['route'] = $_SERVER['REQUEST_URI'];
}

$dispatcher = new \rox\http\Dispatcher;
$dispatcher->dispatch(new \rox\http\Request);
