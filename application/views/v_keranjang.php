    <!-- Begin Page Content -->
    <div class="container-fluid">
    <div class="row" >    
    <div class="col-sm-12 mt-3 ">
    <h3>Keranjang Pembelian</h3>
            <hr>
            <h4>Kode Transaksi <?php echo $kode_jual ;?></h4>                
            <hr>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width: 100%">
                    <thead>
                        <tr>
                            <th style="text-align: center;">Nama Menu</th>
                            <th style="text-align: center;">Harga Menu</th>
                            <th style="text-align: center;">Jumlah Beli</th>
                            <th style="text-align: center;">Total</th>
                            <th style="text-align: center;">Aksi</th>                            
                        </tr>
                    </thead>
                    <tbody>

                    <?php foreach($detail_beli as $datas) :?>
                    <tr>
                            <td style="text-align: center;"><?php echo $datas->nama_product;?></td>
                            <td style="text-align: center;">Rp.<?php echo number_format($datas->harga_product);?></td>
                            <td style="text-align: center;"><?php echo $datas->jumlah_beli;?></td>
                            <td style="text-align: center;">Rp.<?php echo number_format($datas->total_harga); ?></td>
                            <td style="text-align: center;"><a href="<?php echo base_url().'C_transaksi/hapus/'.$kode_jual.'-'.$datas->id_product;?>" class="btn btn-danger hapus"><i class="fas fa-trash"></i> Hapus</a></td>   
                    </tr>
                    <?php endforeach; ?>
                    <tr>
                    <strong>
                    <td colspan="4">Sub Total : </td>
                    <td colspan="2"><b>Rp.<?php echo number_format($sub_total->total);?></td></b>
                    </strong>
                    </tr>
                    </tbody>
                </table>
                <a href="<?php echo base_url().'C_transaksi/cekout/'.$sub_total->total;?>" class="btn btn-success">Checkout</a>
                </div>
    </div> 
    </div>
    </div>

        
        <!-- /.container-fluid -->

      <!-- End of Main Content -->