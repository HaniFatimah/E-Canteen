    <!-- Begin Page Content -->
    <div class="container-fluid">
    <div class="row">

        <div class="col-sm-12">
        <h2>edit User</h2>

            <div class="card">
                <div class="card-body">
                <form method="post"> 
                                        
                    <div class="form-group ">
                    <label >Nama Lengkap </label>
                        <input type="text" name="nama_user" class="form-control" value="<?php echo $edit->nama_user;?>">
                    </div>

                    <div class="form-group ">
                    <label >Username</label>
                        <input type="text" name="username"  class="form-control" value="<?php echo $edit->username;?>">
                    </div>

                    <div class="form-group ">
                        <input type="hidden" name="password_lama"  class="form-control" value="<?php echo $edit->password;?>">
                    </div>

                    <div class="form-group ">
                    <label >Password</label>
                        <input type="password" name="password"  class="form-control">
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
        
        <!-- /.container-fluid -->

      <!-- End of Main Content -->