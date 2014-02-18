//Grabs strategies from database using json_encode

<html>
<body>

<?php

$con=mysqli_connect("xxx","xxx","xxx", "xxx");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Strategies");
$resultTemp = array();

while($row = mysqli_fetch_array($result)){
	
   $Object['name'] = $row['Name'];
   $Object['strategy'] = $row['Strategy'];
   $temp = $row['ID'];
   $final[$temp] = $Object;
}

echo json_encode($final);
  
mysqli_close($con);
  ?>

</body>
</html>
