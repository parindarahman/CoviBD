<?php

$connect=mysqli_connect("localhost","root","","covibd");
$sql="SELECT total_cases, recovered, passed_away FROM covid_stat_overview";
$result=mysqli_query($connect,$sql);
$json_array=array();
while($row=mysqli_fetch_assoc($result))
{
	$json_array[]=$row;

}
echo json_encode($json_array);
?>