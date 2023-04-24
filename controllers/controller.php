<?php

require_once("models/model.php");
class Controller {
  public function __construct() {
    $this->model = new Model();
  }

  static function index() {
    require_once("views/index.php");
  }

  public function f_Send() {
    $oModelo = new Model();
    $bRes = $oModelo->f_Send($_POST);
    $vResult = ["message" => "An error occurred while saving the data", "status" => false];
    if ($bRes) {
      $vResult = ["message" => "Saved Data", "status" => $bRes];
    }
    echo json_encode($vResult);
  }
}
