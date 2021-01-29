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

<body class="nk-body npc-crypto bg-white pg-auth">
    <!-- app body @s -->
    <div class="nk-app-root">
        <div class="nk-split nk-split-page nk-split-md">
            <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
                <div class="absolute-top-right d-lg-none p-5">
                    <a href="#" class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                </div>
                <div class="nk-block nk-block-middle nk-auth-body">
                    <div class="brand-logo pb-5">
                        <a href="html/index.html" class="logo-link">
                            <img class="logo-light logo-img logo-img-lg" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                            <img class="logo-dark logo-img logo-img-lg" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                        </a>
                    </div>
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">
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
                            </h5>
                            <div class="nk-block-des text-success">
                                <a href="<?= base_url('user/auth')?>">Click Here To Login?</a>
                            </div>
                        </div>
                    </div>
                </div><!-- .nk-block -->
                <div class="nk-block nk-auth-footer">
                    <div class="nk-block-between">
                        <ul class="nav nav-sm">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Terms & Condition</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Privacy Policy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Help</a>
                            </li>
                            <li class="nav-item dropup">
                                <a class="dropdown-toggle dropdown-indicator has-indicator nav-link" data-toggle="dropdown" data-offset="0,10"><small>English</small></a>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <ul class="language-list">
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="./images/flags/english.png" alt="" class="language-flag">
                                                <span class="language-name">English</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="./images/flags/spanish.png" alt="" class="language-flag">
                                                <span class="language-name">Español</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="./images/flags/french.png" alt="" class="language-flag">
                                                <span class="language-name">Français</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="./images/flags/turkey.png" alt="" class="language-flag">
                                                <span class="language-name">Türkçe</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul><!-- .nav -->
                    </div>
                    <div class="mt-3">
                        <p>&copy; 2019 DashLite. All Rights Reserved.</p>
                    </div>
                </div><!-- .nk-block -->
            </div><!-- .nk-split-content -->
            <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                <div class="slider-wrap w-100 w-max-550px  p-3 p-sm-5 m-auto">
                    <div class="nk-feature nk-feature-center">
                        <div class="nk-feature-img">
                            <img class="round" src="./images/slides/promo-a.png" srcset="./images/slides/promo-a2x.png 2x" alt="">
                        </div>
                        <div class="nk-feature-content  py-4 p-sm-5">
                            <h4>Dashlite</h4>
                            <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                        </div>
                    </div><!-- .nk-feature -->
                </div><!-- .slider-wrap -->
            </div><!-- .nk-split-content -->
        </div><!-- .nk-split -->
    </div><!-- app body @e -->
    <!-- JavaScript -->
    <script src="<?= base_url('assets/assets/js/bundle.js?ver=2.2.0')?>"></script>
    <script src="<?= base_url('assets/assets/js/scripts.js?ver=2.2.0')?>"></script>
</body>

</html>