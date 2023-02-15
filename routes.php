<?php

$router->get('/php_test/', 'controllers/index.php');

$router->post('/php_test/login', 'controllers/login.php');

$router->get('/php_test/dashboard', 'controllers/dashboard.php');

$router->get('/php_test/logout', 'controllers/logout.php');
