<?php

if(isset($_POST['get_option']))
{
 include "db_connection.php";

 $state = $_POST['get_option'];
 $find=mysql_query("SELECT * FROM test WHERE Brand = '$state'");
 ?>
<option value="">--select--</option>
 <?php
 while($row=mysql_fetch_array($find))
 {
  echo "<option>".$row['Model']."</option>";
 }
 exit;
}

?>
