	<?php
	mysql_connect("localhost","root","")
	or die ("Server connection problem:".mysql_error());

	mysql_select_db("yourtech")
	or die ("Database problem:".mysql_error());
?>