<?php 
require_once('config.php');
$query="SELECT * FROM videos";
$result = mysqli_query($con,$query);
return json_encode($result);
?>