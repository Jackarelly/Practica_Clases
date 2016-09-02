<?php
$a=$_REQUEST['valor1'];
$b=$_REQUEST['valor2'];

if ($_REQUEST['operador']=="suma"){
	$r_suma = sumar($a,$b);
	echo "la suma es: $r_suma";

}
	if ($_REQUEST['operador']=="resta"){
	$r_resta = restar($a,$b);
	echo "la resta es: $r_resta";
}

	if ($_REQUEST['operador']=="multiplicar"){
	$r_multiplicar = multiplicar($a,$b);
	echo "la multiplicacion es: $r_multiplicar";
	}

	if ($_REQUEST['operador']=="dividir"){
	$r_dividir = dividir($a,$b);
	echo "la divicion es: $r_dividir";
	}
function sumar ($a,$b) {
	$suma = $a+$b;
	return $suma;
}

function restar ($a,$b) {
	$resta = $a-$b;
	return $resta;
}
function multiplicar ($a,$b) {
	$multiplicar = $a*$b;
	return $multiplicar;
}
function dividir ($a,$b) {
	$dividir = $a/$b;
	return $dividir;
}

?>