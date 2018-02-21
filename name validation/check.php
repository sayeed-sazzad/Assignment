<?php

	$name=$_REQUEST["name"];
	$flag=0;
	if(empty($name)){
		
		echo "can not be empty";
	}
	
	else if($name[0]=='0' || $name[0]=='1' || $name[0]=='2' || $name[0]=='3' || $name[0]=='4' || $name[0]=='5' || $name[0]=='6' || $name[0]=='7' || $name[0]=='8' || $name[0]=='9')
	{
		echo "first letter can not start with digit";
	}
	
	else if(str_word_count($name < 2))
	{
		echo "contains at least two words";
	}
	
	else{
		
		for($i=0;$i<strlen($name)&&!(empty($name));$i++)
		{
			if(!(($name[$i]>='A' && $name[$i]<='Z')||($name[$i]>='a' && $name[$i]<='z')||($name[$i]=='-')))
			{
				$flag=1;
				break;
			}
		}
		
		if($flag==1)
		{
			echo "can contain a-z , A-Z , period dash only";
		}
	}
		

?>