<?php

class archivo
{

public static function Leer()
{
	$uno = 0;
	$dos = 0;
	$tres = 0;
	$cuatro = 0;
	$masDeCuatro = 0;
	$miArchivo =fopen("palabras.txt", "r");
	while (!(feof($miArchivo)))
	{
		$renglon = fgets($miArchivo);
		$palabra = explode(" ", $renglon);
		foreach ($palabra as $dato )
		{
			switch (strlen($dato)) {
				case 1:
				$uno++;	
					break;
				case 2:
				$dos++;
				break;
				case 3 :
				$tres++;
				break;
				case 4 : 
				$cuatro++;
				break;


				default:
					$masDeCuatro++;
					break;
			}
		}
		

	}

	fclose($miArchivo);

	 echo "Una letra : ". $uno. "<br>  "."Dos letras : ". $dos."<br>". "Tres letras : ". $tres. "<br>". "Cuatro letras :". $cuatro. "<br>". "De mas de cuatro: ". $masDeCuatro. "<br>"; 
}

static function Escribo($palabra)
{
	$renglon = $palabra . " ".  "\n";
	$archivo = fopen("palabras.txt", "a");
	
	fwrite($archivo, $renglon);
	fclose($archivo);
}

}


?>