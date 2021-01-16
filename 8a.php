<!DOCTYPE HTML>
<html>
   <head>
   	 <style>
   	 	table,td,th
   	 	{
   	 		border: 1px solid black;
   	 		width: 33%;
   	 		text-align: center;
   	 		backgroung-color: Red;
   	 	}
   	 	table { margin: auto; }
   	 	input,p{text-align: right; }
   	 </style>
   	</head>
   	<body>
   		<form method="post">
   		  <table>
   			<caption><h2> SIMPLE CALCULATOR </h2></caption>
   			<tr><td>Value 1:</td><td><input type="text" name="num1"/></td>
   			  <td rowspan="2"><input type="submit" name="submit" value="calculate"/></td></tr>
   			  <tr><td>Value 2:</td><td><input type="text" name="num2"/></td></tr>
   		</form>
   		
   		    <?php
   		           if(isset($_POST['submit']))
   		           {
   		      	     $num1=$_POST['num1'];
   		      	     $num2=$_POST['num2']; 
   		      	     if(is_numeric($num1) and is_numeric($num2))
   		      	     {
							  if($num2 == 0) {
								  $div = "Cannot divide by 0";
							  } else {
								  $div = $num1 / $num2;
							  }
   		      		   echo "<tr><td colspan='2'> Addition: </td><td><p>".($num1+$num2)."</p></td></tr>";
   		      		   echo "<tr><td colspan='2'> Subtraction: </td><td><p>".($num1-$num2)."</p></td></tr>";
   		      		   echo "<tr><td colspan='2'> Multiplication: </td><td><p>".($num1*$num2)."</p></td></tr>";
   		      		   echo "<tr><td colspan='2'> Division: </td><td><p>".$div."</p></td></tr>";
   		      		   echo "</table>";
   		      	     }
   		      	     else
   		      	     {
   		      		   echo"<script type='text/javascript'>alert(' ENTER VALID NUMBERS ');</script>";
   		      	     } 	      
   		            }						
   	        ?>
   	      </table>
   	</body>
</html>   	       	