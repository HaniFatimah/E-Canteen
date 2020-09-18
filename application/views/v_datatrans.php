    <!-- Begin Page Content -->
    <div class="container-fluid">
    <div class="row" >
            <div class="col-sm-12 mt-3 ">
            <h3>Data Transaksi</h3>
                <hr>
                <a class="btn btn-primary" href="<?php echo site_url('C_transaksi/cetak');?>"> <i class="fa fa-download"></i> Cetak Data</i></a>
                <br><br>
                <div class="table-responsive" style="overflow: auto; height: 450px;">
                
                    <table id="example" class="table table-striped table-bordered" style="width: 100%">
                    <thead>
                        <tr>
                            <th style="text-align: center;">No</th>
                            <th style="text-align: center;">Id Transaksi</th>
                            <th style="text-align: center;">Tanggal Transaksi</th>
                            <th style="text-align: center;">Sub Total</th>
                            <th style="text-align: center;">Id User</th>
                            
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