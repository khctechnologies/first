<?php
	function splitValues($values,$deliminator)
	{
		$i = 0;
		$new_values = array();
		$final_values = array();
		
		while($i < count($values))
		{
			$new_values[$i] = explode($deliminator,$values[$i]);
			$i++; //increment	
		}
		
		$i=0;
		$k=0;
		while($i<count($new_values))
		{
			$j=0;
			while($j<count($new_values[$i]))
			{
				$final_values[$k] = $new_values[$i][$j];
				$k++;
				$j++;
			}
			$i++;
		}
		
		print_r($final_values);
		
	}
	splitValues(array("one two", "three four five")," ");
?>