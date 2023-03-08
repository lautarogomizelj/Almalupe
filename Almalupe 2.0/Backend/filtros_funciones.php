<?php

function filtro_input($dato)
{
	$pos1 = strpos($dato, "<");
	$pos2 = strpos($dato, ">");
	$pos3 = strpos($dato, "/");
	$pos4 = strpos($dato, "=");
	$pos5 = strpos($dato, '"');
	$pos6 = strpos($dato, "*");
	$pos7 = strpos($dato, ";");
	$pos8 = strpos($dato, "!");
	$pos9 = strpos($dato, "|");
	$pos10 = strpos($dato, "@");
	$pos11 = strpos($dato, "+");
	$pos12 = strpos($dato, "'");
	$pos13 = strpos($dato, ",");

	if ($pos1 == true || $pos2 == true)
	{
		return true;
	}

	if ($pos3 == true || $pos4 == true) 
	{
		return true;
	}

	if ($pos5 == true || $pos6 == true)
	{
		return true;
	}

	if ($pos7 == true || $pos8 == true)
	{
		return true;
	}

	if ($pos9 == true || $pos10 == true)
	{
		return true;
	}

	if ($pos11 == true || $pos12 == true)
	{
		return true;
	}

	if ($pos13 == true)
	{
		return true;
	}
}

function filtro_input_email($dato)
{
	$pos1 = strpos($dato, "<");
	$pos2 = strpos($dato, ">");
	$pos3 = strpos($dato, "/");
	$pos4 = strpos($dato, "=");
	$pos5 = strpos($dato, '"');
	$pos6 = strpos($dato, "*");
	$pos7 = strpos($dato, ";");
	$pos8 = strpos($dato, "!");
	$pos9 = strpos($dato, "|");
	$pos10 = strpos($dato, "+");
	$pos11 = strpos($dato, "'");
	$pos12 = strpos($dato, ",");

	if ($pos1 == true || $pos2 == true)
	{
		return true;
	}

	if ($pos3 == true || $pos4 == true) 
	{
		return true;
	}

	if ($pos5 == true || $pos6 == true)
	{
		return true;
	}

	if ($pos7 == true || $pos8 == true)
	{
		return true;
	}

	if ($pos9 == true || $pos10 == true)
	{
		return true;
	}

	if ($pos11 == true || $pos12 == true)
	{
		return true;
	}
}

function mostrar_texto($texto1, $texto2)
{
	if(strlen($texto1) > 0 && strlen($texto2) > 0)
	{
		echo $texto1 ."<br>";

		echo $texto2;
	}

	if(strlen($texto1) > 0 && strlen($texto2) == 0)
	{
		echo $texto1;
	}

	if(strlen($texto2) > 0 && strlen($texto1) == 0)
	{
		echo $texto2;
	}

}

?>