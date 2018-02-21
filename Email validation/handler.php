<?php
	var_dump($_REQUEST);
	$email=$_REQUEST['Email'];
	$count=0;
	$flag=0;
	$flag1=0;
	$flag2=0;
	$c=0;
	
	for($i=0;$i<strlen($email)&&!(empty($email));$i++)
	{
		if($email[$i]=='@')
		{
			$flag1=0;
			$c=$i;
			for(;$i<strlen($email);$i++)
			{
				if($email[$i]=='.')
				{
					$count++;
					$flag2=0;
				}	
				
				else if($count==0)
					$flag2=1;
			}
			if($count>1)
			{
				$flag=1;
			}
			break;
		}
		else
			$flag1=1;
	}
	for($i=0;$i<strlen($email)&&!(empty($email));$i++)
	{
		if(!(($email[$i]>='A' && $email[$i]<='Z')||($email[$i]>='a' && $email[$i]<='z')||($email[$i]>='0' && $email[$i]<='9')||($email[$i]=='@')||($email[$i]=='_')||($email[$i]=='.')))
		{
			$flag=1;
			break;
		}
	}
	if(empty($email))
	{
		echo "Cannot be empty";
	}
	else if($c==0)
	{
		$flag=1;
	}
	else if(!(($email[$c+1]>='A' && $email[$c+1]<='Z')||($email[$c+1]>='a' && $email[$c+1]<='z')))
	{
		$flag=1;
	}
	if(($flag==1)||($flag2==1)||($flag2==1))
	{
		echo "Must be a valid email address (i.e anything@example.com)";
	}
	echo $_REQUEST['Email'];
?>