<?php if($this->session->userdata('logged_in')){
    redirect('admin/index');
}
else{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="" >
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Meta Responsive tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url() ;?>assets/admin/css/bootstrap.min.css">
    <!--Custom style.css-->
    <link rel="stylesheet" href="<?php echo base_url() ;?>assets/admin/css/quicksand.css">
    <link rel="stylesheet" href="<?php echo base_url() ;?>assets/admin/css/style.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="<?php echo base_url() ;?>assets/admin/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ;?>assets/admin/css/fontawesome.css">
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>Admin</title>


<!--Login failed msg-->
<?php if($this->session->flashdata('login_failed')):?>
    
    <?php echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">'?>
        <?php echo    '<p>'?>
            <?php echo '<strong>' ?>
                <?php echo '<i class="fa fa-times"></i>'?>
                <?php echo  $this->session->flashdata('login_failed');?>
            <?php echo '</strong>' ?>
            check in.
        <?php echo    '</p>'?>
        <?php echo   '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'?>
            <?php echo '<span aria-hidden="true">'?> &times;  <?php echo '</span>'?>
        <?php echo '</button>'?>
    <?php echo '</div>'?>

<?php endif; ?>
<!--Login failed msg-->

  </head>

  <body class="login-body">
    
    <!--Login Wrapper-->

    <div class="container-fluid login-wrapper">
        <div class="login-box">
            <h1 class="text-center mb-5"><i class="fa fa-rocket text-primary"></i> Admin</h1>    
            <div class="row">
                <div class="col-md-6 col-sm-6 col-12 login-box-info">
                    <h3 class="mb-4">Sign up</h3>
                    <p class="mb-4">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.</p>
                    <p class="text-center"><a href="" class="btn btn-light">Register here</a></p>
                </div>
                <div class="col-md-6 col-sm-6 col-12 login-box-form p-4">
                    <h3 class="mb-2">Login</h3>
                    <small class="text-muted bc-description">Sign in with your credentials</small>
                    
                    <?php echo form_open('auser/login', 'class="mt-2"');?>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" name="username" class="form-control mt-0" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required autofocus>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control mt-0" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required autofocus>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-theme btn-block p-2 mb-1">Login</button>
                            <a href="#">
                                <small class="text-theme"><strong>Forgot password?</strong></small>
                            </a>
                        </div>
                    <?php echo form_close();?>
                </div>
            </div>
        </div>
    </div>    

    <!--Login Wrapper-->

    <!-- Page JavaScript Files-->
    <script src="<?php echo base_url() ;?>assets/admin/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ;?>assets/admin/js/jquery-1.12.4.min.js"></script>
    <!--Popper JS-->
    <script src="<?php echo base_url() ;?>assets/admin/js/popper.min.js"></script>
    <!--Bootstrap-->
    <script src="<?php echo base_url() ;?>assets/admin/js/bootstrap.min.js"></script>

    <!--Custom Js Script-->
    <script src="<?php echo base_url() ;?>assets/admin/js/custom.js"></script>
    <!--Custom Js Script-->
  </body>
</html>
<?php
}
?>