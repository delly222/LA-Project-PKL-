<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
	<link href="<?= base_url('sb-admin') ?>/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
	<div class="row">
		<div class="col text-center">
			<h3 class="h3 text-dark"><?= $title ?></h3>
			<!-- <h4 class="h4 text-dark "><strong><?= $perusahaan->nama_perusahaan ?></strong></h4> -->
		</div>
	</div>
	<hr>
	<div class="row">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
			<tr>
					<td width="20px">No</td>
					<td>Kode Peternak</td>
					<td>Nama Peternak</td>
					<td>username</td>
					<td>password</td>
					<td>Telepon</td>
					<td>Alamat</td>
					<td>Kodepos</td>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($all_petugas as $petugas): ?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $petugas->kode ?></td>
					<td><?= $petugas->nama ?></td>
					<td><?= $petugas->telepon ?></td>
					<td><?= $petugas->jumlahsapi ?></td>
					<td><?= $petugas->alamat ?></td>
					<td><?= $petugas->kodepos ?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</body>
</html>