<?php
/* 
# Diterjemahkan oleh eggoez - http://eggoez.com
# Bila ada kesalahan baik secara penulisan atau ucapan kata
# Silahkan laporkan lewat e-mail di eggoez@yahoo.com
# Hargailah Karya Orang Lain dengan tidak Merubah Isi &
# Terimakasih sudah menggunakan Bahasa Indonesia :)
*/

$lang['admin']['plugin']['submenu']['bbcode'] = 'BBCode';
$lang['admin']['plugin']['bbcode'] = array(
	'head' => 'Konfigurasi BBCode',
	'desc1' => 'Memungkinkan menggunakan <a href="http://www.phpbb.com/'.
		'phpBB/faq.php?mode=bbcode">BBCode</a> Markup '.
		'plugin ini akan bekerja dengan lightbox (ketika juga diaktifkan).',
	
	'options' => 'Pilihan',

	'editing'	=> 'Penerapan',
	'allow_html'=> '',
	'allow_html_long' => 'Aktifkan menggunakan HTML bersama dengan BBCode',
	'toolbar' => 'Toolbar',
	'toolbar_long' => 'Aktifkan editor toolbar ketika menulis.',

	'other'	=>	'Pilihan lain',
	'comments' => 'Komentar',
	'comments_long' => 'Bolehkan memakai BBCode pada komentar',
	'urlmaxlen' => 'URL panjang maksimal',
	'urlmaxlen_long_pre' => 'Mempersingkat URL lebih panjang dari ',
	'urlmaxlen_long_post'=>' karakter.',
	'submit' => 'Simpan perubahan',
	'msgs' => array(
		1 => 'Konfig BBCode berhasil disimpan.',
		-1 => 'Konfig BBCode gagal disimpan.'
	),

	'editor' => array(
		'formatting'     => 'Format',
		'textarea'       => 'Navigasi: ',
		'expand'         => 'Perluas',
		'expandtitle'    => 'Perluas area teks',
		'reduce'         => 'Persempit',
		'reducetitle'    => 'Persempit area teks',
		// note: accesskeys are not internationalized...
		// btw. why not :-D
		'bold'           => 'B',
		'boldtitle'      => 'Tebal',
		'italic'         => 'I',
		'italictitle'    => 'Miring',
		'underline'      => 'U',
		'underlinetitle' => 'Garis bawah',
		'quote'          => 'Quote',
		'quotetitle'     => 'Kutipan',
		'code'           => 'Code',
		'codetitle'      => 'Kode',
		'help'           => 'Bantuan BBCode',
		// currently not used
		'status'         => 'Status bar',
		'statusbar'      => 'Modus biasa. Tekan &lt;Esc&gt; untuk rubah modus pengeditan.'
	)
);

?>
