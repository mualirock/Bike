  
<?php
include "db_connection.php";

if(isset($_GET['id']))
{
/*  $Stat= $_GET["id"];
  $Status= $_GET["age"];*/
  $UserId= $_GET["a"];

 $update=mysql_query("UPDATE usedbikes SET  Status='".$_GET['age']."' 
  WHERE usedbikeId='".$_GET['id']."'");
 if($update){
    header("Location: cus_post.php?UserId=".$UserId);
 }
  
}

?>
