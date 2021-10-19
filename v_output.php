<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="widht=device-widht, initial-scale=1.0">
	<title>Output</title>
</head>


<style>
	fieldset {
		width: : 40%;
		margin: 20px auto;
		border-radius: 5px;

	
</style>

<body>
	<fieldset>
		<center>
		<legend>OUTPUT TRANSAKSI</legend>

		<table>
			<tr>	
				<th>Nama Pembeli</th>
				<td>:</td>
				<td>
					<?= $nama; ?>
				</td>
			</tr>

			<tr>	
				<th>Nomer Hp</th>
				<td>:</td>
				<td>
					<?= $nhp; ?>
				</td>
			</tr>	

			<tr>	
				<th>Merk Sepatu</th>
				<td>:</td>
				<td>
					<?= $merk; ?>
				</select>
			</td>
		</tr>


			<tr>	
				<th>Ukuran Sepatu</th>
				<td>:</td>
				<td>
					<?= $ukuran; ?>
			</td>
		</tr>


			<tr>	
				<th>Harga</th>
				<td>:</td>
				<td>
					<?= $harga; ?>
			</td>
		</tr>
					
			<tr>
				<td colspan="3" align="center">
					<hr>
					<a href="<?= base_url('Quiz7'); ?>">Kembali</a>
				</td>
			</tr>


				</table>
	</fieldset>
</body>
</html>