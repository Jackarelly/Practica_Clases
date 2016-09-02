<?php 
$a=$_REQUEST['valor1'];
$b=$_REQUEST['valor2'];
$c=$_REQUEST['valor3'];

if ($_REQUEST['operacion']=="area"){
	$r_area = area($a,$b);
	echo "su area es: $r_area";
	}

function area ($a,$b) {
	$area = $a*$b;
	return $area;
}

if ($_REQUEST['operacion']=="exprecion"){
	$r_exprecion = exprecion($a,$b,$c);
	echo "El resultado es: $r_exprecion";
	}

function exprecion($a,$b,$c) {
	$expreci = ($a+7*$c)/($b+2-$a)+2*$b;
    return $expreci;
}

 ?>