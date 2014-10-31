<?php
	$temperatuur = 30;
	if ($temperatuur >=28)
		{ 
			$strand = true;
			echo ("Pak de koelbox, we gaan naar het strand");
		}

	elseif ($temperatuur >=15)
		{
			$strand = false;
			echo ("We gaan shoppen!");
		}
	

	else
		{
			$strand = false;
			echo ("We blijven thuis");

		}

?>