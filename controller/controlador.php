<?php
	require_once("../model/modelo.php");
	$envio = new envios();
	$env = $envio->lista_envio();
	require_once("../view/vista.php");
?>