<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DuelSport;
use App\Models\TeamSport;
use App\Models\User;
use Core\Database;
use Core\Session;
use Core\ValidationException;

class UserController extends Controller
{
  private $User;
  private $TeamSport;
  private $DuelSport;
  private $db;

  public function __construct()
  {
    parent::__construct();
    $this->db = Database::getInstance();
    $this->User = new User();
    $this->TeamSport = new TeamSport();
    $this->DuelSport = new DuelSport();
  }

  public function checkId($vars)
  {
    $ident_num = $vars[0];
    echo $this->db->query("SELECT COUNT(*) AS count FROM users WHERE ident_number = :ident_num", [':ident_num' => $ident_num])->find()->count;
  }

  public function store()
  {
    $duel_sport = null;
    $team_sport = null;
    $this->request->setNull('actimo');
    $this->request->setNull('transfer');
    $this->request->setNull('vegetarian');
    $this->request->setNull('team_sportRef_id');
    $this->request->setNull('duel_sportRef_id');

    try {
      $validated = $this->request->validate([
        'name' => ['required', 'min:6', 'max:50'],
        'class' => ['required', 'min:3'],
        'email' => ['required', 'email', 'min:7', 'max:100'],
        'ident_number' => ['required', 'min:6', 'max:8', 'unique:ident_number|users'],
      ]);

      if ($validated['team_sportRef_id']) {
        $team_sport = $this->TeamSport->find($validated['team_sportRef_id'])->name;
      }

      if ($validated['duel_sportRef_id']) {
        $duel_sport = $this->DuelSport->find($validated['duel_sportRef_id'])->name;
      }

      $this->User->create($validated);

      $this->mailer->prepare($validated['email'], 'Regisztráció hitelesítése')->template('feedback', ['user_name' => $validated['name'], 'team_sport' => $team_sport, 'duel_sport' => $duel_sport])->send();

      $this->toast->success('Regisztráció sikeresen megtörtént! A megadott e-mail címre visszaigazoló levelet küldtünk. Jó sportolást kívánunk.')->back();
    } catch (ValidationException $e) {
      Session::flash("old", $e->old);
      Session::flash("errors", $e->errors);
      $this->toast->danger("Jelentkezés sikertelen, kérjük próbálja meg helyes adatokkal.")->back();
    }
  }
}
