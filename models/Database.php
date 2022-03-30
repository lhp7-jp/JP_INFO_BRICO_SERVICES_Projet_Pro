<?php

class Database
{
  private $dbName = 'infobricoservices';
  private $user = 'admin';
  private $password = 'lhp7';

  public function connectDatabase()
  {
    try {
      $database = new PDO("mysql:host=localhost;dbname=$this->dbName;charset=utf8", $this->user, $this->password);
      $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $database;
    } catch (Exception $errorMessage) {
      die('Erreur : ' . $errorMessage->getMessage());
    }
  }
}