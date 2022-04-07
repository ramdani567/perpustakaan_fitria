
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h5 mb-2 text-gray-800"align="center"><marque>USER</marque></h1>
                   
                    <div class="card shadow mb-20">
                        <div class="card-header py-5">
                            <h6 class="m-0 font-weight-bold text-dark">Tabel User
                            <a href="beranda.php?page=anggota&aksi=add">
                                <button class="btn btn-danger">ADD DATA</button>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id User</th>
                                            <th>Id Pegawai</th>
                                            <th>User Name</th>
                                            <th>Password</th>
                                            <th>Level</th>
                                            <th>dibuatpada</th>
                                            <th>aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Id User</th>
                                            <th>Id Pegawai</th>
                                            <th>User Name</th>
                                            <th>Password</th>
                                            <th>Level</th>
                                            <th>dibuatpada</th>
                                            <th>aksi</th>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $sql = "select * from user";
                                        $show = $db->query($sql);

                                        foreach($show as $user):
                                    ?>
                                        <tr>
                                            <td><?php echo $user['id_user']?></td>
                                            <td><?php echo $user['id_pegawai']?></td>
                                            <td><?php echo $user['username']?></td>
                                            <td><?php echo $user['password']?></td>
                                            <td><?php echo $user['level']?></td>
                                            <td><?php echo $user['dibuatpada']?></td>
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
                                        <?php endforeach; ?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>