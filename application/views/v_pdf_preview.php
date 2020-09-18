    <!-- Begin Page Content -->
    <div class="container-fluid">
    <div class="row" >
            <div class="col-sm-12 mt-3 ">
            <br>
            <h2>Data Transaksi</h2>
            <?php echo "Tanggal : ".date('d-m-Y'); ?>

                <hr>
                <br><br>
                <div class="table-responsive" style="overflow: auto; height: 450px;">
                
                <table class="table table-bordered" width="100%" border="1px" cellspacing="0" cellpadding="8px">
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