<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.png')?>">
    <!-- Page Title  -->
    <title><?= $title ?></title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="<?= base_url('assets/assets/css/dashlite.css?ver=2.2.0')?>">
    <link id="skin-default" rel="stylesheet" href="<?= base_url('assets/assets/css/theme.css?ver=2.2.0')?>">
</head>

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="html/index.html" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="<?= base_url('assets/images/logo.png')?>" srcset="<?= base_url('assets/images/logo2x.png 2x')?>" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="<?= base_url('assets/images/logo-dark.png')?>" srcset="<?= base_url('assets/images/logo-dark2x.png 2x')?>" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content mb">
                                        <h4 class="nk-block-title">Activate Account</h4>
                                        <div class="nk-block-des mb-3">
                                            <p>Access the CryptoLite panel using your email and passcode.</p>
                                             <!-- error message -->
                                            <?php if($this->session->flashdata('error')): ?>
                                                    <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
                                                <?php endif  ?>
                                            <!-- success message -->
                                            <?php if($this->session->flashdata('success')): ?>
                                                    <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
                                            <?php endif  ?>
                                            <!-- ends -->
                                            <!-- error data begins -->
                                            <?php if(isset($error)): ?>
                                                <div class="alert alert-danger text-center" role="alert">
                                                    <?= $error ?>
                                                </div>
                                            <?php endif ?>
                                            <!-- error -->
                                        </div>
                                        <a href="<?= base_url('user/auth')?>">Click Here To Login?</a>
                                    </div>
                                </div>
                               
                                
                            </div>
                        </div>
                    </div>
                    <div class="nk-footer nk-auth-footer-full">
                        <div class="container wide-lg">
                            <div class="row g-3">
                                <div class="col-lg-6 order-lg-last">
                                    <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Terms & Condition</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Help</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="nk-block-content text-center text-lg-left">
                                        <p class="text-soft">&copy; 2019 CryptoLite. All Rights Reserved.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="<?= base_url('assets/js/bundle.js?ver=2.2.0')?>"></script>
    <script src="<?= base_url('assets/js/scripts.js?ver=2.2.0')?>"></script>

</html>