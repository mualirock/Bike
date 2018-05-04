<?php

if(!mysql_connect("localhost","root","")){
	echo "Db connection error...";
}

if(!mysql_select_db("bikezone")){
	echo "DB selection error...";
}

?>