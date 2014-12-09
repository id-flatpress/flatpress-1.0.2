<?php
/*
LangId: Bahasa Indonesia translate by: eggoez - http://eggoez.com
# Bila ada kesalahan baik secara penulisan atau ucapan kata
# mohon hubungi saya di eggoez@yahoo.com
# Hargailah Karya Orang Lain dengan tidak Merubah Isi &
# Terimakasih sudah menggunakan Bahasa Indonesia :)
*/	
	$lang['admin']['panel']['maintain'] = 'Pemeliharaan';

	$lang['admin']['maintain']['default'] = array(
		'head'		=> 'Pemeliharaan',
		'descr'		=> 'Mungkin di sini anda akan menemukan solusi jika Blog anda bermasalah. '.
					'Tapi mungkin ini juga tidak bekerja dengan maksimal.',
		'opt0'		=> '&laquo; Kembali',
		'opt1'		=> 'Kembalikan Index (Rebuild index)',
		'opt2'		=> 'Pembersihan tema dan cache template',
		'opt3'		=> 'Perbaiki izin file (permissions)',
		'opt4'		=> 'Lihat informasi tentang PHP Anda',
		'opt5'		=> 'Periksa pembaruan',

		'chmod_info'	=> "Pemeriksa sebuah izin file <strong>tidak bisa</strong>
					dikembalikan menjadi 0777; kemungkinan pemilik file tidak sama dengan pemilik
					webserver. Biasanya Anda bisa abaikan pemberitahuan ini.",
		
	);
	
	$lang['admin']['maintain']['default']['msgs'] = array(
		1		=> 'Ekploitasi Lengkap dan selesai'
	);
	
	$lang['admin']['maintain']['updates'] = array(
		'head'	=> 'Pembaruan',
		'list'	=> '<ul>
		<li>Anda menggunakan FlatPress versi <big>%s</big></li>
		<li>Versi terahir FlatPress adalah <big><a href="%s">%s</a></big></li>
		<li>Versi stabil terahir untuk FlatPress adalah <big><a href="%s">%s</a></big></li>
		</ul>',
		'notice'=>'Pemberitahuan:'
		
	);
	
	
	
	$lang['admin']['maintain']['updates']['msgs'] = array(
		1		=> 'Tampaknya belum ada pembaruan!',
		2		=> 'Tampaknya FlatPress Anda adalah versi terbaru',
		-1		=> 'Maaf, sementara sistem belum bisa menerima informasi'
	);

?>
