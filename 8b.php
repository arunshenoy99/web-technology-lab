<?php
    $a = array(array(1,2,3),array(4,5,6),array(7,8,9));
    $b = array(array(7,8,9),array(4,5,6),array(1,2,3));

    $m=count($a);
    $n=count($a[2]);
    $p=count($b);
    $q=count($b[2]);

    echo " <b> THE FIRST MATRIX: </b><br/>";
    for ($row = 0; $row < $m; $row++)
    {
    	for($col = 0; $col < $n; $col++)
    	{
    		echo" ".$a[$row][$col];
    	}
    	echo"</br>";
    }

    echo " <b> THE SECOND MATRIX: </b><br/>";
    for ($row = 0; $row < $m; $row++)
    {
    	for($col = 0; $col < $n; $col++)
    	{
    		echo" ".$b[$row][$col];
    	}
    	echo"</br>";
    } 

    echo " <b> THE TRANSPOSE OF THE FIRST MATRIX is: </b><br/>";
    for ($row = 0; $row < $m; $row++)
    {
    	for($col = 0; $col < $n; $col++)
    	{
    		echo " ".$a[$col][$row];
    	}
    	echo"</br>";
    } 

    echo " <b> THE TRANSPOSE OF THE SECOND MATRIX is: </b><br/>";
    for ($row = 0; $row < $p; $row++)
    {
    	for($col = 0; $col < $q; $col++)
    	{
    		echo" ".$b[$col][$row];
    	}
    	echo"</br>";
    } 

    if(($m===$p) and ($n===$q))
    {
        echo " <b> THE ADDITION OF  MATRICES is: </b><br/>";
        for ($row = 0; $row < 3; $row++)
        {
    	    for($col = 0; $col < 3; $col++)
    	    {
    		    echo" ".$a[$row][$col]+$b[$row][$col]." ";
    	    }
    	    echo"</br>";
        }
    }

    if($n===$p)
    {
    	echo " <b> THE MULTIPLICATION OF  MATRICES is: </b><br/>";
    	$result=array();
    	for($i=0; $i < $m; $i++)
    	{
    		for($j=0; $j < $q; $j++)
    		{
    			$result[$i][$j] = 0;
    			for($k=0; $k < $n; $k++)
    			{
    				$result[$i][$j] += $a[$i][$k] * $b[$k][$j];
    			}
    		}	
    	}
    	for ($row = 0; $row < $m; $row++)
        {
    	    for($col = 0; $col < $q; $col++)
    	    {
    		    echo" ".$result[$row][$col];
    	    }
    	    echo"</br>";
        }
    }
?>    