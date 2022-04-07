<?php
    include "../../config/koneksi.php";
    $id = $_GET ['id'];
    $sql = "DELETE from pegawai where id_pegawai = $id";
    $db->query($sql);
    header('location: ../../beranda.php?page=pegawai');
?>