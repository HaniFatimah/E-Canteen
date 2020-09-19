    <!-- Begin Page Content -->
    <div class="container-fluid">
    <div class="row" >
            <div class="col-sm-12 mt-3 ">
            <h3>Data User</h3>
            <hr>
            <button class="btn btn-primary " data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data</button>
                <hr>
                <div class="table-responsive">
               
                    <table id="example" class="table table-striped table-bordered" style="width: 100%">
                    <thead>
                        <tr>
                            <th style="text-align: center;">No</th>
                            <th style="text-align: center;">Id Admin</th>
                            <th style="text-align: center;">Nama Lengkap</th>
                            <th style="text-align: center;">Username</th>
                            <th style="text-align: center;">Level</th>

                            <th style="text-align: center;">Aksi</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    
                        <?php $no=1; foreach($users as $datas) : ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $no++;?></td>
                            <td style="text-align: center;"><?php echo $datas->id_user;?></td>
                            <td style="text-align: center;"><?php echo $datas->nama_user;?></td>
                            <td style="text-align: center;"><?php echo $datas->username;?></td>
                            <td style="text-align: center;"><?php echo $datas->level;?></td>

                            <td style="text-align: center;">
                                <a href="<?php echo base_url().'C_user/edit/'.$datas->id_user; ?>" class="btn btn-success edit"><i class="fas fa-edit"></i> Edit</a> 
                                <a href="<?php echo base_url().'C_user/hapus/'.$datas->id_user; ?>" class="btn btn-danger hapus" onclick="javascript: return confirm('Anda Yakin Hapus?');"><i class="fas fa-trash"></i> Hapus</a>
                            </td>
                        </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
    </div> 
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" name="nama_user" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-primary "></a> Simpan</button>

                    </form>
                </div>
                
                </div>
            </div>
            </div>
    </div>
    </div>
        
        <!-- /.container-fluid -->

      <!-- End of Main Content -->