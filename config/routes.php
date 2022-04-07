<?php

if(@$_GET['page'] == ''){
    include "views/beranda.php";
}else if($_GET['page'] == 'user'){
	include "views/user/user.php";
}else if($_GET['page'] == 'pegawai'){
	@$aksi = $_GET['aksi'];
    if(@$aksi){
        if($aksi == 'add'){
            include "views/pegawai/addpegawai.php";
        }
        else if ($aksi == 'edit'){
            include "views/pegawai/editpegawai.php";
        }
        else if($aksi == 'delete'){
            include "model/pegawai/prosesdeletepegawai.php";
        }
    }else
    {
	    include "views/pegawai/pegawai.php";
    }
}else if($_GET['page'] == 'buku'){
    @$aksi = $_GET['aksi'];
    if(@$aksi){
        if($aksi == 'add'){
            include "views/buku/addbuku.php";
        }
        else if ($aksi == 'edit'){
            include "views/buku/editbuku.php";
        }
        else if($aksi == 'delete'){
            include "model/buku/prosesdeletebuku.php";
        }
    }else
    {
	    include "views/buku/buku.php";
    }
}else if($_GET['page'] == 'anggota'){ 
	@$aksi = $_GET['aksi'];
    if(@$aksi){
        if($aksi == 'add'){
            include "views/anggota/addanggota.php";
        }
        else if ($aksi == 'edit'){
            include "views/anggota/editanggota.php";
        }
        else if($aksi == 'delete'){
            include "model/anggota/prosesdeleteanggota.php";
        }
    }else
    {
        include "views/transaksi/transaksi.php";
    }
}else if($_GET['page'] == 'transaksi'){
	include "views/transaksi/transaksi.php";
}
