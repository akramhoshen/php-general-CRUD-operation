<?php
  require_once("db_config.php");
  
  if(isset($_POST["save"])){
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    $repassword=$_POST["repassword"];

    if($password==$repassword){
        $password=md5($password);
        $now=date("Y-m-d H:i:s");
        $db->query("insert into users(username,password,created_at)values('$username','$password','$now')");
    }else{
        echo "Password did not match";
    }

}

?>
<form action="#" method="post">
  <div>
   Username<br>
   <input type="text" name="username" />   
</div>
<div>
   Password<br>
   <input type="password" name="password" />
</div>
<div>
   Retype Password<br>
   <input type="password" name="repassword" />
</div>
<div>   
   <input type="submit" name="save" value="Save" />
</div>
</form>

<?php
 include("select.php");
?>