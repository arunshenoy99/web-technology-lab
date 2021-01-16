<?php
    $states = "Mississipi Alabama Texas Massachusetts Kansas";
    $statesArray = [];
    $split = explode(' ',$states);

    echo"<b>Original Array </b><br/>";
    foreach($split as $i => $value)
    {
    	print("STATES[$i]=$value<br>");
    }

    echo"<b>Searching for the said patterns.. </b><br/>";
    foreach($split as $state)
    {
    	if(preg_match( ' /xas$/', ($state)))
    		$statesArray[0]=($state);
    }

    foreach($split as $state)
    {
    	if(preg_match( ' /^k.*s$/i', ($state)))
    		$statesArray[1]=($state);
    }
    
    foreach($split as $state)
    {
    	if(preg_match( ' /^M.*s$/', ($state)))
    		$statesArray[2]=($state);
    }

    foreach($split as $state)
    {
    	if(preg_match( ' /a$/', ($state)))
    		$statesArray[3]=($state);
    }	
     
    echo"<b>Resultant Array : </b><br/>";
    foreach($statesArray as $array => $value)
    {
    	print("STATES[$array]=$value<br>");
    }	
?>    	