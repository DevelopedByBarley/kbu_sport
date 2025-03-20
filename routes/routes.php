

<?php

use App\Http\Controllers\DuelSportsController;
use App\Http\Controllers\TeamSportsController;
use App\Http\Controllers\UserController;
use Core\Session;

$router->get('/', function () {
  return view('components/layout', [
    'root' => view('welcome', [
      'team_sports' => (new TeamSportsController)->index(),
      'duel_sports' => (new DuelSportsController)->index(),
      'errors' => Session::get('errors', [])
    ])
  ]);
});

$router->post('/user/register', [UserController::class, 'store']);

require base_path('routes/admin.php');
require base_path('routes/api/user.php');
require base_path('routes/api/team_sports.php');
require base_path('routes/api/duel_sports.php');
