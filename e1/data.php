<?php

function get_skills($name)
{
	$technologies = [
		"Data Analytics"=>"Python C Java",
		"Cyber Security"=>"Linux OS Python",
		"Mobile Application Development"=>"Java Android Studio C"		
	];
	
	foreach($technologies as $technology=>$skills)
	{
		if($technology==$name)
		{
			return $skills;
			break;
		}
	}
}

?>

