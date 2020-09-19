<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.min.css') ?>">

    <style>
        body{
            background: #f7f7f7;
        }

        .card{
            border-radius: 0;
            border: 0;
            
        }

        .card > .card-header{
            background: transparent;
            border-bottom: 1px solid #eee;

        }

        .form-control{
            border-radius: 0;
            background-color: white;
        }

        .form-control:focus{
            box-shadow: none;

        }

        .border-box{
            box-shadow: 0 2px rgba(0, 0, 0, 0.04);
            border: 3px solid rgba(171, 169, 169, 0.06);
        }


        .img1{
            width: 30%;
        }

        .mt-12{
            margin-top: 25px;
        }

        .link-a {
            margin-left: -6%;
        }

        .img-fluid{
            width: 90%;
            height: 55%;
            margin-top: 30%;
        }
        body{
            background: #f7f7f7;
        }
    </style>
</head>
<body>
<!-- Image and text -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" id="mainNav">
        <div class="container">
        <a class="navbar-brand font-weight-bold" href="#">E-CANTEEN</a>

       
        </div>   
    </nav>
    <br>
    <div class="container">
        <div class="row justify-content-md-center mt-12">
            <div class="col-sm-9 border-box">
               <div class="row">
                   <div class="col-sm-5 p-0 ">
                        <img src="<?php echo base_url('assets/img/conver.png') ?>" class="img-fluid">
                   </div>
                   <div class="col-sm-7 p-0">
                      <div class="card">
                          <div class="card-header">
                          <img src="<?php echo base_url('assets/img/reg.png') ?>" class="img1">
                        
                          </div>
                          <div class="card-body">
                            <form method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                <label for="exampleInputPassword1">Nama Lengkap</label>
                                <div class="input-group">
                                    
                                <input type="text" class="form-control"  name="nama_user" placeholder="Nama Lengkap">
                                </div>
                                </div>

                                <div class="form-group">
                                <label for="exampleInputPassword1">Username</label>
                                <div class="input-group">
                                   
                                <input type="text" class="form-control" name="username" placeholder="Username">
                                </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <div class="input-group">
                                    
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <br>
        
                                <div class="form-group">
                                <label for="exampleInputPassword1">Level</label>
                                <div class="input-group">
                                
                                <input type="hidden"  class="form-control" name="level" placeholder="No.Telepon">3
                                </div>
                                </div>

                                </div>
                                <a class="dropdown-item link-a" href="<?php echo base_url('C_login') ?>">Sudah Punya Akun? Masuk</a>
                                <hr>
                                <button type="submit" class="btn btn-primary "><a href="<?php echo site_url('Homeboard/loginn');?>"></a> Daftar</button>
                                <button type="reset" class="btn btn-danger ">Reset</button>
                            </form>
                          </div>
                      </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
    <div>
    
    
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>