<div class="page">
			<div class="page-region">
				<div class="page-region-content">
				<h1>
					<a href="/"><i class="icon-arrow-left-3 fg-darker smaller"></i></a>
					Daftar Mata Kuliah<small class="on-right">Prodi Manajemen Informatika</small>
				</h1>
				<p class="description">
					Berikut daftar Mata Kuliah yang diajarkan di Program Studi Manajemen Informatika
				</p>
				
				<table class="table bordered">
					<thead>
					<tr>
						<th class="text-left">Kopel</th>
						<th class="text-left">Mata Kuliah</th>
						<th class="text-left">Hari</th>
						<th class="text-left">Waktu</th>
						<th class="text-left">Semester</th>
						<th class="text-left">SKS</th>
						<th class="text-left">Dosen Pengampu</th>
					</tr>
					</thead>
					
					<tbody>
					<?php
					include_once "koneksi.php";
					koneksi_mysql();
					$sql="SELECT * FROM dosen, jadwal, trans_jadwal where jadwal.kode_jadwal=trans_jadwal.kode_jadwal and dosen.nip=trans_jadwal.nip";
					$hasil_query=mysql_query($sql);
					while($baris=mysql_fetch_object($hasil_query)){
					echo "<tr>";
					echo "		<td>$baris->kopel</td>";
					echo "		<td>$baris->mata_kuliah</td>";
					echo "		<td>$baris->hari</td>";
					echo "		<td>$baris->waktu</td>";
					echo " 		<td>$baris->semester</td>";
					echo "		<td>$baris->sks</td>";
					echo "		<td>$baris->nama</td>";
					echo "</tr>";
					}
					?>
					</tbody>
					
					<tfoot></tfoot>
				</table>
				
				</div>
			</div>
</div>