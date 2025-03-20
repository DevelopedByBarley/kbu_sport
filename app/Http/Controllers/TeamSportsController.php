<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TeamSport;
use Core\Database;

class TeamSportsController extends Controller
{
  private $TeamSport;
  private $db;

  public function __construct()
  {
    $this->TeamSport = new TeamSport();
    $this->db = Database::getInstance();

    parent::__construct();
  }

  public function index()
  {
    $duel_sports = $this->db->prepare("SELECT team_sports.*, users.id AS user_id, users.name AS user_name FROM team_sports")->leftJoin('users', 
    [['users.team_sportRef_id', '=', 'team_sports.id']]
    )->execute([])
    ->get();

    $reduced = array_reduce($duel_sports, function ($buff, $item) {
      if (!isset($buff[$item->id])) {
        $buff[$item->id] = $item;  // Az id-t kulcsként használjuk
        $buff[$item->id]->users = [];
      }

      if ($item->user_id) {
        $buff[$item->id]->users[] = (object)[
          'id' => $item->user_id,
          'name' => $item->user_name
        ];
      }
      return $buff;
    }, []);  // Kezdeti érték: üres tömb

    return $reduced;
  }
}
