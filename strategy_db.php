//This saves the strategies to the database


<html>
<body>

<?php
//connect
$o_name = $_GET['name'];
$o_strategy = $_GET['strategy'];

$con=mysqli_connect("xxx","xxx","xxx", "xxx");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$sql = "INSERT INTO Strategies (Name, Strategy) VALUES ('$o_name', '$o_strategy')");

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";


mysqli_close($con);

$someObject['somedata'] = "asdasdasdasd;

echo josn_encode($someObject);


?>




</body>
</html>
