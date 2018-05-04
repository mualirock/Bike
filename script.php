<?php 
include "db_connection.php";

// if (isset($_POST['get_option2'])) {
// 	# code...
// 	echo $UserId=$_POST['get_option2'];
// }

if(isset($_POST['get_option']))
{
  echo $status = $_POST['get_option'];
  // $UserId=$_POST['get_option2'];


if($status=='Block'){

  $update=mysql_query("UPDATE userregistration SET Status='Block' WHERE UserId=1");
}

else
{
	$update=mysql_query("UPDATE userregistration SET Status='Unblock' WHERE UserId=1");
}
}	
	
?>