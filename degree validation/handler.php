<?php

	$count=0;
	if(isset($_REQUEST['SSC']))
	{
		$count++;
	}
	if(isset($_REQUEST['HSC']))
	{
		$count++;
	}
	if(isset($_REQUEST['BSc']))
	{
		$count++;
	}
	if(isset($_REQUEST['MSc']))
	{
		$count++;
	}
	if($count<2)
	{
		echo "At least two of them must be selected";
	}
	
?>