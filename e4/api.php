<?php
header("Content-Type:application/json");
require "data.php";

if(!empty($_GET['name']) and !empty($_GET['Skills']))
{
	$name=$_GET['name'];
	$Skills=$_GET['Skills'];

	$r = get_Skills($name,$Skills);
	
	if(empty($r))
	{
		response(200,"Technology Not Available",NULL);
	}
	else
	{
		response(200,"Technology is Available",$r);
	}	
}
else
{
	response(400,"Invalid Request",NULL);
}

function response($status,$status_message,$data)
{
	header("HTTP/1.1 ".$status);
	
	$response['status']=$status;
	$response['status_message']=$status_message;
	$response['data is correct']=$data;
	
	$json_response = json_encode($response);
	echo $json_response;
}
?>

