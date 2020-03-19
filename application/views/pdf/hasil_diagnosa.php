<!DOCTYPE html>
<html>

<head>
	<title>Hasil Diagnosa</title>
</head>

<body>
	<p><?= $pdf['nama'] ?></p>
	<p><?= $pdf['email'] ?></p>
	<p><?= $pdf['date'] ?></p>

	<table>
		<?= $i = 1 ?>
		<?php foreach ($gejala as $g) : ?>
			<tr>
				<td><?= $g['gejala'] ?></td>
				<td><?= $pdf['gejala' . $i] ?></td>

			</tr>
			<?php $i++ ?>
		<?php endforeach; ?>
	</table>

	<br><br>
	<h3>Hasil diagnosa</h3>
	<h4><?= $pdf['penyakit']; ?></h4>
	<b>PENYEBAB:</b>
	<p><?= $pdf['penyebab']; ?></p>

	<br>

	<b>SOLUSI :</b>
	<p><?= $pdf['solusi']; ?></p>

	<br>

	<b>SARAN :</b>
	<p><?= $pdf['saran']; ?></p>
</body>

</html>