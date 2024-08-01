<?php
  require_once("db_config.php");

  $r=$db->query("select id,username,password,created_at from users");
  
  while($row=$r->fetch_object()){   
    echo $row->id." | ".$row->username." | ".$row->created_at."<br>";
  }

?>