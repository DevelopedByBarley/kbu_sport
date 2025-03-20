
<?php

use App\Http\Controllers\TeamSportsController;

  $router->get('/api/team-sports', [TeamSportsController::class, 'index']);
?>