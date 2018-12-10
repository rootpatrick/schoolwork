<?php
    $con= mysqli_connect("localhost","root","","pumbu");
	if(isset($_POST['serch'])){
    $name = $_POST['search'];
   //echo  $name;
   $query = "SELECT * FROM users_details WHERE username='$name'";
  // echo  $query;
$result = mysqli_query($con,$query);
	

if ($row = mysqli_fetch_array($result))
{
        echo $row['username'] . " <br>" . $row['password'];
        echo "<br>";
}
else echo'pumbu';
    mysqli_close($con);
	}
    ?>