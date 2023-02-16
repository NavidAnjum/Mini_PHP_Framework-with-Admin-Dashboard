<?php

$router->get('/fabric_tracker/', 'controllers/index.php');

$router->post('/fabric_tracker/login', 'controllers/login.php');

$router->get('/fabric_tracker/dashboard', 'controllers/dashboard.php');

$router->get('/fabric_tracker/logout', 'controllers/logout.php');

$router->get('/fabric_tracker/users/create', 'controllers/users/create.php');

$router->post('/fabric_tracker/users/create', 'controllers/users/create.php');
