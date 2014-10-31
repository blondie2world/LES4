


<?php

	$getal = 3;
	for($teller = 1; $teller<=10; $teller++)
	{
		if ($teller %2 != 0)
			continue;

		$product = $teller * $getal;
		echo("$teller x $getal = $product <br/>");
	}


/*	Deze pagina werkt nu wel */	


?>