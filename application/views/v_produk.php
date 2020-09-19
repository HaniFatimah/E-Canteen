    <!-- Begin Page Content -->
    <div class="container-fluid">
    <div class="row" >
            <div class="col-sm-12 mt-3 ">
            <h3>Data Menu</h3>
            <hr>
            <button class="btn btn-primary " data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data</button>
                <hr>
                <div class="table-responsive">
               
                    <table id="example" class="table table-striped table-bordered" style="width: 100%">
                    <thead>
                        <tr>
                            <th style="text-align: center;">No</th>
                            <th style="text-align: center;">Id Menu</th>
                            <th style="text-align: center;">Nama Menu</th>
                            <th style="text-align: center;">Harga Menu</th>
                             <th style="text-align: center;">Stok</th>
                            <th style="text-align: center;">Aksi</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; foreach($produk as $datas) : ?>

                        <tr>
                            <td style="text-align: center;"><?php echo $no++;?></td>
                            <td style="text-align: center;"><?php echo $datas->id_product;?></td>
                            <td style="text-align: center;"><?php echo $datas->nama_product;?></td>
                            <td style="text-align: center;">Rp.<?php echo number_format($datas->harga_product);?></td>
                            <td style="text-align: center;"><?php echo $datas->stok_product;?></td>

                            <td style="text-align: center;">
                                <a href="<?php echo base_url().'C_produk/edit_produk/'.$datas->id_product; ?>" class="btn btn-success edit"><i class="fas fa-edit"></i> Edit</a> 
                                <a href="<?php echo base_url().'C_produk/hapus_produk/'.$datas->id_product; ?>" class="btn btn-danger hapus" onclick="javascript: return confirm('Anda Yakin Hapus?');"><i class="fas fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php  endforeach; ?>

                    </tbody>
                </table>
                </div>
    </div> 
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA PRODUCT</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="">Nama Poduct</label>
                            <input type="text" name="nama_product" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Harga Product</label>
                            <input type="text" name="harga_product" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Stok</label>
                            <input type="text" name="stok_product" class="form-control">
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