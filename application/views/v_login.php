<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

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

        .icon-user{
            float: right;
            margin-top: 1px;
            right: 18px;
        }

        .img1{
            width: 25%;
        }

        .mt-12{
            margin-top: 160px;
        }

        .link-a {
            margin-left: -6%;
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
                          <img src="<?php echo base_url('assets/img/log.png') ?>" class="img1">
                            <div class="icon-user">
                                    <h4 class="fas fa-user"></h4>
                            </div>
                          </div>
                          <div class="card-body"> 
                            <form method="post">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                                    </div>
                                <input type="text" name="username" class="form-control" placeholder="Username">
                                </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                                    </div>
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                </div>
                                <a class="dropdown-item link-a" href="<?php echo base_url('C_register') ?>">Belum Punya Akun? Daftar</a>
                                <hr>
                                <button type="submit" name="loginUser" class="btn btn-primary ">Masuk <i class="fas fa-angle-double-right"></i></button>
                                <button type="reset" class="btn btn-danger ">Reset</button>
                                

                            </form>
                          </div>
                      </div>
                   </div>
               </div>
            </div>
        </div>
    </div>


</body>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>