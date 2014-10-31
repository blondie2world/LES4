<?php

	function tellerStandaard()
	{
		$tellerStandaard = 0;
		$tellerStandaard++;
		echo ("de standaardteller = $tellerStandaard </br>");
	}

	function tellerStatic()
	{
		static $tellerStatic = 0;
		$tellerStatic++;
		echo("de statische teller = $tellerStatic <br/>");
	}

	for($i=1;$i<=10;$i++)
	{
		tellerStandaard();
	}

	echo ("<hr/>");

	for($i=1;$i<=10;$i++)
	{
		tellerStatic();
	}

?>