<?php
	$dia = $_POST['dia'];
	$mes = $_POST['mes'];
	$anho = $_POST['anho'];
	$fecha_ingresada = date("d-m-Y", strtotime("".$dia."-".$mes."-".$anho.""));
	$fecha_hoy = date("d-m-Y");
	$diferencia = strtotime($fecha_ingresada) - strtotime($fecha_hoy);
	$dias_faltantes = intval($diferencia / 86400);

	header("location: unidad2.php?fecha=".$fecha_ingresada."&dias=".$dias_faltantes."");
?>