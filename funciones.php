<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Problemas</title>
</head>
<body>

	<h1>Problemas</h1>

	<h2>Problema 1</h2>

		<p>Programar una función que busque el máximo de un array de enteros recibido como argumento.</p>

		<p><span>Ejemplo:</span> max([3,4,6,1,65,-3,6,10]): 65 </p>
		

			<?php

			function maximoEntero ($arr){

				if(count($arr)>0){

					$a = $arr[0];

						for ($i=1; $i <count($arr) ; $i++) {

							if($a < $arr[$i]){

								$a = $arr[$i];
							}
						}

						return $a;

				}else{
					return false;
				}
			}



			?>

			<table>
				<tr>
					<th>Entrada</th>
					<th>Salida esperada</th>
					<th>Descripción</th>
				</tr>
				<tr>
					<td>Todos positivos</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Todos negativos</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Positivo y Negativos</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Array vacio</td>
					<td></td>
					<td></td>
				</tr>
			</table>

	<h2>Problema 2</h2>

		<p>Programar una función que busque el mínimo de un array de enteros recibido como argumento.</p>

		<p><span>Ejemplo:</span>min([3,4,6,1,65,-3,6,10]): -3</p>

			<?php

			function menorEntero ($arr){

				if(count($arr)>0){

					$a = $arr[0];

						for ($i=1; $i <count($arr) ; $i++) {

							if($a > $arr[$i]){

								$a = $arr[$i];
							}
						}

						return $a;

				}else{
					return false;
				}
			}


			?>

			<table>
				<tr>
					<th>Entrada</th>
					<th>Salida esperada</th>
					<th>Descripción</th>
				</tr>
				<tr>
					<td>Todos positivos</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Todos negativos</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Positivo y Negativos</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Array vacio</td>
					<td></td>
					<td></td>
				</tr>
			</table>

	<h2>Problema 3</h2>

		<p>Dada una cadena, implementar una función que diga (true o false) si la secuencia "<->" aparece en medio. Se considerará que está en medio si el número de caracteres que hay antes y después difieren como mucho en una unidad.</p>

		<p><span>Ejemplo:</span>flechaMedio("xaj<->bb"): true </p>


			  <?php

  $txt="a3d<->l44";

  echo $txt;
  echo "<br><br>";

  function BuscarCoincidenciaEnUnString($txt){

    if($txt !="") {
      $i = strlen($txt)/2;
      $i = intval($i);
      // encuentra la secuencia de caracteres en la mitad
      if($txt[$i]=="-") {
        $cadena = $i;
        // más de 2 caracteres en la primera mitad
      }elseif($txt[$i+1]=="-") {
        $cadena =$i;
        // más de 2 caracteres en la segunda mitad
      }

      elseif($txt[$i-1] == "-") {
        $cadena = $i;
      }else{
        
        return false;
      }

      if($txt[$cadena-1] == "<" && $txt[$cadena+1] == ">"){
        return true;

      }else{
        return false;

      }
    }
  }
  echo "el resultado es: " .BuscarCoincidenciaEnUnString($txt);




  ?>

			<table>
				<tr>
					<th>Entrada</th>
					<th>Salida esperada</th>
					<th>Descripción</th>
				</tr>
				<tr>
					<td>Todos positivos</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Todos negativos</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Positivo y Negativos</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Array vacio</td>
					<td></td>
					<td></td>
				</tr>
			</table>

		<h2>Problema 4</h2>

			<p>Una sección de "espejo" en una matriz es un grupo de elementos contiguos tales que en algún lugar de la matriz, el mismo grupo aparece en el orden inverso. Devolver el tamaño de la sección espejo más grande que se encuentra en la matriz dada.</p>

			<p><span>Ejemplo 1:</span> espejoMayor([1, 2, 3, 8, 9, 3, 2, 1, 5]): 3</p>
			<p><span>Ejemplo 2:</span> espejoMayor([1, 2, 1, 4]): 3</p>

			<?php
				function espejoEspejito(){

					//TODO Falta Completar
				}
			?>

			<table>
				<tr>
					<th>Entrada</th>
					<th>Salida esperada</th>
					<th>Descripción</th>
				</tr>
				<tr>
					<td>Todos positivos</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Todos negativos</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Positivo y Negativos</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Array vacio</td>
					<td></td>
					<td></td>
				</tr>
			</table>

</body>
</html>
