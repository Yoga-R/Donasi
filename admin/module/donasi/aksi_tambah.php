<?php
include "../../../lib/config.php";
include "../../../lib/koneksi.php";

$namaprog = $_POST['nama_program'];
$namakategori = $_POST['namakategori'];
$detail = $_POST['detail'];
$totaldana = $_POST['totaldana'];
$tanggalmulai = $_POST['tanggalmulai'];
$tanggalselesai = $_POST['tanggalselesai'];
$foto1 = $_POST['foto1'];
$foto2 = $_POST['foto2'];

if ($namaprog ==""){  echo "<script> alert ('Data Program gagal dimasukkan karena data kosong'); window.location ='$admin_url'+ 'adminweb.php?module=tambah_brand';</script>";
    
} else{
$querytambah = mysqli_query($koneksi, "INSERT INTO tbl_program (id_kategori,nama_program,detail_program,dana_program,tanggal_mulai,tanggal_selesai,foto1,foto2	) VALUES ('$namaprog','$namakategori','$detail','$totaldana','$tanggalmulai','$tanggalselesai','$foto1','$foto2')");
if ($querytambah){
    echo "<script> alert ('Data Program Berhasil ditambah'); window.location ='$admin_url'+ 'adminweb.php?module=kabupaten';</script>";
}else {
    echo "<script> alert ('Data Program gagal ditambah'); window.location ='$admin_url'+ 'adminweb.php?module=kabupaten';</script>";
}
}
?>