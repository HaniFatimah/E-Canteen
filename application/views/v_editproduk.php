    <!-- Begin Page Content -->
    <div class="container-fluid">
    <div class="row">

        <div class="col-sm-12">
        <h2>Edit User</h2>

            <div class="card">
                <div class="card-body">
                <form method="post"> 
                                        
                    <div class="form-group ">
                    <label >Nama Menu </label>
                        <input type="text" name="nama_product" class="form-control" value="<?php echo $edit->nama_product;?>">
                    </div>

                    <div class="form-group ">
                    <label >Harga Menu</label>
                        <input type="text" name="harga_product"  class="form-control" value="<?php echo $edit->harga_product;?>">
                    </div>

                 
                    <div class="form-group ">
                    <label >Stok Menu</label>
                        <input type="text" name="stok_product"  class="form-control" value="<?php echo $edit->stok_product;?>">
                    </div>

                    

                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-primary">Selesai</button>

                </form>
            </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
  
        <!-- /.container-fluid -->

      <!-- End of Main Content -->