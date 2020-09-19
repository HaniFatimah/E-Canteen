    <!-- Begin Page Content -->
    <div class="container-fluid">
    <div class="row" >
            <div class="col-sm-12 mt-3 ">
            <h3>Data Transaksi</h3>
                <hr>
                <div class="table-responsive" style="overflow: auto; height: 450px;">
                
                    <table id="example" class="table table-striped table-bordered" style="width: 100%">
                    <thead>
                        <tr>
                            <th style="text-align: center;">No</th>
                            <th style="text-align: center;">Id Transaksi</th>
                            <th style="text-align: center;">Tanggal Transaksi</th>
                            <th style="text-align: center;">Sub Total</th>
                            <th style="text-align: center;">Id User</th>
                            <th style="text-align: center;">Aksi</th>

                            
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; foreach($transaksi as $datas) : ?>

                        <tr>
                            <td style="text-align: center;"><?php echo $no++;?></td>
                            <td style="text-align: center;"><?php echo $datas->id_transaksi;?></td>
                            <td style="text-align: center;"><?php echo $datas->tanggal_transaksi;?></td>
                            <td style="text-align: center;">Rp.<?php echo number_format($datas->sub_total);?></td>
                            <td style="text-align: center;"><?php echo $datas->id_user;?></td>
                            <td  style="text-align: center;">
                            <a href="<?php echo base_url().'C_transaksi/detail/'.$datas->id_transaksi; ?>" class="btn btn-success detail"><i class="fas fa-edit"></i> Detail Transaksi</a>
                            <a href="<?php echo base_url().'C_transaksi/cetak_invoice/'.$datas->id_transaksi; ?>" class="btn btn-primary"><i class="fas fa-print"></i> Cetak Transaksi</a>

                            </td>
                        </tr>
                    <?php $no++; endforeach; ?>

                    </tbody>
                </table>
                </div>
    </div>     
    </div> 
    </div>
        
        <!-- /.container-fluid -->

      <!-- End of Main Content -->