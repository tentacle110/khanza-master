<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Login</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url(); ?>assets/vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>assets/img/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>assets/img/logo.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendors/styles/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-119386393-1');
    </script>
</head>

<body class="login-page">
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="<?= base_url(); ?>assets/vendors/images/login-page-img.png" alt="">
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">Login To Khanza</h2>
                        </div>
                        <?php if ($this->session->flashdata('error')) { ?>
                        <div class="alert alert-danger" role="alert" style="margin-top: 10px;">
                            <?php echo $this->session->flashdata('error'); ?>
                        </div>
                        <?php } ?>
                        <form action="<?php echo base_url();?>auth/login" method="post">

                            <div class="input-group custom">
                                <input type="text" name="user_name" class="form-control form-control-lg"
                                    placeholder="Username" required>
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                            </div>
                            <div class="input-group custom">
                                <input type="password" name="pass_word" class="form-control form-control-lg"
                                    placeholder="**********" required>
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                            </div>
                            <div class="row pb-30">
                                <div class="col-6">
                                    <!-- <div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Remember</label>
									</div> -->
                                </div>
                                <div class="col-6">
                                    <!-- <div class="forgot-password"><a href="forgot-password.html">Forgot Password</a></div> -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
										-->
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- js -->
    <script src="<?= base_url(); ?>assets/vendors/scripts/core.js"></script>
    <script src="<?= base_url(); ?>assets/vendors/scripts/script.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendors/scripts/process.js"></script>
    <script src="<?= base_url(); ?>assets/vendors/scripts/layout-settings.js"></script>
</body>

</html>