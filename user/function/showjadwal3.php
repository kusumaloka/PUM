<?php
include_once "getjam.php";
include_once "koneksi.php";
global $semester, $jumlahbaris, $tampiljadwal, $sql, $hasil_query, $jam_mulai, $menit_mulai, $jam_selesai, $menit_selesai, $baris;

function showjadwal3(){
	koneksi_mysql();
	$hari=date('l');
	$clock=date('Hi');
	date_default_timezone_set('Asia/Jakarta');


	if ($hari == "Sunday")
		{
		$kode_hari="7";
		}
	elseif ($hari == "Monday")
		{
		$kode_hari="1";
		}
	elseif ($hari == "Tuesday")
		{
		$kode_hari="2";
		}
	elseif ($hari == "Wednesday")
		{
		$kode_hari="3";
		}
	elseif ($hari == "Thursday")
		{
		$kode_hari="4";
		}
	elseif ($hari == "Friday")
		{
		$kode_hari="5";
		}
	elseif ($hari == "Saturday")
		{
		$kode_hari="6";
		}
	
	
	$sql1="SELECT * FROM t_jam WHERE $clock>t_jam.jam1 and $clock<t_jam.jam2";
	$hasil=mysql_query($sql1);
	$jumlahbaris=mysql_num_rows($hasil);

	if (empty($jumlahbaris)){
		$sql="SELECT * FROM t_dosen, t_dosen_anggota, t_matakuliah, t_ruang, t_semester, t_tahunajar, t_jadwal 
				WHERE 
					t_jadwal.kd_dosen1=t_dosen.kd_dosen and 
					t_jadwal.kd_dosenanggota=t_dosen_anggota.kd_dosen_anggota and
					t_jadwal.kd_matakuliah=t_matakuliah.kd_matakuliah and
					t_jadwal.kd_ruang=t_ruang.kd_ruang and
					t_jadwal.kd_semester=t_semester.kd_semester and
					t_jadwal.kd_tahunajar=t_tahunajar.kd_tahunajar and
					t_jadwal.kd_semester=('5') and
					t_jadwal.kd_hari=('$kode_hari') and
					t_jadwal.jam_mulai < ('$clock') and
					t_jadwal.jam_selesai > ('$clock')";
		$hasil_query=mysql_query($sql);
		$jumlahjadwal=mysql_num_rows($hasil_query);
		if (empty($jumlahjadwal)){
		echo "<h2 class='fg-white' style='font-size : 35px'>Tidak Ada Perkuliahan</h2>
			<p class='fg-white'>&nbsp</p>
			<p class='fg-white'>&nbsp</p>
			<p class='fg-white'>&nbsp</p>
			<h1 class='fg-white'>Semester 5</h1>";
		}	
		else{
			while($baris=mysql_fetch_object($hasil_query)){
					$jam_mulai=substr("$baris->jam_mulai","0","2");
					$menit_mulai=substr("$baris->jam_mulai","2","2");
					$jam_selesai=substr("$baris->jam_selesai","0","2");
					$menit_selesai=substr("$baris->jam_selesai","2","2");
		
					echo "<p class='fg-white'>$baris->jenis </p>
							<p class='fg-white'>$baris->nama_matakuliah </p>
							<p class='fg-white'>$baris->nama_ruang </p>
							<p class='fg-white'>$jam_mulai:$menit_mulai - $jam_selesai:$menit_selesai </p>
							<p class='fg-white'>$baris->gelar_depan </p>
							<p class='fg-white'>$baris->gelar_depan $baris->nama $baris->gelar_belakang </p>
							<p class='fg-white'>$baris->gelar_depan_anggota $baris->nama_dosen_anggota $baris->gelar_belakang_anggota </p>
							<h1 class='fg-white'>Semester $baris->semester</h1>";
				
					}
		}
	}
	else
	{
		echo "<h2 class='fg-white'>Istirahat</h1>
				<p class='fg-white'>&nbsp</p>
				<p class='fg-white'>&nbsp</p>
				<p class='fg-white'>&nbsp</p>
				<p class='fg-white'>&nbsp</p>
				<h1 class='fg-white'>Semester 5</h1>";
	}
}



?>