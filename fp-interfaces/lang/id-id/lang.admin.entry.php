<?php
/*
LangId: Bahasa Indonesia translate by: eggoez - http://eggoez.com
# Bila ada kesalahan baik secara penulisan atau ucapan kata
# mohon hubungi saya di eggoez@yahoo.com
# Hargailah Karya Orang Lain dengan tidak Merubah Isi &
# Terimakasih sudah menggunakan Bahasa Indonesia :)
*/

	$lang['admin']['entry']['submenu'] = 
	array (
		'list'		=> 'Tulisan',
		'write'		=> 'Entri Baru',
		'cats'		=> 'Kategori'
	);


	/* default action */
	
	$lang['admin']['entry']['list'] = 
	array(
		'head'		=> 'Kelola Tulisan Entri',
		'descr'		=> 'Silahkan pilih tulisan entri untuk menyunting atau <a href="admin.php?p=entry&amp;action=write">tulis baru</a>'.
					'<br /><a href="admin.php?p=entry&amp;action=cats">Kelola kategori</a>',
		'filter'	=> 'Sisihkan: ',
		'nofilter'	=> 'Lihat semua',
		'filterbtn'	=> 'Terapkan Penyisihan',
		'sel'		=> 'Sel', // checkbox
		'date'		=> 'Tanggal',
		'title'		=> 'Judul',
		'author'	=> 'Penulis',
		'comms'		=> 'Komentar', // comments
		'action'	=> 'Aksi',
		'act_del'	=> 'Hapus',
		'act_view'	=> 'Pratinjau',
		'act_edit'	=> 'Sunting'
	);
	
	/* write action */
	$lang['admin']['entry']['write'] = 
	array(
		'head'		=> 'Tambahkan Tulisan Baru',
		'descr'		=> 'Ubah formulir untuk menulis sebuah entri',
		'uploader'	=> 'Unggah',
		'fieldset1'	=> 'Ubah',
		'subject'	=> 'Judul (*):',
		'content'	=> 'Konten (*):',
		'fieldset2'	=> 'Ajukan',
		'submit'	=> 'Terbitkan',
		'preview'	=> 'Pratinjau',
		'savecontinue'	=> 'Simpan &amp; Lanjutkan',
		'archive'	=> 'Kategori',
		'nocategories'	=> 'Tidak ada katogori. <a href="admin.php?p=entry&amp;action=cats">Buat baru'. 
					'categories</a> dari halaman pengelola utama. '.
					'<a href="#save">Simpan</a> entri dahulu.',
		'saveopts'	=> 'Pilihan Lanjutan pada tulisan ini',
		'success'	=> 'Entri Anda sukses dipublikasikan',
		'otheropts'	=> 'Pilihan lainya',
		'commmsg'	=> 'Kelola komentar untuk entri ini',
		'delmsg'	=> 'Hapus entri ini',
		//'back'		=> 'Back discarding changes',
	);
	

	$lang['admin']['entry']['list']['msgs'] = array(
		1	=> 'Entri berhasil disimpan',
		-1	=> 'Ada kesalahan dalam menyimpan 
					entri ini',
		2	=> 'Entri berhasil dihapus',
		-2	=>	 'Ada kesalahan dalam menghapus 
					entri ini',
	);

	
	$lang['admin']['entry']['write']['error'] = array(
		'subject'	=> 'Kesalahan: Judul tidak ada',
		'content'	=> 'Kesalahan: Konten Entri kosong',
	);
	
	$lang['admin']['entry']['write']['msgs'] = array(
		1	=> 'Entri berhasil disimpan',
		-1	=> 'Tampaknya ada kesalahan: entri Anda gagal disimpan',
		-2	=> 'Tampaknya ada kesalahan: entri Anda tidak disimpan karena pembaca indek sedang bermasalah',
		-3	=> 'Tampaknya ada kesalahan: entri Anda disimpan di konsep',
		-4	=> 'Tampaknya ada kesalahan: pembaca indek sedang bermasalah dan entri Anda disimpan di konsep',
		'draft'=> 'Anda mengubah tulisan entri <strong>konsep</strong> '
	);

	
	/* comments */
	
	$lang['admin']['entry']['commentlist'] = 
	array(
		'head'		=> "Kementar pada tulisan", 
		'descr'		=> 'Pilih komentar untuk disunting atau dihapus',
		'sel'		=> 'Sel',
		'content'	=> 'Konten',
		'date'		=> 'Tanggal',
		'author'	=> 'Nama',
		'email'		=> 'E-mail',
		'ip'		=> 'IP',
		'actions'	=> 'Aksi',
		'act_edit'	=> 'Sunting',
		'act_del'	=> 'Hapus',
		'act_del_confirm' => 'Yakin akan menghapus komentar ini?',
		'nocomments'	=> 'Saat ini tidak ada komentar pada entri ini.',
		
	
	);

	$lang['admin']['entry']['commentlist']['msgs'] =
	array(
		1	=> 'Komentar berhasil dihapus.',
		-1	=> 'Tampaknya ada kesalahan dalam mengahapus
					komentar ini',
		
	);

	$lang['admin']['entry']['commedit'] = 
	array(
		'head'		=> "Sunting komentar pada", 
		'content'	=> 'Konten',
		'date'		=> 'Tanggal',
		'author'	=> 'Nama',
		'www'		=> 'Alamat',
		'email'		=> 'E-mail',
		'ip'		=> 'IP',
		'loggedin'	=> 'Orang terdaftar',
		'submit'	=> 'Simpan'
		
	
	);

	$lang['admin']['entry']['commedit']['msgs'] =
	array(
		1	=> 'Komentar berhasil dirubah',
		-1	=> 'Ada kesalahan dalam perubahan komentar',
	);
	
	/* delete action */
	
	$lang['admin']['entry']['delete'] = 
	array(
		'head'		=> 'Hapus Tulisan', 
		'descr'		=> 'Hapus Tulisan Entri',
		'preview'	=> 'Pratinjau',
		'confirm'	=> 'Yakin untuk menghapus tulisan ini?',
		'fset'		=> 'Hapus',
		'ok'		=> 'Ya.. Hapus entri ini',
		'cancel'	=> 'Tidak',
		'err'		=> 'Entri tidak dapat ditemukan',
	
	);
	
	/* category mgmt */
	
	$lang['admin']['entry']['cats'] =
	array(
		'head'		=> 'Kelola Kategori',
		'descr'		=> '<p>Lihatlah daftar contoh di bawah untuk membuat sebuah daftar kategori </p><p>Item kategori berformat "nama kategori :<em>nomor_id</em>". Id item akan berformat kebawah.</p>
		
	<p>Contoh:</p>
	<pre>
Asal :1
Berita :2
--Coretan :3
--Tugas :4
----Lain-lain :5
Informasi :6
	</pre>',
		'clear'		=> 'Bersihkan semua kategori',
	
		'fset1'		=> 'Ubah',
		'fset2'		=> 'Ajukan perubahan',
		'submit'	=> 'Simpan'
	);
	
	$lang['admin']['entry']['cats']['msgs'] = array(
		
		1	=> 'Kategori berhasil disimpan',
		-1	=> 'Tampaknya ada kesalahan dalam meyimpan kategori',
		2	=> 'Kategori berhasil dibersihkan',
		-2	=> 'Tampaknya ada yang salah, silahkan dicoba lagi',
		-3 	=> 'Nomor urutan kategori/id harus angka  (dan lebih dari 0 )'

	);
	
	
		
?>
