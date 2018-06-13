<div>
  <h2>Liste fairelescourses</h2>
  <form action="http://localhost/poo-bon/index.php/tasks" method="post">
  <input type="text" id="myInput" name="name">
  <button type="submit" name="submit" id="add_btn" class="add_btn">Add</button>

  </form>
</div>

<?php

foreach ($tasks as $task) {
    echo '- '.$task["fairelescourses"].'<br />';
}




?>
