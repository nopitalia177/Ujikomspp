<?php

include("koneksi.php");

if( isset($_GET['hapus']) ){

    // ambil id dari query int
    $nis = $_GET['id_spp'];

    // buat query hapus
    $sql = "DELETE FROM dataanggota WHERE id_spp=$id_spp";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: spp.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>