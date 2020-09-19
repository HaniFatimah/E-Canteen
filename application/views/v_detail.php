    <!-- Begin Page Content -->
    <div class="container-fluid">
    <h3><strong>Detail Data Transaksi</strong></h3>
    <br>
    <table class="table">

        <tr>
        <th>Id Transaksi</th>
        <td><?php echo $detail->id_transaksi?></td>
        </tr>
    
        <tr>
        <th>Tanggal Transaksi</th>
        <td><?php echo $detail->tanggal_transaksi?></td>
        </tr>
        

        <tr>
        <th>Sub Total</th>
        <td>Rp.<?php echo number_format($detail->sub_total)?></td>
        </tr>
    
        <tr>
        <th>Id User</th>
        <td><?php echo $detail->id_user?></td>
        </tr>

        
    </table>
    <a class="btn btn-primary" href="<?php echo base_url('C_transaksi/data_in') ?>">Kembali</a>

    </div>
    </div>
    </div>


        
        <!-- /.container-fluid -->

      <!-- End of Main Content -->