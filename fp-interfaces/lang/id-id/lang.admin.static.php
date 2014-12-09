<?php
/*
LangId: Bahasa Indonesia translate by: eggoez - http://eggoez.com
# Bila ada kesalahan baik secara penulisan atau ucapan kata
# mohon hubungi saya di eggoez@yahoo.com
# Hargailah Karya Orang Lain dengan tidak Merubah Isi &
# Terimakasih sudah menggunakan Bahasa Indonesia :)
*/
	$lang['admin']['static']['submenu'] = array(
		'list'		=> 'Kelola statis',
		'write'		=> 'Tambah statis'
	);

	
	/* main panel */
		
	$lang['admin']['static']['list'] = array(
	
		'head'		=> 'Halaman statis',
		'descr'		=> 'Pilih sebuah halaman untuk disunting atau <a href="admin.php?p=static&amp;action=write">tambah baru</a>.',
	
		'sel'		=> 'Sel', // checkbox
		'date'		=> 'Tanggal',
		'name'		=> 'Halaman',
		'title'		=> 'Judul',
		'author'	=> 'Penulis',
		
		'action'	=> 'Aksi',
		'act_view'	=> 'Lihat',
		'act_del'	=> 'Hapus',
		'act_edit'	=> 'Sunting'		
	);
	
	$lang['admin']['static']['list']['msgs'] = array(
		1	=> 'Halaman berhasil disimpan',
		-1	=> 'Tampaknya ada kesalahan dalam menyimpan
					sebuah halaman',
		2	=> 'Halaman berhasil dihapus',
		-2	=>	 'Tampaknya ada kesalahan dalam penghapusan, Silahkan ulangi menghapus
					sebuah halaman',
	);

	/* write panel */

	$lang['admin']['static']['write'] = 
	array(
		'head'		=> 'Tambahkan atau Sunting Halaman Statis',
		'descr'		=> 'Sunting daftar untuk menerbitkan sebuah halaman',
		'fieldset1'	=> 'Sunting',
		'subject'	=> 'Subjek (*):',
		'content'	=> 'Konten (*):',
		'fieldset2'	=> 'Lainya',
		'pagename'	=> 'Namai halaman(*):',
		'submit'	=> 'Terbitkan',
		'preview'	=> 'Pratinjau',

		'delfset'	=> 'Hapus',
		'deletemsg'	=> 'Hapus halaman ini',
		'del'		=> 'Hapus',
		'success'	=> 'Halaman berhasil diterbitkan',
		'otheropts'	=> 'Pilihan lainya',
	);
	
	$lang['admin']['static']['write']['error'] = array(
		'subject'	=> 'Kesalahan: Subjek kosong',
		'content'	=> 'Kesalahan: konten kosong',
		'id'		=> 'Anda harus memasukkan Id atau nama halaman yang benar'
	);
	
	
	/* delete action */	
	$lang['admin']['static']['delete'] = array(
		'head'		=> "Hapus halaman", 
		'descr'		=> 'Hapus halaman terpilih:',
		'preview'	=> 'Pratinjau',
		'confirm'	=> 'Yakin untuk menghapus? Ini tidak bisa dikembalikan lagi!',
		'fset'		=> 'Hapus',
		'ok'		=> 'Ya, Hapus halaman ini',
		'cancel'	=> 'Batalkan',
		'err'		=> 'Target halaman tidak ada',
	
	);
	
	
		
?>
