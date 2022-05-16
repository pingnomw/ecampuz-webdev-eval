SELECT tb_mahasiswa.mhs_nama
FROM (tb_mahasiswa
INNER JOIN (tb_mahasiswa_nilai INNER JOIN tb_matakuliah ON tb_mahasiswa_nilai.mk_id = tb_matakuliah.mk_id) ON tb_mahasiswa.mhs_id = tb_mahasiswa_nilai.mhs_id)
ORDER BY tb_mahasiswa_nilai.nilai DESC
LIMIT 1