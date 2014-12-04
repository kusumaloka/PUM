<div class="page">
			<div class="page-region">
				<div class="page-region-content">
				<h1>
					<a href="/"><i class="icon-arrow-left-3 fg-darker smaller"></i></a>
					Daftar Dosen<small class="on-right">Prodi Manajemen Informatika</small>
				</h1>
				<p class="description">
					Berikut daftar Dosen yang mengajar di Program Studi Manajemen Informatika
				</p>
				
				<table class="table bordered">
					<thead>
					<tr>
						<th class="text-left">NIP</th>
						<th class="text-left">Nama</th>
						<th class="text-left">Mata Kuliah Yang Diampu</th>
						<th class="text-left">Pengarang</th>
						<th class="text-left">Jenis</th>
					</tr>
					</thead>
					
					<tbody>
					<?php
					include_once "koneksiperpus.php";
					koneksi_mysql();
					$sql="SELECT * FROM buku";
					$hasil_query=mysql_query($sql);
					while($baris=mysql_fetch_object($hasil_query)){
					echo "<tr><td><img src='gambar/$baris->id_buku.jpg' width='100px' height='150px'></td><td>$baris->id_buku</td><td>$baris->judul_buku</td><td>$baris->pengarang_buku</td><td>$baris->jenis_buku</td></tr>";
					}
					?>
					</tbody>
					
					<tfoot></tfoot>
				</table>
				
				</div>
			</div>
</div>