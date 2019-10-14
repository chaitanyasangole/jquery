<?php 
	if(isset($_POST))
	{
		echo "form get";
		print_r($_POST);
	}
	else
	{
		echo "form not submit";
	}
?>