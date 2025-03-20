
<?php

use App\Http\Controllers\DuelSportsController;

  $router->get('/api/duel-sports', [DuelSportsController::class, 'index']);
?>