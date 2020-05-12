<?php

function get_price($name)
{
	$products = [
		"ball"=>7,
		"car"=>5,
		"hat"=>10		
	];
	
	foreach($products as $product=>$price)
	{
		if($product==$name)
		{
			return $price;
			break;
		}
	}
}

?>


