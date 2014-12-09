<?php
/* 
# Diterjemahkan oleh eggoez - http://eggoez.com
# Bila ada kesalahan baik secara penulisan atau ucapan kata
# Silahkan laporkan lewat e-mail di eggoez@yahoo.com
# Hargailah Karya Orang Lain dengan tidak Merubah Isi &
# Terimakasih sudah menggunakan Bahasa Indonesia :)
*/
$lang['plugin']['qspam'] = array(
	'error' => 'Gagal: Komentar Anda mengandung Kata atau Symbol yang tidak diizinkan oleh Owner'
);

$lang['admin']['plugin']['submenu']['qspam'] = 'QuickSpamFilter';
$lang['admin']['plugin']['qspam'] = array(
	'head' => 'Konfigurasi QuickSpam',
	'desc1' => 'Tulis Kata kotor atau Symbol yang tidak berkenan di bawah ini, (tulis perbaris) :',
	'desc2' => '<strong>Ingat:</strong> Sebuah komentar juga tidak dibolehkan untuk menggunakan kata lain. 
	
	(contoh. "old" menjadi"b<em>old</em>" dsb)',
	'options' => 'Pilihan lain',
	'desc3' => 'Penyaringan kata',
	'desc3pre' => 'Akan diblokir apabila mengandung',
	'desc3post' => ' huruf dari kata di atas).',
	'submit' => 'Simpan Konfig',
	'msgs' => array(
		1 => 'Berhasil Menyimpan Konfigurasi',
		-1 => 'Gagal Saat Menyimpan Konfigurasi.'
	)
);

?>
