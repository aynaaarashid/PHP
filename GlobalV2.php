<?php

$name="Ameesha";

function getName(){
	global $name;
	echo $name; //tidak akan dipanggil
}

getName()

?>