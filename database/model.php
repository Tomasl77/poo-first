<?php

class Model {

  private $user = 'root';
  private $password = '';
  private $dbname = 'todolist';
  private $host = 'localhost';
  private $port = 3306;

  public function connect () {
    try {
      $db = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->user, $this->password);
      $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      echo 'Je suis bien connecté a ma DB';
      return $db;
    }
    catch (PDOException $e) {
      echo 'not connected';
      die();
    }
  }

}

?>
