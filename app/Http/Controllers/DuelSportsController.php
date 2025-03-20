<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DuelSport;
use App\Models\TeamSport;
use Core\Database;

class DuelSportsController extends Controller
{
  private $DuelSport;
  private $db;
  public function __construct()
  {
    $this->DuelSport = new DuelSport();
    $this->db = Database::getInstance();
    parent::__construct();
  }

  public function index()
  {
    $duel_sports = $this->db->prepare("SELECT duel_sports.*, users.id AS user_id, users.name AS user_name FROM duel_sports")->leftJoin('users', [['users.duel_sportRef_id', '=', 'duel_sports.id']])->execute([])->get();

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
