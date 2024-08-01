<?php
  require_once("db_config.php");
  
  if(isset($_POST["go"])){
    $id=$_POST["id"];    
     $r=$db->query("select id,username,password from users where id='$id'");
     $row=$r->fetch_object();

  }

  if(isset($_POST["save"])){
    $id=$_POST["id"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    $repassword=$_POST["repassword"];

    if($password==$repassword){
        $password=md5($password);       
        $db->query("update users set username='$username',password='$password' where id='$id'");
    }else{
        echo "Password did not match";
    }

}

?>
<form action="#" method="post">
<div>
   Id<br>
   <input type="text" name="id" value="<?php echo isset($id)?$id:""?>" /> 
   <input type="submit" name="go" value="Go">  
</div>
  <div>
   Username<br>
   <input type="text" name="username" value="<?php echo isset($row->username)?$row->username:""?>" />   
</div>
<div>
   Password<br>
   <input type="password" name="password" value="<?php echo isset($row->password)?$row->password:""?>" />
</div>
<div>
   Retype Password<br>
   <input type="password" name="repassword" />
</div>
<div>   
   <input type="submit" name="save" value="Save Change" />
</div>
</form>

<?php
 include("select.php");
?>