
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h5 mb-2 text-gray-800"align="center">BUKU</h1>
                    
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-dark">Tabel Buku
                            <a href="beranda.php?page=buku&aksi=add">
                                <button class="btn btn-warning">ADD DATA</button>
                                </a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            
                                            <th>id_buku</th>
                                            <th>isbn</th>
                                            <th>nama_buku</th>
                                            <th>penulis</th>
                                            <th>penerbit</th>
                                            <th>tahun_terbit</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          
                                            <th>id_buku</th>
                                            <th>isbn</th>
                                            <th>nama_buku</th>
                                            <th>penulis</th>
                                            <th>penerbit</th>
                                            <th>tahun_terbit</th>
                                            <th>aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        $sql = "select * from buku";
                                        $show = $db->query($sql);

                                        foreach($show as $buku):
                                    ?>
                                        <tr>
                                            
                                            <td><?php echo $buku['id_buku']?></td>
                                            <td><?php echo $buku['isbn']?></td>
                                            <td><?php echo $buku['nama_buku']?></td>
                                            <td><?php echo $buku['penulis']?></td>
                                            <td><?php echo $buku['penerbit']?></td>
                                            <td><?php echo $buku['tahun_terbit']?></td>
                                            <td>
                                            <a href="beranda.php?page=anggota&aksi=edit&id=<?php echo $agt['id_anggota']?>"
                                                class="btn btn-primary btn-circle">
                                                        <i class="fas fa-edit"></i>
                                                        </a>
                                                <a href="model/anggota/prosesdeleteanggota.php?id=<?php echo $agt['id_anggota']?>"
                                                class="btn btn-danger btn-circle">
                                                        <i class="fas fa-trash"></i>
                                                        </a>
                                            </td>
                                        </tr>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>