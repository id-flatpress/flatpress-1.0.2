<?php
/*
LangId: Bahasa Indonesia translate by: eggoez - http://eggoez.com
# Bila ada kesalahan baik secara penulisan atau ucapan kata
# mohon hubungi saya di eggoez@yahoo.com
# Hargailah Karya Orang Lain dengan tidak Merubah Isi &
# Terimakasih sudah menggunakan Bahasa Indonesia :)
*/

	$lang['plugin']['akismet']['errors'] = array (
		-1	=> 'API serial tidak dimasukkan. Buka plugin untuk memasukkan kunci API. Dengan Cara Mendaftar pada <a href="http://wordpress.com">Wordpress.com</a> terlebih dahulu'
	);
	
	$lang['admin']['plugin']['submenu']['akismet'] = 'Konfik Akismet';
	
	$lang['admin']['plugin']['akismet'] = array(
		'head'		=> 'Konfigurasi Akismet',
		'description'=>'Hai, <a href="http://akismet.com/">Akismet</a> akan mengurangi '
					 .'atau bahkan sepenuhnya menghilangkan komentar bersifat spam pada blog Anda. '
					 .'Jika Anda tidak memiliki akun WordPress.com, Anda bisa mendaftar dahulu di '.
					 '<a href="http://wordpress.com/api-keys/">WordPress.com</a>.',
		'apikey'	=> 'WordPress.com API Key',
		'whatis'	=> '(<a href="http://faq.wordpress.com/2005/10/19/api-key/">Apa ini?</a>)',
		'submit'	=> 'Simpan API key'
	);
	$lang['admin']['plugin']['akismet']['msgs'] = array(
		1		=> 'API key telah disimpan',
		-1		=> 'API key tidak valid'
	);
	
?>
