<?php
    include "../../config/koneksi.php";
    $id = $_GET ['id'];
    $sql = "DELETE from anggota where id_anggota = $id";
    $db->query($sql);
    header('location: ../../beranda.php?page=anggota');
?>