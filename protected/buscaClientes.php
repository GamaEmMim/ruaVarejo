<?php
	session_start();
	//date_default_timezone_set("America/Sao_Paulo");
	if (!isset($_SESSION['logged']) || !$_SESSION['logged']){
		header("location:/");
	}
	$customerList = file_get_contents("http://api.ruavarejo.com.br/cliente/09c63ba3efce13d2f9b586c2075db138");
	$customerList = json_decode($customerList);
	$total = count($customerList);
?>

<table style="width: 90%;">
	<tr>
		<td>ID</td>
		<td>Timestamp</td>
		<td>Nome</td>
		<td>Sobrenome</td>
		<td>Email</td>
		<td>Empresa</td>
		<td>Tipo de Comércio</td>
		<td>Tipo de Cliente</td>
		<td>IP</td>
	</tr>
	<?php
		foreach ($customerList as $aux) {
	?>
	<tr>
		<td><?=$aux->id; ?></td>
		<td><?=$aux->creationDate; ?></td>
		<td><?=$aux->name; ?></td>
		<td><?=$aux->lastName; ?></td>
		<td><?=$aux->email; ?></td>
		<td><?=$aux->company; ?></td>
		<td><?=$aux->tipoComercio; ?></td>
		<td><?=$aux->tipoCliente; ?></td>
		<td><?=$aux->ip; ?></td>
	</tr>
	<?php
		}
	?>
</table>
<div>
	<label>Total de clientes: <?=$total?></label>
</div>