<?php

	function printNaam ($naam)
		{
			echo ('<hr/> <div align="center">Uw naam: <strong>');
			echo ($naam);
			echo ('</strong></div><hr/>');
		}

		printNaam ("Boris Becker");

		$naam= "Jan Janssens";
		printNaam($naam);

		$gebruiker = "Louis Bijnens";
		printNaam($gebruiker);

?>