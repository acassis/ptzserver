<?php

if (isset($_GET['mov']) && isset($_GET['force']))
{
	$forc = $_GET['force'];
	$mv = $_GET['mov'];

	if ($mv == 'up' || $mv == 'down' || $mv == 'left' || $mv == 'right' || $mv == 'in' || $mv == 'out')
	{
		exec("./pelco -p0 -b2400 -a1 -f$forc -t100 $mv");
	}
	###
}

?>
