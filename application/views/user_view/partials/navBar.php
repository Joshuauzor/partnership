
<body class="nk-body npc-crypto bg-white has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="#" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img" src="<?= base_url('assets/images/logo.png')?>" srcset="<?= base_url('assets/images/logo2x.png 2x')?>" alt="logo">
                            <img class="logo-dark logo-img" src="<?= base_url('assets/images/logo-dark.png')?>" srcset="<?= base_url('assets/images/logo-dark2x.png 2x')?>" alt="logo-dark">
                            <span class="nio-version">Partnership</span>
                        </a>
                    </div>
                    <div class="nk-menu-trigger mr-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                    </div>
                </div>
                <!-- super admin -->
                <?php if($this->session->user['role'] == 'super_admin'): ?>
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-body" data-simplebar>
                        <div class="nk-sidebar-content">
                            <div class="nk-sidebar-widget d-none d-xl-block">
                                <div class="user-account-info between-center">
                                    <div class="user-account-main">
                                        <h6 class="overline-title-alt">Available Balance</h6>
                                        <div class="user-balance">2.014095 <small class="currency currency-btc">BTC</small></div>
                                        <div class="user-balance-alt">18,934.84 <span class="currency currency-btc">BTC</span></div>
                                    </div>
                                    <a href="#" class="btn btn-white btn-icon btn-light"><em class="icon ni ni-line-chart"></em></a>
                                </div>
                                <ul class="user-account-data gy-1">
                                    <li>
                                        <div class="user-account-label">
                                            <span class="sub-text">Profits (7d)</span>
                                        </div>
                                        <div class="user-account-value">
                                            <span class="lead-text">+ 0.0526 <span class="currency currency-btc">BTC</span></span>
                                            <span class="text-success ml-2">3.1% <em class="icon ni ni-arrow-long-up"></em></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user-account-label">
                                            <span class="sub-text">Deposit in orders</span>
                                        </div>
                                        <div class="user-account-value">
                                            <span class="sub-text">0.005400 <span class="currency currency-btc">BTC</span></span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="user-account-actions">
                                    <ul class="g-3">
                                        <li><a href="#" class="btn btn-lg btn-primary"><span>Deposit</span></a></li>
                                        <li><a href="#" class="btn btn-lg btn-warning"><span>Withdraw</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- .nk-sidebar-widget -->
                            <div class="nk-sidebar-widget nk-sidebar-widget-full d-xl-none pt-0">
                                <a class="nk-profile-toggle toggle-expand" data-target="sidebarProfile" href="#">
                                    <div class="user-card-wrap">
                                        <div class="user-card">
                                            <div class="user-avatar">
                                                <span>AB</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text"><?= $current_user->name ?></span>
                                                <span class="sub-text"><?= $current_user->email ?></span>
                                            </div>
                                            <div class="user-action">
                                                <em class="icon ni ni-chevron-down"></em>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="nk-profile-content toggle-expand-content" data-content="sidebarProfile">
                                    <div class="user-account-info between-center">
                                        <div class="user-account-main">
                                            <h6 class="overline-title-alt">Available Balance</h6>
                                            <div class="user-balance">2.014095 <small class="currency currency-btc">BTC</small></div>
                                            <div class="user-balance-alt">18,934.84 <span class="currency currency-btc">BTC</span></div>
                                        </div>
                                        <a href="#" class="btn btn-icon btn-light"><em class="icon ni ni-line-chart"></em></a>
                                    </div>
                                    <ul class="user-account-data">
                                        <li>
                                            <div class="user-account-label">
                                                <span class="sub-text">Profits (7d)</span>
                                            </div>
                                            <div class="user-account-value">
                                                <span class="lead-text">+ 0.0526 <span class="currency currency-btc">BTC</span></span>
                                                <span class="text-success ml-2">3.1% <em class="icon ni ni-arrow-long-up"></em></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user-account-label">
                                                <span class="sub-text">Deposit in orders</span>
                                            </div>
                                            <div class="user-account-value">
                                                <span class="sub-text text-base">0.005400 <span class="currency currency-btc">BTC</span></span>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="user-account-links">
                                        <li><a href="#" class="link"><span>Withdraw Funds</span> <em class="icon ni ni-wallet-out"></em></a></li>
                                        <li><a href="#" class="link"><span>Deposit Funds</span> <em class="icon ni ni-wallet-in"></em></a></li>
                                    </ul>
                                    <ul class="link-list">
                                        <li><a href="html/crypto/profile.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                        <li><a href="html/crypto/profile-security.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                        <li><a href="html/crypto/profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                    </ul>
                                    <ul class="link-list">
                                        <li><a href="<?= base_url('user/auth/logout')?>"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- navbar -->
                            <div class="nk-sidebar-menu">
                                <ul class="nk-menu">
                                    <li class="nk-menu-heading">
                                        <h6 class="overline-title">Menu</h6>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="<?= base_url('home')?>" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                            <span class="nk-menu-text">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/crypto/accounts.html" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-user-c"></em></span>
                                            <span class="nk-menu-text">My Account</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/crypto/wallets.html" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-wallet-alt"></em></span>
                                            <span class="nk-menu-text">Wallets</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="<?= base_url('users')?>" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-user"></em></span>
                                            <span class="nk-menu-text">Users</span>
                                        </a>
                                        <!-- <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="<?= base_url('users')?>" class="nk-menu-link"><span class="nk-menu-text">View</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="<?= base_url('register/users')?>" class="nk-menu-link"><span class="nk-menu-text">Register</span></a>
                                            </li>
                                
                                        </ul> -->
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/crypto/buy-sell.html" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                                            <span class="nk-menu-text">Buy / Sell</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/crypto/order-history.html" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-repeat"></em></span>
                                            <span class="nk-menu-text">Orders</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/crypto/chats.html" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-chat-circle"></em></span>
                                            <span class="nk-menu-text">Chats</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/crypto/profile.html" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-account-setting"></em></span>
                                            <span class="nk-menu-text">My Profile</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                            <span class="nk-menu-icon"><em class="icon ni ni-files"></em></span>
                                            <span class="nk-menu-text">Additional Pages</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="html/crypto/welcome.html" class="nk-menu-link"><span class="nk-menu-text">Welcome</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="html/crypto/kyc-application.html" class="nk-menu-link"><span class="nk-menu-text">KYC - Get Started</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="html/crypto/kyc-form.html" class="nk-menu-link"><span class="nk-menu-text">KYC - Application Form</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nk-menu-heading">
                                        <h6 class="overline-title">Return to</h6>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/index.html" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                            <span class="nk-menu-text">Main Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components.html" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-layers"></em></span>
                                            <span class="nk-menu-text">All Components</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- .nk-sidebar-menu -->
                            <div class="nk-sidebar-widget">
                                <div class="widget-title">
                                    <h6 class="overline-title">Crypto Accounts <span>(4)</span></h6>
                                    <a href="#" class="link">View All</a>
                                </div>
                                <ul class="wallet-list">
                                    <li class="wallet-item">
                                        <a href="#">
                                            <div class="wallet-icon"><em class="icon ni ni-sign-kobo"></em></div>
                                            <div class="wallet-text">
                                                <h6 class="wallet-name">NioWallet</h6>
                                                <span class="wallet-balance">30.959040 <span class="currency currency-nio">NIO</span></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="wallet-item">
                                        <a href="#">
                                            <div class="wallet-icon"><em class="icon ni ni-sign-btc"></em></div>
                                            <div class="wallet-text">
                                                <h6 class="wallet-name">Bitcoin Wallet</h6>
                                                <span class="wallet-balance">0.0495950 <span class="currency currency-btc">BTC</span></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="wallet-item wallet-item-add">
                                        <a href="#">
                                            <div class="wallet-icon"><em class="icon ni ni-plus"></em></div>
                                            <div class="wallet-text">
                                                <h6 class="wallet-name">Add another wallet</h6>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- .nk-sidebar-widget -->
                            <div class="nk-sidebar-footer">
                                <ul class="nk-menu nk-menu-footer">
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-help-alt"></em></span>
                                            <span class="nk-menu-text">Support</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item ml-auto">
                                        <div class="dropup">
                                            <a href="#" class="nk-menu-link dropdown-indicator has-indicator" data-toggle="dropdown" data-offset="0,10">
                                                <span class="nk-menu-icon"><em class="icon ni ni-globe"></em></span>
                                                <span class="nk-menu-text">English</span>
                                            </a>
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
                                        </div>
                                    </li>
                                </ul><!-- .nk-footer-menu -->
                            </div><!-- .nk-sidebar-footer -->
                        </div><!-- .nk-sidebar-content -->
                    </div>
                    <!-- .nk-sidebar-body -->
                </div>
                <!-- admin -->
                <?php elseif($this->session->user['role'] == 'admin'): ?>
                    <div class="nk-sidebar-element">
                        <div class="nk-sidebar-body" data-simplebar>
                            <div class="nk-sidebar-content">
                                <div class="nk-sidebar-widget d-none d-xl-block">
                                    <div class="user-account-info between-center">
                                        <div class="user-account-main">
                                            <h6 class="overline-title-alt">Available Balance</h6>
                                            <div class="user-balance">2.014095 <small class="currency currency-btc">BTC</small></div>
                                            <div class="user-balance-alt">18,934.84 <span class="currency currency-btc">BTC</span></div>
                                        </div>
                                        <a href="#" class="btn btn-white btn-icon btn-light"><em class="icon ni ni-line-chart"></em></a>
                                    </div>
                                    <ul class="user-account-data gy-1">
                                        <li>
                                            <div class="user-account-label">
                                                <span class="sub-text">Profits (7d)</span>
                                            </div>
                                            <div class="user-account-value">
                                                <span class="lead-text">+ 0.0526 <span class="currency currency-btc">BTC</span></span>
                                                <span class="text-success ml-2">3.1% <em class="icon ni ni-arrow-long-up"></em></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user-account-label">
                                                <span class="sub-text">Deposit in orders</span>
                                            </div>
                                            <div class="user-account-value">
                                                <span class="sub-text">0.005400 <span class="currency currency-btc">BTC</span></span>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="user-account-actions">
                                        <ul class="g-3">
                                            <li><a href="#" class="btn btn-lg btn-primary"><span>Deposit</span></a></li>
                                            <li><a href="#" class="btn btn-lg btn-warning"><span>Withdraw</span></a></li>
                                        </ul>
                                    </div>
                                </div><!-- .nk-sidebar-widget -->
                                <div class="nk-sidebar-widget nk-sidebar-widget-full d-xl-none pt-0">
                                    <a class="nk-profile-toggle toggle-expand" data-target="sidebarProfile" href="#">
                                        <div class="user-card-wrap">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <span>AB</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text"><?= $current_user->name ?></span>
                                                    <span class="sub-text"><?= $current_user->email ?></span>
                                                </div>
                                                <div class="user-action">
                                                    <em class="icon ni ni-chevron-down"></em>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="nk-profile-content toggle-expand-content" data-content="sidebarProfile">
                                        <div class="user-account-info between-center">
                                            <div class="user-account-main">
                                                <h6 class="overline-title-alt">Available Balance</h6>
                                                <div class="user-balance">2.014095 <small class="currency currency-btc">BTC</small></div>
                                                <div class="user-balance-alt">18,934.84 <span class="currency currency-btc">BTC</span></div>
                                            </div>
                                            <a href="#" class="btn btn-icon btn-light"><em class="icon ni ni-line-chart"></em></a>
                                        </div>
                                        <ul class="user-account-data">
                                            <li>
                                                <div class="user-account-label">
                                                    <span class="sub-text">Profits (7d)</span>
                                                </div>
                                                <div class="user-account-value">
                                                    <span class="lead-text">+ 0.0526 <span class="currency currency-btc">BTC</span></span>
                                                    <span class="text-success ml-2">3.1% <em class="icon ni ni-arrow-long-up"></em></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="user-account-label">
                                                    <span class="sub-text">Deposit in orders</span>
                                                </div>
                                                <div class="user-account-value">
                                                    <span class="sub-text text-base">0.005400 <span class="currency currency-btc">BTC</span></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="user-account-links">
                                            <li><a href="#" class="link"><span>Withdraw Funds</span> <em class="icon ni ni-wallet-out"></em></a></li>
                                            <li><a href="#" class="link"><span>Deposit Funds</span> <em class="icon ni ni-wallet-in"></em></a></li>
                                        </ul>
                                        <ul class="link-list">
                                            <li><a href="html/crypto/profile.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                            <li><a href="html/crypto/profile-security.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                            <li><a href="html/crypto/profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                        </ul>
                                        <ul class="link-list">
                                            <li><a href="<?= base_url('user/auth/logout')?>"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                        </ul>
                                    </div>
                                </div><!-- .nk-sidebar-widget -->
                                <div class="nk-sidebar-menu">
                                    <!-- Menu -->
                                    <ul class="nk-menu">
                                        <li class="nk-menu-heading">
                                            <h6 class="overline-title">Menu</h6>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="<?= base_url('home')?>" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                                <span class="nk-menu-text">Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/crypto/accounts.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-user-c"></em></span>
                                                <span class="nk-menu-text">My Account</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/crypto/wallets.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-wallet-alt"></em></span>
                                                <span class="nk-menu-text">Wallets</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item has-sub">
                                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-icon"><em class="icon ni ni-user"></em></span>
                                                <span class="nk-menu-text">Users</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="<?= base_url('users')?>" class="nk-menu-link"><span class="nk-menu-text">View</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="<?= base_url('register/users')?>" class="nk-menu-link"><span class="nk-menu-text">Register</span></a>
                                                </li>
                                                <!-- <li class="nk-menu-item">
                                                    <a href="html/crypto/kyc-form.html" class="nk-menu-link"><span class="nk-menu-text">KYC - Application Form</span></a>
                                                </li> -->
                                            </ul>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/crypto/buy-sell.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                                                <span class="nk-menu-text">Buy / Sell</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/crypto/order-history.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-repeat"></em></span>
                                                <span class="nk-menu-text">Orders</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/crypto/chats.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-chat-circle"></em></span>
                                                <span class="nk-menu-text">Chats</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/crypto/profile.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-account-setting"></em></span>
                                                <span class="nk-menu-text">My Profile</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item has-sub">
                                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-icon"><em class="icon ni ni-files"></em></span>
                                                <span class="nk-menu-text">Additional Pages</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="html/crypto/welcome.html" class="nk-menu-link"><span class="nk-menu-text">Welcome</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/crypto/kyc-application.html" class="nk-menu-link"><span class="nk-menu-text">KYC - Get Started</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/crypto/kyc-form.html" class="nk-menu-link"><span class="nk-menu-text">KYC - Application Form</span></a>
                                                </li>
                                            </ul>
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-heading">
                                            <h6 class="overline-title">Return to</h6>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/index.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                                <span class="nk-menu-text">Main Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/components.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-layers"></em></span>
                                                <span class="nk-menu-text">All Components</span>
                                            </a>
                                        </li>
                                    </ul><!-- .nk-menu -->
                                </div><!-- .nk-sidebar-menu -->
                                <div class="nk-sidebar-widget">
                                    <div class="widget-title">
                                        <h6 class="overline-title">Crypto Accounts <span>(4)</span></h6>
                                        <a href="#" class="link">View All</a>
                                    </div>
                                    <ul class="wallet-list">
                                        <li class="wallet-item">
                                            <a href="#">
                                                <div class="wallet-icon"><em class="icon ni ni-sign-kobo"></em></div>
                                                <div class="wallet-text">
                                                    <h6 class="wallet-name">NioWallet</h6>
                                                    <span class="wallet-balance">30.959040 <span class="currency currency-nio">NIO</span></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="wallet-item">
                                            <a href="#">
                                                <div class="wallet-icon"><em class="icon ni ni-sign-btc"></em></div>
                                                <div class="wallet-text">
                                                    <h6 class="wallet-name">Bitcoin Wallet</h6>
                                                    <span class="wallet-balance">0.0495950 <span class="currency currency-btc">BTC</span></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="wallet-item wallet-item-add">
                                            <a href="#">
                                                <div class="wallet-icon"><em class="icon ni ni-plus"></em></div>
                                                <div class="wallet-text">
                                                    <h6 class="wallet-name">Add another wallet</h6>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- .nk-sidebar-widget -->
                                <div class="nk-sidebar-footer">
                                    <ul class="nk-menu nk-menu-footer">
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-help-alt"></em></span>
                                                <span class="nk-menu-text">Support</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item ml-auto">
                                            <div class="dropup">
                                                <a href="#" class="nk-menu-link dropdown-indicator has-indicator" data-toggle="dropdown" data-offset="0,10">
                                                    <span class="nk-menu-icon"><em class="icon ni ni-globe"></em></span>
                                                    <span class="nk-menu-text">English</span>
                                                </a>
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
                                            </div>
                                        </li>
                                    </ul><!-- .nk-footer-menu -->
                                </div><!-- .nk-sidebar-footer -->
                            </div><!-- .nk-sidebar-content -->
                        </div><!-- .nk-sidebar-body -->
                    </div>
                <!-- user -->
                <?php else: ?>
                    <div class="nk-sidebar-element">
                        <div class="nk-sidebar-body" data-simplebar>
                            <div class="nk-sidebar-content">
                                <div class="nk-sidebar-widget d-none d-xl-block">
                                    <div class="user-account-info between-center">
                                        <div class="user-account-main">
                                            <h6 class="overline-title-alt">Available Balance</h6>
                                            <div class="user-balance">2.014095 <small class="currency currency-btc">BTC</small></div>
                                            <div class="user-balance-alt">18,934.84 <span class="currency currency-btc">BTC</span></div>
                                        </div>
                                        <a href="#" class="btn btn-white btn-icon btn-light"><em class="icon ni ni-line-chart"></em></a>
                                    </div>
                                    <ul class="user-account-data gy-1">
                                        <li>
                                            <div class="user-account-label">
                                                <span class="sub-text">Profits (7d)</span>
                                            </div>
                                            <div class="user-account-value">
                                                <span class="lead-text">+ 0.0526 <span class="currency currency-btc">BTC</span></span>
                                                <span class="text-success ml-2">3.1% <em class="icon ni ni-arrow-long-up"></em></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user-account-label">
                                                <span class="sub-text">Deposit in orders</span>
                                            </div>
                                            <div class="user-account-value">
                                                <span class="sub-text">0.005400 <span class="currency currency-btc">BTC</span></span>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="user-account-actions">
                                        <ul class="g-3">
                                            <li><a href="#" class="btn btn-lg btn-primary"><span>Deposit</span></a></li>
                                            <li><a href="#" class="btn btn-lg btn-warning"><span>Withdraw</span></a></li>
                                        </ul>
                                    </div>
                                </div><!-- .nk-sidebar-widget -->
                                <div class="nk-sidebar-widget nk-sidebar-widget-full d-xl-none pt-0">
                                    <a class="nk-profile-toggle toggle-expand" data-target="sidebarProfile" href="#">
                                        <div class="user-card-wrap">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <span>AB</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text"><?= $current_user->name ?></span>
                                                    <span class="sub-text"><?= $current_user->email ?></span>
                                                </div>
                                                <div class="user-action">
                                                    <em class="icon ni ni-chevron-down"></em>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="nk-profile-content toggle-expand-content" data-content="sidebarProfile">
                                        <div class="user-account-info between-center">
                                            <div class="user-account-main">
                                                <h6 class="overline-title-alt">Available Balance</h6>
                                                <div class="user-balance">2.014095 <small class="currency currency-btc">BTC</small></div>
                                                <div class="user-balance-alt">18,934.84 <span class="currency currency-btc">BTC</span></div>
                                            </div>
                                            <a href="#" class="btn btn-icon btn-light"><em class="icon ni ni-line-chart"></em></a>
                                        </div>
                                        <ul class="user-account-data">
                                            <li>
                                                <div class="user-account-label">
                                                    <span class="sub-text">Profits (7d)</span>
                                                </div>
                                                <div class="user-account-value">
                                                    <span class="lead-text">+ 0.0526 <span class="currency currency-btc">BTC</span></span>
                                                    <span class="text-success ml-2">3.1% <em class="icon ni ni-arrow-long-up"></em></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="user-account-label">
                                                    <span class="sub-text">Deposit in orders</span>
                                                </div>
                                                <div class="user-account-value">
                                                    <span class="sub-text text-base">0.005400 <span class="currency currency-btc">BTC</span></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="user-account-links">
                                            <li><a href="#" class="link"><span>Withdraw Funds</span> <em class="icon ni ni-wallet-out"></em></a></li>
                                            <li><a href="#" class="link"><span>Deposit Funds</span> <em class="icon ni ni-wallet-in"></em></a></li>
                                        </ul>
                                        <ul class="link-list">
                                            <li><a href="html/crypto/profile.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                            <li><a href="html/crypto/profile-security.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                            <li><a href="html/crypto/profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                        </ul>
                                        <ul class="link-list">
                                            <li><a href="<?= base_url('user/auth/logout')?>"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                        </ul>
                                    </div>
                                </div><!-- .nk-sidebar-widget -->
                                <div class="nk-sidebar-menu">
                                    <!-- Menu -->
                                    <ul class="nk-menu">
                                        <li class="nk-menu-heading">
                                            <h6 class="overline-title">Menu</h6>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/crypto/index.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                                <span class="nk-menu-text">Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/crypto/accounts.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-user-c"></em></span>
                                                <span class="nk-menu-text">My Account</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/crypto/wallets.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-wallet-alt"></em></span>
                                                <span class="nk-menu-text">Wallets</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/crypto/buy-sell.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                                                <span class="nk-menu-text">Buy / Sell</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/crypto/order-history.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-repeat"></em></span>
                                                <span class="nk-menu-text">Orders</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/crypto/chats.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-chat-circle"></em></span>
                                                <span class="nk-menu-text">Chats</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/crypto/profile.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-account-setting"></em></span>
                                                <span class="nk-menu-text">My Profile</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item has-sub">
                                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-icon"><em class="icon ni ni-files"></em></span>
                                                <span class="nk-menu-text">Additional Pages</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="html/crypto/welcome.html" class="nk-menu-link"><span class="nk-menu-text">Welcome</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/crypto/kyc-application.html" class="nk-menu-link"><span class="nk-menu-text">KYC - Get Started</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/crypto/kyc-form.html" class="nk-menu-link"><span class="nk-menu-text">KYC - Application Form</span></a>
                                                </li>
                                            </ul><!-- .nk-menu-sub -->
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-heading">
                                            <h6 class="overline-title">Return to</h6>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/index.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                                <span class="nk-menu-text">Main Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/components.html" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-layers"></em></span>
                                                <span class="nk-menu-text">All Components</span>
                                            </a>
                                        </li>
                                    </ul><!-- .nk-menu -->
                                </div><!-- .nk-sidebar-menu -->
                                <div class="nk-sidebar-widget">
                                    <div class="widget-title">
                                        <h6 class="overline-title">Crypto Accounts <span>(4)</span></h6>
                                        <a href="#" class="link">View All</a>
                                    </div>
                                    <ul class="wallet-list">
                                        <li class="wallet-item">
                                            <a href="#">
                                                <div class="wallet-icon"><em class="icon ni ni-sign-kobo"></em></div>
                                                <div class="wallet-text">
                                                    <h6 class="wallet-name">NioWallet</h6>
                                                    <span class="wallet-balance">30.959040 <span class="currency currency-nio">NIO</span></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="wallet-item">
                                            <a href="#">
                                                <div class="wallet-icon"><em class="icon ni ni-sign-btc"></em></div>
                                                <div class="wallet-text">
                                                    <h6 class="wallet-name">Bitcoin Wallet</h6>
                                                    <span class="wallet-balance">0.0495950 <span class="currency currency-btc">BTC</span></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="wallet-item wallet-item-add">
                                            <a href="#">
                                                <div class="wallet-icon"><em class="icon ni ni-plus"></em></div>
                                                <div class="wallet-text">
                                                    <h6 class="wallet-name">Add another wallet</h6>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- .nk-sidebar-widget -->
                                <div class="nk-sidebar-footer">
                                    <ul class="nk-menu nk-menu-footer">
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-help-alt"></em></span>
                                                <span class="nk-menu-text">Support</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item ml-auto">
                                            <div class="dropup">
                                                <a href="#" class="nk-menu-link dropdown-indicator has-indicator" data-toggle="dropdown" data-offset="0,10">
                                                    <span class="nk-menu-icon"><em class="icon ni ni-globe"></em></span>
                                                    <span class="nk-menu-text">English</span>
                                                </a>
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
                                            </div>
                                        </li>
                                    </ul><!-- .nk-footer-menu -->
                                </div><!-- .nk-sidebar-footer -->
                            </div><!-- .nk-sidebar-content -->
                        </div><!-- .nk-sidebar-body -->
                    </div>
                <?php endif ?>
            </div>
            <!-- sidebar @e -->