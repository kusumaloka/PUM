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
		
	
		<title>Tambah Jadwal</title>
	</head>


	<body class="metro">
		<header class="bg-dark" data-load="header.html"></header>
		<div class="page">
			<div class="page-region">
				<div class="page-region-content">
					<h1>Tambah Jadwal Kuliah</h1>
					<p class="description">
					Silahkan tambah jadwal perkuliahan dengan mengisi form di bawah ini.
					</p>
					<form action="new.php" method="POST">
						<lable>Kode Jadwal</lable>
						<div class="input-control text" data-role="input-control">
							<input name='kd_jadwal' type='text' placeholder='type text'>
						</div>
						<lable>Semester</lable>
						<div class="input-contro select" data-role="input-control">
							<select name="kd_semester">
							<?php
								for($semester=1; $semester<=6; $semester++){
								echo "<option value=$semester>$semester</option>";
								}
							?>
							</select>
						</div>
						<lable>Tahun Ajar</lable>
						<div class="input-control select" data-role="input-control">
							<select name="kd_tahunajar">
								<?php
									include_once "./function/koneksi.php";
									koneksi_mysql();
									$sqltahun="SELECT * FROM t_tahunajar ";
											$hasil_query_tahun=mysql_query($sqltahun);
											while($baris_tahun=mysql_fetch_object($hasil_query_tahun))	
											echo "<option value=$baris_tahun->kd_tahunajar>$baris_tahun->tahun_ajar</option>";
								?>
							</select>
						</div>
						<lable>Mata Kuliah</lable>
						<div class="input-control select" data-role="input-control">
							<select name="kd_matakuliah">
								<?php
									include_once "./function/koneksi.php";
									koneksi_mysql();
									$sql="SELECT * FROM t_matakuliah";
											$hasil_query=mysql_query($sql);
											while($baris=mysql_fetch_object($hasil_query))	
											echo "<option value=$baris->kd_matakuliah>(P$baris->kd_matakuliah) $baris->nama_matakuliah ($baris->jenis) (Semester $baris->semester) </option>";
								?>
							</select>
						</div>
						<lable>Dosen PJ</lable>
						<div class="input-control select" data-role="input-control">
							<select name="kd_dosen">
								<?php
									include_once "./function/koneksi.php";
									koneksi_mysql();
									$sql="SELECT * FROM t_dosen";
											$hasil_query=mysql_query($sql);
											while($baris=mysql_fetch_object($hasil_query))	
											echo "<option value=$baris->kd_dosen>$baris->gelar_depan $baris->nama, $baris->gelar_belakang</option>";
								?>
							</select>
						</div>
						<lable>Dosen Anggota</lable>
						<div class="input-control select" data-role="input-control">
							<select name="kd_dosen_anggota">
								<?php
									include_once "./function/koneksi.php";
									koneksi_mysql();
									$sql="SELECT * FROM t_dosen_anggota";
											$hasil_query=mysql_query($sql);
											while($baris=mysql_fetch_object($hasil_query))	
											echo "<option value=$baris->kd_dosen_anggota>$baris->gelar_depan_anggota $baris->nama_dosen_anggota, $baris->gelar_belakang_anggota</option>";
								?>
							</select>
						</div>
						<lable>Jam Mulai</lable>
						<div class="input-control select" data-role="input-control">
							<select name="jam_mulai">
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<?php
								for($jam_mulai=11; $jam_mulai<=17; $jam_mulai++){
								echo "<option value=$jam_mulai>$jam_mulai</option>";
								}
								?>
							</select>
						</div>
						<lable>Menit Mulai</lable>
						<div class="input-control select" data-role="input-control">
							<select name="menit_mulai">
								<option value="00">00</option>
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<?php
								for($menit_mulai=11; $menit_mulai<=59; $menit_mulai++){
								echo "<option value=$menit_mulai>$menit_mulai</option>";
								}
								?>
							</select>
						</div>
						<lable>Jam Selesai</lable>
						<div class="input-control select" data-role="input-control">
							<select name="jam_selesai">
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<?php
								for($jam_selesai=11; $jam_selesai<=17; $jam_selesai++){
								echo "<option value=$jam_selesai>$jam_selesai</option>";
								}
								?>
							</select>
						</div>
						<lable>Menit Selesai</lable>
						<div class="input-control select" data-role="input-control">
							<select name="menit_selesai">
								<option value="00">00</option>
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<?php
								for($menit_selesai=11; $menit_selesai<=59; $menit_selesai++){
								echo "<option value=$menit_selesai>$menit_selesai</option>";
								}
								?>
							</select>
						</div>
						<lable>Ruangan</lable>
						<div class="input-control select" data-role="input-control">
							<select name="kd_ruang">
								<?php
									include_once "./function/koneksi.php";
									koneksi_mysql();
									$sql="SELECT * FROM t_ruang";
											$hasil_query=mysql_query($sql);
											while($baris=mysql_fetch_object($hasil_query))	
											echo "<option value=$baris->kd_ruang>$baris->nama_ruang</option>";
								?>
							</select>
						</div>
						<lable>Hari</lable>
						<div class="input-control select" data-role="input-control">
							<select name="kd_hari">
								<?php
									include_once "./function/koneksi.php";
									koneksi_mysql();
									$sql="SELECT * FROM t_hari";
											$hasil_query=mysql_query($sql);
											while($baris=mysql_fetch_object($hasil_query))	
											echo "<option value=$baris->kd_hari>$baris->nama_hari</option>";
								?>
							</select>
						</div>
						<button class="button large primary" type="submit">Submit</button>
						<button class="button large primary" type="reset">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>