<?php
	
	$date=$_REQUEST['d'];
	$month=$_REQUEST['m'];
	$year=$_REQUEST['y'];
	$leap=0;
	$flag=0;
	$flag1=0;
	$m=$y=$d=0;
	
	if(empty($date))
	{
		echo "Cannot be empty";
		$flag=1;
	}
	else if(empty($month))
	{
		echo "Cannot be empty";
		$flag=1;
	}
	else if(empty($year))
	{
		echo "Cannot be empty";
		$flag=1;
	}
	
	else if($year%4 == 0)
    {
        if($year%100 == 0)
        {
            if ($year%400 == 0)
                $leap=1;
            else
                $leap=0;
        }
        else
            $leap=1;
		
    }
	
	if($flag!=1)
	{
		if(($leap==1)&&($month==2))
		{
			if(!(($date<=29)&&($date>=1)))
				$flag1=1;
		}
		else if(($month>=1)&&($month<=12)&&($date>=1)&&($date<=31)&&($year>=1953)&&($year<=1998))
		{
			if(($month==2)&&($date>28))
			{
				$flag1=1;
			}
			else if((($month==4)||($month==6)||($month==9)||($month==11))&&($date>30))
			{
				$flag1=1;
			}	
		}
		else
			$flag1=1;
	}
	if($flag1==1)
	{
		echo "Must be a valid number (dd: 1-31, mm: 1-12, yyyy: 1953-1998)";
	}
	if($month==2 and $date>=29)
	{
		echo "February cant have date greater then 29 if its not a leap year ";
	}
	else{
		
		if($month>12 or $date>31 or ($year<1953 or $year>1998 ) )
		{
				echo "input a valid date ";
		}
		
	}
	
	
?>