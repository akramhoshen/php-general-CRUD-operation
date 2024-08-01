<?php
require_once("db_config.php");
  
if(isset($_POST["delete"])){
    $id=$_POST["id"];
    $db->query("delete from users where id='$id'");
}
?>
<form action="#" method="post">
    ID <input size="4" type="text" name="id" />
    <input type="submit" name="delete" value="Delete" />
</form>

<?php
 include("select.php");
?>
