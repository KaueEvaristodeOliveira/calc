<?php

	include ("./Atv 27 08 2020");
		if ($ POST)
		{
		$v1 = $_POST ['txtv1'];
		$v2 = $_POST ['txtv2'];
		$op = $_POST ['operacao'];
		
		
		if ($op== 'Soma')
		{
			$total = $v1+ $v2;
			echo " A soma é "$total;
		}
		
		else if ($op== 'Subtraçao')
		{
			$total = $v1 - $v2;
			echo " A subtração é "$total;
		}
		
		else if ($op== 'Divisão')
		{
			$total = $v1 / $v2;
			echo " A divisão é "$total;
		}
		
		else if ($op== 'Multiplicação')
		{
			$total = $v1 * $v2;
			echo " A multiplicação é "$total;
		}
	}
?>	