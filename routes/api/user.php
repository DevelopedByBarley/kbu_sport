<?php

use App\Http\Controllers\UserController;

$router->get('/api/user/{id}', [UserController::class, 'checkId']);
