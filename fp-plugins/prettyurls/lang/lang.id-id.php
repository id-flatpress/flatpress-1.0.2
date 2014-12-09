<?php
/*
LangId: Bahasa Indonesia translate by: eggoez - http://eggoez.com
# Bila ada kesalahan baik secara penulisan atau ucapan kata
# mohon hubungi saya di eggoez@yahoo.com
# Hargailah Karya Orang Lain dengan tidak Merubah Isi &
# Terimakasih sudah menggunakan Bahasa Indonesia :)
*/
	$lang['plugin']['prettyurls']['errors'] = array (
		-2	=> 'Gagal merubah atau membuat baru file<code>.htaccess</code> di dalam root '.
				'folder. PrettyURLs sedang tidak aktif, lihat konfigurasi panel.'
	);
	
	$lang['admin']['plugin']['submenu']['prettyurls'] = 'Konfig PrettyURLs';
	$lang['admin']['plugin']['prettyurls'] = array(
		'head'		=> 'Konfigurasi PrettyURLs',
		'htaccess'	=> '.htaccess',
		'description'=>'Ini adalah editor raw pada file .htaccess'.
						'<code><a class="hint" href="http://wiki.flatpress.org/doc:plugins:prettyurls#htaccess">.htaccess</a></code>.',
		'cantsave'	=> 'Anda tidak di-izinkan merubah file ini, karena tidak mempunyai permisson untuk <strong>menulis</strong>. Anda bisa merubah izin file atau salin dan tempel pada file .htaccess dan meng-unggah secara manual <a class="hint" href="http://wiki.flatpress.org/doc:plugins:prettyurls#manual_upload">cari tahu disini</a>',
		'mode'		=> 'Model Link',
		'auto'		=> 'Otomatis',
			'autodescr'	=> 'tamplian standar dari plugin',
		'pathinfo'	=> 'Info Path',
			'pathinfodescr' => 'contoh: /index.php/2011/01/01/tulisan-anda/',
		'httpget'	=> 'HTTP Get',
			'httpgetdescr'=> 'contoh: /?u=/2011/01/01/tulisan-anda/',
		'pretty'	=> 'Pretty',
			'prettydescr'=> 'contoh: /2011/01/01/tulisan-anda/',

		'saveopt' 	=> 'Simpan pengaturan',

		'submit'	=> 'Simpan.htaccess'
	);
	$lang['admin']['plugin']['prettyurls']['msgs'] = array(
		1		=> '.htaccess berhasil disimpan',
		-1		=> '.htaccess gagal disimpan (anda mempunyai izin untuk menulis pada <code>'. BLOG_ROOT .'</code>)?',

		2		=> 'Pilihan berhasil disimpan',
		-2		=> 'Galat! Kesalahan saat menyimpan pengaturan',
	);
	
?>
