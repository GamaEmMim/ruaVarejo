<?php
	session_start();
	//date_default_timezone_set("America/Sao_Paulo");
	if (!isset($_SESSION['logged']) || !$_SESSION['logged']){
		header("location:/");
	}
	$customerList = file_get_contents("http://api.ruavarejo.com.br/cliente/09c63ba3efce13d2f9b586c2075db138");
	$customerList = json_decode($customerList);
	$total = count($customerList);
	$b2bSize = 0;
	$b2cSize = 0;
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
			switch($aux->tipoCliente){
				case "B2B":
					$b2bSize++;
				break;
				case "B2C":
					$b2cSize++;
				break;
			}

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
	<label>Total de clientes: <?=$total?></label><br/>
	<label>Total de leads B2C: <?=$b2bSize?></label><br/>
	<label>Total de leads B2B: <?=$b2cSize?></label><br/>
	<?php
		$totalValue = $b2cSize + ($b2bSize * 2);
	?>
	<label>Total de leads (B2C + (B2B*2)): <?=$totalValue?></label>
</div>