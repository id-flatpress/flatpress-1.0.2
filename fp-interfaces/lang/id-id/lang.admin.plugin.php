<?php
/*
LangId: Bahasa Indonesia translate by: eggoez - http://eggoez.com
# Bila ada kesalahan baik secara penulisan atau ucapan kata
# mohon hubungi saya di eggoez@yahoo.com
# Hargailah Karya Orang Lain dengan tidak Merubah Isi &
# Terimakasih sudah menggunakan Bahasa Indonesia :)
*/
	$lang['admin']['plugin']['submenu'] = array (
		'default'		=> 'Kelola Plugins'
	);
	
	/* main plugin panel */

	$lang['admin']['plugin']['default'] = array(
	
		'head'		=> 'Kelola Plugin(s) Anda',
		'enable'	=> 'Aktifkan',
		'disable'	=> 'Nonaktifkan',
		'descr'		=> '<a class="hint" '.
						'href="http://wiki.flatpress.org/doc:plugins" title="Plugin FlatPress?">'.
						'Plugin</a> adalah sebuah komponen untuk membuat FlatPress Anda lebih Menarik.</p>'.
						'<p>Anda bisa memasang dengan cara meng-unggah plugin pada folder <code>fp-plugins/</code>'.
						'.</p>'.
						'<p>Anda bisa mengaktifkan dan menonaktifkan plugin pada panel ini',
		'name'		=> 'Nama',
		'description'=>'Keterangan',
		'author'	=> 'Pengembang',
		'version'	=> 'Versi',
		'action'	=> 'Aksi',
	);
	
	$lang['admin']['plugin']['default']['msgs'] = array(
		1	=> 'Perubahan berhasil disimpan',
		-1	=> 'Tampaknya ada kesalahan ketika menyimpan konfigurasi.Alasanya: mungkin file tidak lengkap atau ada direktori yang salah.',
	);
	
	/* system errors */
	
	$lang['admin']['plugin']['errors'] = array(
		'head'		=> 'Sedang memeriksa plugins:',
		'notfound'	=> 'Plugin tidak ditemukan. Lewati.',
		'generic'	=> 'Kesalahan kode %d',
	);
	
?>
