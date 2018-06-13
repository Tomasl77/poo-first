<?php

  require_once $app."/database/model.php";

  class TaskModel extends Model {

    public function getAll () {

      $db = parent::connect();
      $sql = 'select * from tasks';
      $query = $db->prepare($sql);
      $query->execute();
      $tasks = $query->fetchAll();
      return $tasks;

    }

    public function createTask () {
      //echo 'hello';
      $name = $_POST['name'];
      //echo $name;
      $db = parent::connect();
      $addtask = 'INSERT INTO tasks(fairelescourses) values(:name)';
      $query = $db->prepare($addtask);
      $query->bindValue(':name', $name, PDO::PARAM_STR);
      $query->execute();
      $tasks = $this->getAll();
      return $tasks;

    }

   /* public function deleteTask (){

      $name = $_DELETE['name'];
      $db = parent::connect();
      $deletetask = 'DELETE FROM tasks(fairelescourses) values(:name)';
      $query = $db->prepare($deletetask);
      $query->bindValue(':name', $name, PDO::PARAM_STR);
      $query->execute();
      $tasks = $this->getAll();
      return $tasks;

    }*/

}

?>
