<!DOCTYPE HTML>
<html>
<body>
	<style>
		table,td,th
		{
			border: 1px solid black;
			width: 33%;
			text-align: left;
			border-collapse:collapse;
			background-color:lightblue;
		}
		table { margin : auto ; }
	</style>

	<?php
	    $servername = "localhost";
	    $username = "root";
	    $password = "";
	    $dbname = "test";
	    $a =[];

	    $conn = mysqli_connect($servername, $username, $password, $dbname);

	    if($conn->connect_error)
	    	die("Connection failed: " . $conn->connect_error);

	    $sql = "SELECT * FROM student";
	    $result = $conn->query($sql);

	    echo "<br>";
	    echo "<center> BEFORE SORTING(BY USN) </center>";
	    echo "<table border='2'>";
	    echo "<tr>";
	    echo"<th>USN</th><th>Name</th><th>Address</th></tr>";

	    if($result -> num_rows > 0)
	    {
	    	while($row = $result ->fetch_assoc())
	    	{
	    		echo "<tr>";
	    		echo " <td>".$row["USN"]."</td>";
	    		echo " <td>".$row["NAME"]."</td>";
	    		echo " <td>".$row["ADDRESS"]."</td> </tr>";
	    		array_push($a,$row["USN"]);
	    	}
	    }
	    else
	    {
	    	echo"Table is empty ";
	    }

	    echo"</table>";

	    $n=count($a);
	    $b=$a;
	    for ( $i = 0; $i < ($n - 1); $i++)
	    {
	    	$pos = $i;
	    	for( $j = $i + 1; $j < $n; $j++)
	    	{
	    		if($a[$pos] > $a[$j] )
	    			$pos=$j;
	    	}
	    	if($pos!= $i)
	    	{
	    		$temp=$a[$i];
	    		$a[$i] = $a[$pos];
	    		$a[$pos] = $temp;
	    	}
	    }
	    $c=[];
	    $d=[];
	    $result = $conn->query($sql);

	     if($result-> num_rows > 0)
	    {
	    	while($row = $result ->fetch_assoc())
	    	{
	    		for( $i = 0; $i < $n; $i++)
	    		{
	    			if($row["USN"]==$a[$i])
	    			{
	    				$c[$i]=$row["NAME"];
	    				$d[$i]=$row["ADDRESS"];
	    			}
	    		}
	    	}
	    }
	    
	    echo "<br>";
	    echo "<center> AFTER SORTING(BY USN) </center>";
	    echo "<table border='2'>";
	    echo "<tr>";
	    echo"<th>USN</th><th>Name</th><th>Address</th> </tr>";
	    for( $i = 0; $i < $n; $i++)
	    {
            echo "<tr>";
	    		echo " <td>".$a[$i]."</td>";
	    		echo " <td>".$c[$i]."</td>";
	    		echo " <td>".$d[$i]."</td></tr>";
	    }
	    echo"</table>";

	    $conn->close();
	?>
</body>
</html>	