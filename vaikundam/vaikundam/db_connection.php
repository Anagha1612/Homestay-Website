<?php
	$connect=new mysqli("localhost", "root" , "4589", "vaikundam");
	if(!$connect)
	{
		die('Could not connect:'.mysql_error());
	}
?>