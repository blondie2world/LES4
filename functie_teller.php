<?php

	function tellerTest()
	{
		global $teller;
		echo ("de teller is $teller</br>");
		$teller++;
	}

	$teller = 45;
	echo("$teller<br/>");

	tellerTest();
	echo ("teller is nu $teller na de functieaanroep");



?>