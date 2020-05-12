<?php
header("Content-Type:application");
require "data.php";

if(!empty($_GET['name']))
{
	$name=$_GET['name'];
	$skills = get_skills($name);
	
	if(empty($skills))
	{
		response(NULL);
	}
	else
	{
		response($skills);
	}	
}
else
{
	response(NULL);
}

function response($data)
{
	header("HTTP/1.1 ");
	
	echo $data;
}

?>

