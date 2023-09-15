<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>API Handphone</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link href="<?php echo base_url()?>assets/img/smartphone.png" rel="icon">
    <link rel="icon" type="<?php echo base_url()?>assetU/image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="<?php echo base_url()?>assetU/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
    



<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Profile page</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <!-- <li><a href="<?php echo site_url()?>/Dashboard" class="fw-normal">Home</a></li> -->
                            </ol>
                            <a href="<?php echo site_url()?>/Dashboard" 
                                class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Home</a>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="<?php echo base_url()?>assetU/plugins/images/users/34.jpg">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="<?php echo base_url()?>assetU/plugins/images/users/admin.png"
                                                class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white mt-2"><?php echo $res->nama_lengkap ?></h4>
                                        <h5 class="text-white mt-2"><?php echo $res->username ?></h5>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material">
                                    <div class="form-group mb-6">
                                        <label class="col-md-12 p-0">Nama Admin</label>
                                        <div class="col-md-12 border-bottom p-0"><?php echo $res->nama_lengkap ?> </div>
                                    </div>
                                    <div class="form-group mb-6">
                                        <label for="example-email" class="col-md-12 p-0">Username Admin</label>
                                        <div class="col-md-12 border-bottom p-0"><?php echo $res->username ?></div>
                                    </div>
                                    <div class="form-group mb-6">
                                        <label for="example-email" class="col-md-12 p-0">Hak Akses</label>
                                        <div class="col-md-12 border-bottom p-0"><?php echo $res->hak_akses ?></div>
                                    </div>
                                    <div class="form-group mb-6">
                                        <label for="example-email" class="col-md-12 p-0">Password</label>
                                        <div class="col-md-12 border-bottom p-0"><?php echo $res->password ?></div>
                                    </div>
                                   
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <script src="<?php echo base_url()?>assetU/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url()?>assetU/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url()?>assetU/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url()?>assetU/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url()?>assetU/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url()?>assetU/js/custom.js"></script>
</body>
</html>