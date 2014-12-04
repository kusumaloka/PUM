<html>

	<head>
	
		<meta charset="utf-8">

		<meta name="product" content="Jadwal Kuliah">
		<meta name="author" content="Bagus Kusuma Loka">
		<meta name="description" content="Aplikasi untuk menampilkan jadwal kuliah">
		<meta name="keywords" content="Jadwal Kuliah, Polinela, Ekbis, MI">

		<link rel="stylesheet" href="css/metro-bootstrap.css">
		<link rel="stylesheet" href="css/docs.css">
		<link href="js/prettify/prettify.css" rel="stylesheet">

		<script src="js/jquery/jquery.min.js"></script>
		<script src="js/jquery/jquery.widget.min.js"></script>
		<script src="js/prettify/prettify.js"></script>

		<script src="js/metro/metro-loader.js"></script>
		<script src="js/docs.js"></script>
		<script src="js/github.info.js"></script>
		
	
		<title>Jadwal Kuliah
		</title>
	</head>
	
	<body class="metro">
		<header class="bg-dark" data-load="header.html"></header>
		<div class="page">
			<div class="page-region">
				<div class="page-region-content">				
					<h1>Daftar Kuliah Semester 
					</h1>
					<h3><a href="tambah.php">Tambah Jadwal</a></h3>
					<table class="table striped bordered">
						<thead>
							<tr>
								<th class="text-left">Kode Jadwal</th>
								<th class="text-left">Tahun Angkatan</th>
								<th class="text-left">Kode Makul</th>
								<th class="text-left">Mata Kuliah</th>
								<th class="text-left">Jenis</th>
								<th class="text-left">Dosen PJ</th>
								<th class="text-left">Dosen Anggota</th>
								<th class="text-left">Jam Mulai</th>
								<th class="text-left">Jam Selesai</th>
								<th class="text-left">Ruangan</th>
								<th class="text-left">Hari</th>
								<th class="text-left">Operasi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							include "./function/koneksi.php";
							koneksi_mysql();
								$sql="SELECT * FROM t_dosen, t_dosen_anggota, t_matakuliah, t_ruang, t_semester, t_tahunajar, t_jadwal 
									WHERE 
									t_jadwal.kd_dosen1=t_dosen.kd_dosen and 
									t_jadwal.kd_dosenanggota=t_dosen_anggota.kd_dosen_anggota and
									t_jadwal.kd_matakuliah=t_matakuliah.kd_matakuliah and
									t_jadwal.kd_ruang=t_ruang.kd_ruang and
									t_jadwal.kd_semester=t_semester.kd_semester and
									t_jadwal.kd_tahunajar=t_tahunajar.kd_tahunajar
									order by t_jadwal.kd_hari, t_jadwal.jam_mulai";
								$hasil_query=mysql_query($sql);
								while($baris=mysql_fetch_object($hasil_query)){
								$jam_mulai=substr("$baris->jam_mulai","0","2");
								$menit_mulai=substr("$baris->jam_mulai","2","2");
								$jam_selesai=substr("$baris->jam_selesai","0","2");
								$menit_selesai=substr("$baris->jam_selesai","2","2");
								
								if ($baris->kd_hari == "1")
								{
								$nm_hari="Senin";
								}
								else if ($baris->kd_hari == "2")
								{
								$nm_hari="Selasa";
								}
								else if ($baris->kd_hari == "3")
								{
								$nm_hari="Rabu";
								}
								else if ($baris->kd_hari == "4")
								{
								$nm_hari="Kamis";
								}
								else if ($baris->kd_hari == "5")
								{
								$nm_hari="Jumat";
								}
								else if ($baris->kd_hari == "6")
								{
								$nm_hari="Sabtu";
								}
								else if ($baris->kd_hari == "7")
								{
								$nm_hari="Minggu";
								}
									echo "<tr>
											<td>$baris->kd_jadwal</td>
											<td>$baris->tahun_ajar</td>
											<td>P$baris->kd_matakuliah</td>
											<td>$baris->nama_matakuliah</td>
											<td>$baris->jenis</td>
											<td>$baris->gelar_depan $baris->nama $baris->gelar_belakang</td>
											<td>$baris->gelar_depan_anggota $baris->nama_dosen_anggota $baris->gelar_belakang_anggota</td>
											<td>$jam_mulai:$menit_mulai</td>
											<td>$jam_selesai:$menit_selesai</td>
											<td>$baris->nama_ruang</td>
											<td>$nm_hari</td>
											<td><a href='./edit.php?kd_jadwal=$baris->kd_jadwal'><i class='icon-wrench'></i></a>
												<a href='./delete.php?kd_jadwal=$baris->kd_jadwal'><i class='icon-minus-2'></i></a>
											</td>
										</tr>";
								}
								?>
						</tbody>
					</table>
				</div>
			</div>			
		</div>
		</header>
	</body>
</html>