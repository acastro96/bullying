
<?php

$mysqli=new mysqli("localhost","quebully_user","quebullyinghaces","quebully_bullying");

if (mysqli_connect_errno()) 
{
	echo 'Ha ocurrido un error interno, por favor inténtelo de nuevo más tarde. ';
	exit();
}

?>