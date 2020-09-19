    <!-- Begin Page Content -->
    <div class="container-fluid">
    <div class="row" >
            <div class="col-sm-12 mt-3 ">
            <h3>Data Menu</h3>
                <hr>
                <div class="table-responsive" >
               
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
                                <a href="<?php echo base_url().'C_transaksi/beliproduk/'.$datas->id_product; ?>" class="btn btn-success beliproduk"><i class="fas fa-buy"></i> Beli</a> 
                            </td>
                        </tr>
                    <?php  endforeach; ?>

                    </tbody>
                </table>
                </div>
    </div>     
    </div> 
    </div>
        
        <!-- /.container-fluid -->

      <!-- End of Main Content -->