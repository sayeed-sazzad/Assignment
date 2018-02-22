<?php



	$date = $_REQUEST["d"];
	$month = $_REQUEST["m"];
	$year = $_REQUEST["y"];
	
	
	$leap=0;
	$flag=0;
	$flag1=0;
	
	
	if(empty($date))
	{
		echo "Cannot be empty";
		
	}
	
	
	
	else if(empty($month))
	{
		echo "Cannot be empty";
		
	}
	
	
	
	
	else if(empty($year))
	{
		echo "Cannot be empty";
		
	}
	
	
	
	
	
	else if(($year%4 == 0) && !(empty($year)))
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
	
	
	if( ($month>=1)&& ($month<=12) && ($date>=1)&& ($date<=31) && ($year>=1953)&& ($year<=1998))
	{
		
		if(($month==2 && $date>28) )
		{
			
			
			 if(($month==2 && $date==29 && $leap!=1))
			{
				
				echo "It's not a leap year";
			}
			
			else if($date>29){
				
				echo"February month can not me more than 28 days";
			}
			
		}
		
		
		
		
		else if(((($month==4) || ($month==6) || ($month==9) || ($month==11)) && $date > 30))
		{
			echo "Date and month should be matched";
		}
		
		
		else if(((($month==1) || ($month==3) || ($month==5) || ($month==7) || ($month==8) || ($month==10) || ($month==12)) && $date>31))
		{
			echo "Date and month should be matched";
		}
	}
	else{
		
		echo "Date and month should be matched";
	}
	
	
	
	
	



?>