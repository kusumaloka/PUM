INSERT INTO `time_tabling`.`t_matakuliah`
			(`kd_matakuliah`, `nama_matakuliah`, `sks`, `jenis`)
			VALUES
				('MI156P', 'Sistem Informasi Berbasis Web', '2', 'Praktikum'),
				('KU151P', 'Proyek Mandiri', '3', 'Praktikum'),
				('MI151T', 'Pemrograman Berorientasi Objek', '2', 'Teori'),
				('MI155T', 'Kecakapan Antar Personal', '2', 'Teori'),
				('MI152T', 'Keamanan Komputer', '2', 'Teori'),
				('MI157T', 'E-Bisnis', '1', 'Teori'),
				('MI157P', 'E-Bisnis', '2', 'Praktikum'),
				('MI154T', 'Statistik Terapan', '1', 'Teori'),
				('MI154P', 'Statistik Terapan', '1', 'Praktikum'),
				('MI151P', 'Pemrograman Berorientasi Objek', '1', 'Praktikum'),
				('TE131T', 'Etika Profesi dan Bisnis', '1', 'Teori'),
				('TE131P', 'Etika Profesi dan Bisnis', '1', 'Praktikum');
				
				('KD131P', 'B.Inggris 3', '1', 'Praktikum'),
				('MI131T', 'Sistem Basis Data Lanjut', '1', 'Teori'),
				('MI131P', 'Sistem Basis Data Lanjut', '2', 'Praktikum'),
				('MI132P', 'Rancangan Bangun Jaringan Komputer', '2', 'Praktikum'),
				('MI133P', 'Pemograman A', '2', 'Praktikum'),
				('MI134T', 'Pemograman Web', '1', 'Teori'),
				('MI134P', 'Pemograman Web', '2', 'Praktikum'),
				('MI135T', 'Sistem Informasi Manajemen', '2', 'Teori'),
				('MI136T', 'Interaksi Manusia Komputer', '2', 'Teori'),
				('MI137T', 'Komunikasi Data', '2', 'Teori'),
				('MI138T', 'Arsitektur Komputer', '2', 'Teori');
				
				
				
				INSERT INTO `time_tabling`.`t_jadwal`
			(`kd_jadwal`, `kd_semester`, `kd_tahunajar`, `kd_matakuliah`, `kd_dosen1`, `kd_dosen2`, `jam_mulai`, `jam_selesai`, `kd_ruang`, `kd_hari`)
			VALUES
				('MI137T1', '3', '2012', 'MI137T', '002', '005', '0731', '0910', 'ser14', '1'),
				('KD131P1', '3', '2012', 'MI137T', '010', '011', '1000', '1200', 'lbhsb', '1'),
				('MI132P1', '3', '2012', 'MI132P', '002', '005', '0700', '1100', 'lbjar', '2'),
				('MI135T1', '3', '2012', 'MI135T', '006', '008', '0700', '0840', 'ser14', '3'),
				('MI138T1', '3', '2012', 'MI138T', '008', '005', '0900', '1040', 'ser14', '3'),
				('MI136T1', '3', '2012', 'MI136T', '004', '006', '0700', '0840', 'ser14', '4'),
				('MI131T1', '3', '2012', 'MI131T', '006', '004', '1100', '1150', 'ser14', '4'),
				('MI131P1', '3', '2012', 'MI131P', '006', '004', '1300', '1700', 'lbsof', '4'),
				('MI134T1', '3', '2012', 'MI134T', '001', '003', '0730', '0820', 'lbsof', '5'),
				('MI133T1', '3', '2012', 'MI133T', '008', '004', '1300', '1600', 'lbsof', '5');
				
