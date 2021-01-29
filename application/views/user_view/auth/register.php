<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
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
                <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                    <a href="#" class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                </div>
                <div class="nk-block nk-block-middle nk-auth-body">
                    <div class="brand-logo pb-5">
                        <a href="html/index.html" class="logo-link">
                            <img class="logo-light logo-img logo-img-lg" src="<?= base_url('assets/images/logo.png')?>" srcset="<?= base_url('assets/images/logo2x.png 2x')?>" alt="logo">
                            <img class="logo-dark logo-img logo-img-lg" src="<?= base_url('assets/images/logo-dark.png')?>" srcset="<?= base_url('assets/images/logo-dark2x.png 2x')?>" alt="logo-dark">
                        </a>
                    </div>

                    <!-- error message -->
                        <?php if($this->session->flashdata('error')): ?>
                            <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
                        <?php endif  ?>
                    <!-- success message -->
                    <?php if($this->session->flashdata('success')): ?>
                            <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
                    <?php endif  ?>
                    <!-- ends -->

                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">Register</h5>
                            <div class="nk-block-des">
                                <p>Create New Dashlite Account</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <form action="<?= base_url('user/auth/register')?>" method="POST">
                        <div class="form-group">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" class="form-control form-control-lg" value="<?= set_value('name') ?>" name="name" id="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" class="form-control form-control-lg" id="email" value="<?= set_value('email') ?>" name="email" placeholder="Enter your email address or username">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password">Passcode</label>
                            <div class="form-control-wrap">
                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <!-- added for security -->
                                <input type="hidden" name="{csrf_token}" value="{csrf_hash}">
                                <!-- end -->
                                <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Enter your passcode">
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label class="form-label" for="password">Confirm Passcode</label>
                            <div class="form-control-wrap">
                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input type="password" class="form-control form-control-lg" name="confirm_pass" id="password" placeholder="Confirm your passcode">
                            </div>
                        </div> -->
                        <div class="form-group">
                            <div class="custom-control custom-control-xs custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkbox">
                                <label class="custom-control-label" for="checkbox">I agree to Dashlite <a tabindex="-1" href="#">Privacy Policy</a> &amp; <a tabindex="-1" href="#"> Terms.</a></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block">Register</button>
                        </div>
                    </form><!-- form -->
                    <div class="form-note-s2 pt-4"> Already have an account ? <a href="<?= base_url('user/auth')?>"><strong>Sign in instead</strong></a>
                    </div>
                    <div class="text-center pt-4 pb-3">
                        <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
                    </div>
                    <ul class="nav justify-center gx-8">
                        <li class="nav-item"><a class="nav-link" href="#">Facebook</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Google</a></li>
                    </ul>
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
                                                <img src="<?= base_url('assets/images/flags/english.png')?>" alt="" class="language-flag">
                                                <span class="language-name">English</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="<?= base_url('assets/images/flags/spanish.png')?>" alt="" class="language-flag">
                                                <span class="language-name">Español</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="<?= base_url('assets/images/flags/french.png')?>" alt="" class="language-flag">
                                                <span class="language-name">Français</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="<?= base_url('assets/images/flags/turkey.png')?>" alt="" class="language-flag">
                                                <span class="language-name">Türkçe</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul><!-- nav -->
                    </div>
                    <div class="mt-3">
                        <p>&copy; 2019 DashLite. All Rights Reserved.</p>
                    </div>
                </div><!-- nk-block -->
            </div><!-- nk-split-content -->
             <!-- .nk-split-content -->
             <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                    <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="<?= base_url('assets/images/slides/promo-a.png')?>" srcset="<?= base_url('assets/images/slides/promo-a2x.png 2x')?>" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>Dashlite</h4>
                                    <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                </div>
                            </div>
                        </div><!-- .slider-item -->
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="<?= base_url('assets/images/slides/promo-b.png')?>" srcset="<?= base_url('assets/images/slides/promo-b2x.png 2x')?>" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>Dashlite</h4>
                                    <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                </div>
                            </div>
                        </div><!-- .slider-item -->
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="<?= base_url('assets/images/slides/promo-c.png')?>" srcset="<?= base_url('assets/images/slides/promo-c2x.png 2x')?>" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>Dashlite</h4>
                                    <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                </div>
                            </div>
                        </div><!-- .slider-item -->
                    </div><!-- .slider-init -->
                    <div class="slider-dots"></div>
                    <div class="slider-arrows"></div>
                </div><!-- .slider-wrap -->
            </div><!-- .nk-split-content -->
        </div><!-- nk-split -->
    </div><!-- app body @e -->
    <!-- JavaScript -->
    <!-- JavaScript -->
    <script src="<?= base_url('assets/assets/js/bundle.js?ver=2.2.0')?>"></script>
    <script src="<?= base_url('assets/assets/js/scripts.js?ver=2.2.0')?>"></script>
</body>

</html>