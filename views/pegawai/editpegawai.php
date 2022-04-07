<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive"align="center">
                        <h4>Edit Data Pegawai</h4>
                        <br>
                        <form action="model/buku/prosesaddbuku.php"align="center" method="POST">
                            <table class="table">
                                <tr>
                                    <td>id_pegawai</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="id_pegawai" id="id_pegawai"></td>
                                </tr>
                                <tr>
                                    <td>nama_pegawai</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="nama_pegawai" id="nama_pegawai"></td>
                                </tr>
                                <tr>
                                <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td>
                                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                            <option value="l">Laki Laki</option>
                                            <option value="p">Perempuan</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>alamat</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="alamat" id="alamat"></input></td>
                                </tr>
                                <tr>
                                    <td>no_hp</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="no_hp" id="no_hp"></input></td>
                                </tr>
                                <tr>
                                    <td>jabatan</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="jabatan" id="jabatan"></input></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-primary" value="Simpan">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>