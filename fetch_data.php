<?php
if(isset($_POST['get_option']))
{
 include "db_connection.php";

 $brand_name = $_POST['get_option'];
 $find=mysql_query("select Model from bikemodel where Brand='$brand_name'");
 ?>
<option value=""> Select Model</option>
 <?php
 while($row=mysql_fetch_array($find))
 {
  echo "<option>".$row['Model']."</option>";
 }
 exit;
}
?>