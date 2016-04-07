<?php
require_once('classes.php');

/*
for($i = 0; $i < 1000; $i ++)
{
	//echo "Room $i: ";
	$testRoom= new Room("random");
	$testRoom->dispDoors();
	//$testRoom->unsetDoor("all");
	echo "<br/>";
}
*/

$floor = new Floor(5);
$floor->dispFloor();

?>