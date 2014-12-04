create table t_dosen
	(kd_dosen varchar(10),
	nama varchar(30),
	gelar_depan varchar(15),
	gelar_belakang varchar(15));
	
create table t_jadwal
	(kd_jadwal varchar(10) not null primary key,
	kd_semester varchar(5),
	kd_tahunajar varchar(10),
	kd_matakuliah varchar(6),
	kd_dosen1 varchar(10),
	kd_dosen2 varchar(10),
	jam_mulai varchar(4),
	jam_selesai varchar(4),
	kd_ruang varchar(5),
	kd_hari varchar(1));

create table t_jam
	(kd_jam varchar(5),
	jam1 varchar(5),
	jam2 varchar(5),
	status varchar(10));

create table t_matakuliah
	(kd_matakuliah varchar(6),
	nama_matakuliah varchar(30),
	sks varchar(3),
	jenis varchar(10));

create table t_ruang
	(kd_ruang varchar(5),
	nama_ruang varchar(30),
	status varchar(20));
	
create table t_semester
	(kd_semester varchar(5),
	nama_semester varchar(10));

create table t_tahunajar
	(kd_tahunajar varchar(10),
	tahun_ajar varchar(6),
	semester varchar(3));
	
	
INSERT INTO `time_tabling`.`t_dosen` 
			(`kd_dosen`, `nama`, `gelar_depan`, `gelar_belakang`) 
			VALUES 
				('001', 'Eko Win Kenali', '', 'S.Kom, M.Cs'), 
				('002', 'Imam Asrowardi', '', 'S.Kom, M.Kom'),
				('003', 'Halim Fathoni', '', 'S.T, M.Sc'),
				('004', 'Trishandika Jaya', '', 'S.Kom, M.Kom'),
				('005', 'Eko Subyantoro', '', 'S.Kom, M.Kom'),
				('006', 'Dewi Kania', '', 'S.Kom, M.Kom'),
				('007', 'Henry Kurniawan', '', 'S.Si, M.Stat'), 
				('008', 'Zuriati', '', 'S.Kom, M.Kom'),
				('009', 'Rima Maulini', '', 'S.Kom, M.Cs');
				
INSERT INTO `time_tabling`,`t_jam` 
			(`kd_jam`, `jam1`, `jam2`, `status`)
			Values
				('111', '1100', '1300', 'Istirahat');

INSERT INTO `time_tabling`.`t_matakuliah`
			(`kd_matakuliah`, `nama_matakuliah`, `sks`, `jenis`, `semester`)
			VALUES
				('MI156P', 'Sistem Informasi Berbasis Web', '2', 'Praktikum', '5'),
				('KU151P', 'Proyek Mandiri', '3', 'Praktikum', '5'),
				('MI151T', 'Pemrograman Berorientasi Objek', '2', 'Teori', '5'),
				('MI155T', 'Kecakapan Antar Personal', '2', 'Teori', '5'),
				('MI152T', 'Keamanan Komputer', '2', 'Teori', '5'),
				('MI157T', 'E-Bisnis', '1', 'Teori', '5'),
				('MI157P', 'E-Bisnis', '2', 'Praktikum', '5'),
				('MI154T', 'Statistik Terapan', '1', 'Teori', '5'),
				('MI154P', 'Statistik Terapan', '1', 'Praktikum', '5'),
				('MI151P', 'Pemrograman Berorientasi Objek', '1', 'Praktikum', '5'),
				('TE131T', 'Etika Profesi dan Bisnis', '1', 'Teori', '5'),
				('TE131P', 'Etika Profesi dan Bisnis', '1', 'Praktikum', '5'),
				('KD131P', 'Bahasa Inggris 3', '1', 'Praktikum', '3'),
				('MI131T', 'Sistem Basis Data Lanjut', '1', 'Teori', '3'),
				('MI131P', 'Sistem Basis Data Lanjut', '2', 'Praktikum', '3'),
				('MI132P', 'Rancang Bangun Jaringan Komputer', '2', 'Praktikum', '3'),
				('MI133P', 'Pemrograman A', '2', 'Praktikum', '3'),
				('MI134T', 'Pemrograman Web', '1', 'Teori', '3'),
				('MI134P', 'Pemrograman Web', '2', 'Praktikum', '3'),
				('MI135T', 'Sistem Informasi Manajemen', '2', 'Teori', '3'),
				('MI136T', 'Interaksi Manusia Komputer', '2', 'Teori', '3'),
				('MI137T', 'Komunikasi Data', '2', 'Teori', '3'),
				('MI138T', 'Arsitektur Komputer', '2', 'Teori', '3');

INSERT INTO `time_tabling`.`t_ruang`
			(`kd_ruang`, `nama_ruang`, `status`)
			VALUES
				('lbjar', 'Lab Jaringan Komputer', 'Ada'),
				('lbsof', 'Lab Software', 'Ada'),
				('ser14', 'Seroja 1.4', 'Ada');

INSERT INTO `time_tabling`.`t_semester`
			(`kd_semester`, `nama_semester`)
			VALUES	
			('5', 'Semester 5'),
			('3', 'Semester 3'),
			('1', 'Semester 1');

INSERT INTO `time_tabling`.`t_tahunajar`
			(`kd_tahunajar`, `tahun_ajar`, `semester`)
			VALUES
				('2011', '2011', '5'),
				('2012', '2012', '3'),
				('2013', '2013', '1');
				
INSERT INTO `time_tabling`.`t_jadwal`
			(`kd_jadwal`, `kd_semester`, `kd_tahunajar`, `kd_matakuliah`, `kd_dosen1`, `kd_dosen2`, `jam_mulai`, `jam_selesai`, `kd_ruang`, `kd_hari`)
			VALUES
				('MI156P1', '5', '2011', 'MI156P', '001', '003', '0731', '1130', 'lbjar', '1'),
				('KUI5IP1', '5', '2011', 'MI151P', '001', '002', '1301', '1500', 'ser14', '1'),
				('MI151T1', '5', '2011', 'MI151T', '003', '004', '0700', '0840', 'ser14', '2'),
				('MI155T1', '5', '2011', 'MI155T', '009', '007', '0900', '1040', 'ser14', '2'),
				('MI152T1', '5', '2011', 'MI152T', '005', '002', '1300', '1440', 'ser14', '2'),
				('MI157T1', '5', '2011', 'MI157T', '002', '003', '0700', '0750', 'lbjar', '3'),
				('MI157P1', '5', '2011', 'MI157P', '002', '003', '0750', '1200', 'lbjar', '3'),
				('MI154T1', '5', '2011', 'MI154T', '007', '008', '0700', '0750', 'lbsof', '4'),
				('MI154P1', '5', '2011', 'MI154P', '007', '008', '0750', '0950', 'lbsof', '4'),
				('MI151P1', '5', '2011', 'MI151P', '003', '004', '1000', '1250', 'lbsof', '4'),
				('KU151P2', '5', '2011', 'KU151P', '001', '002', '1300', '1550', 'ser14', '4'),
				('TE131P1', '5', '2011', 'TE131P', '007', '006', '0730', '0820', 'ser14', '5'),
				('TE131T1', '5', '2011', 'TE131T', '007', '006', '0820', '1020', 'ser14', '5'),
				('KU151P3', '5', '2011', 'KU151P', '001', '002', '1300', '1500', 'ser14', '5');
				
				
				
INSERT INTO `time_tabling`.`t_hari`
			(`kd_hari`, `nama_hari`)
			VALUES	
			('1', 'Senin'),
			('2', 'Selasa'),
			('3', 'Rabu'),
			('4', 'Kamis'),
			('5', 'Jumat'),
			('6', 'Sabtu'),
			('7', 'Minggu');
