<?php
class Model {
  private $db;
  public function __construct() {
    $this->db = new PDO("mysql:host=" . HOST . ":" . PORT . ";dbname=" . DATB, USER, PASS);
  }

  public function f_Send($mDatos) {
    $bResult = false;
    try {
      $qContact = "INSERT INTO contact (names, company_name, date_create, hour_create, status) ";
      $qContact .= "VALUES ('{$mDatos['inpName']}', '{$mDatos['inpCompany']}', CURDATE(), CURTIME(), 'active')";
      $oResult = $this->db->query($qContact);
      if ($oResult) {
        $bResult = true;
      }
    } catch (Exception $e) {
      echo "Error > " . $e;
      die();
    }
    return $bResult;
  }
}
