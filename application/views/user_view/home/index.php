<?php $this->load->view('user_view/partials/head') ?>
<?php $this->load->view('user_view/partials/navBar') ?>
<?php $this->load->view('user_view/partials/header') ?>

    <!-- content -->
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-sub"><span>Welcome!</span>
                    </div>
                    <div class="nk-block-between-md g-4">
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title fw-normal"><?= $this->session->user['name']?> </h2>
                            <div class="nk-block-des">
                                <p>At a glance summary of your account. Have fun!</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <ul class="nk-block-tools gx-3">
                                <li><a href="#" class="btn btn-primary"><span>Deposit</span> <em class="icon ni ni-arrow-long-right"></em></a></li>
                                <li><a href="#" class="btn btn-white btn-light"><span>Buy / Sell</span> <em class="icon ni ni-arrow-long-right d-none d-sm-inline-block"></em></a></li>
                                <li class="opt-menu-md dropdown">
                                    <a href="#" class="btn btn-white btn-light btn-icon" data-toggle="dropdown"><em class="icon ni ni-setting"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="#"><em class="icon ni ni-coin-alt"></em><span>Curreny Settings</span></a></li>
                                            <li><a href="#"><em class="icon ni ni-notify"></em><span>Push Notification</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row gy-gs">
                        <div class="col-lg-5 col-xl-4">
                            <div class="nk-block">
                                <div class="nk-block-head-xs">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title title">Overview</h5>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered text-light is-dark h-100">
                                        <div class="card-inner">
                                            <div class="nk-wg7">
                                                <div class="nk-wg7-stats">
                                                    <div class="nk-wg7-title">Available balance in USD</div>
                                                    <div class="number-lg amount">179,850.950</div>
                                                </div>
                                                <div class="nk-wg7-stats-group">
                                                    <div class="nk-wg7-stats w-50">
                                                        <div class="nk-wg7-title">Wallets</div>
                                                        <div class="number-lg">5</div>
                                                    </div>
                                                    <div class="nk-wg7-stats w-50">
                                                        <div class="nk-wg7-title">Transactions</div>
                                                        <div class="number">34,405</div>
                                                    </div>
                                                </div>
                                                <div class="nk-wg7-foot">
                                                    <span class="nk-wg7-note">Last activity at <span>19 Nov, 2019</span></span>
                                                </div>
                                            </div><!-- .nk-wg7 -->
                                        </div><!-- .card-inner -->
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div><!-- .nk-block -->
                        </div><!-- .col -->
                        <div class="col-lg-7 col-xl-8">
                            <div class="nk-block">
                                <div class="nk-block-head-xs">
                                    <div class="nk-block-between-md g-2">
                                        <div class="nk-block-head-content">
                                            <h5 class="nk-block-title title">Digital Wallets</h5>
                                        </div>
                                        <div class="nk-block-head-content">
                                            <a href="html/crypto/wallets.html" class="link link-primary">See All</a>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="row g-2">
                                    <div class="col-sm-4">
                                        <div class="card bg-light">
                                            <div class="nk-wgw sm">
                                                <a class="nk-wgw-inner" href="html/crypto/wallet-bitcoin.html">
                                                    <div class="nk-wgw-name">
                                                        <div class="nk-wgw-icon">
                                                            <em class="icon ni ni-sign-btc"></em>
                                                        </div>
                                                        <h5 class="nk-wgw-title title">NioWallet</h5>
                                                    </div>
                                                    <div class="nk-wgw-balance">
                                                        <div class="amount">4.434953<span class="currency currency-nio">NIO</span></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-sm-4">
                                        <div class="card bg-light">
                                            <div class="nk-wgw sm">
                                                <a class="nk-wgw-inner" href="html/crypto/wallet-bitcoin.html">
                                                    <div class="nk-wgw-name">
                                                        <div class="nk-wgw-icon">
                                                            <em class="icon ni ni-sign-btc"></em>
                                                        </div>
                                                        <h5 class="nk-wgw-title title">Bitcoin Wallet</h5>
                                                    </div>
                                                    <div class="nk-wgw-balance">
                                                        <div class="amount">4.434953<span class="currency currency-btc">BTC</span></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-sm-4">
                                        <div class="card bg-light">
                                            <div class="nk-wgw sm">
                                                <a class="nk-wgw-inner" href="html/crypto/wallet-bitcoin.html">
                                                    <div class="nk-wgw-name">
                                                        <div class="nk-wgw-icon">
                                                            <em class="icon ni ni-sign-eth"></em>
                                                        </div>
                                                        <h5 class="nk-wgw-title title">Ethereum Wallet</h5>
                                                    </div>
                                                    <div class="nk-wgw-balance">
                                                        <div class="amount">0.000560<span class="currency currency-eth">ETH</span></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .nk-block -->
                            <div class="nk-block nk-block-md">
                                <div class="nk-block-head-xs">
                                    <div class="nk-block-between-md g-2">
                                        <div class="nk-block-head-content">
                                            <h6 class="nk-block-title title">Fiat Accounts</h6>
                                        </div>
                                        <div class="nk-block-head-content">
                                            <a href="html/crypto/wallets.html" class="link link-primary">See All</a>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="row g-2">
                                    <div class="col-sm-4">
                                        <div class="card bg-light">
                                            <div class="nk-wgw sm">
                                                <a class="nk-wgw-inner" href="html/crypto/wallet-bitcoin.html">
                                                    <div class="nk-wgw-name">
                                                        <div class="nk-wgw-icon">
                                                            <em class="icon ni ni-sign-btc"></em>
                                                        </div>
                                                        <h5 class="nk-wgw-title title">NioWallet</h5>
                                                    </div>
                                                    <div class="nk-wgw-balance">
                                                        <div class="amount">4.434953<span class="currency currency-nio">NIO</span></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-sm-4">
                                        <div class="card bg-light">
                                            <div class="nk-wgw sm">
                                                <a class="nk-wgw-inner" href="html/crypto/wallet-bitcoin.html">
                                                    <div class="nk-wgw-name">
                                                        <div class="nk-wgw-icon">
                                                            <em class="icon ni ni-sign-btc"></em>
                                                        </div>
                                                        <h5 class="nk-wgw-title title">Bitcoin Wallet</h5>
                                                    </div>
                                                    <div class="nk-wgw-balance">
                                                        <div class="amount">4.434953<span class="currency currency-btc">BTC</span></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-sm-4">
                                        <div class="card bg-light">
                                            <div class="nk-wgw sm">
                                                <a class="nk-wgw-inner" href="html/crypto/wallet-bitcoin.html">
                                                    <div class="nk-wgw-name">
                                                        <div class="nk-wgw-icon">
                                                            <em class="icon ni ni-sign-eth"></em>
                                                        </div>
                                                        <h5 class="nk-wgw-title title">Ethereum Wallet</h5>
                                                    </div>
                                                    <div class="nk-wgw-balance">
                                                        <div class="amount">0.000560<span class="currency currency-eth">ETH</span></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div> <!-- .nk-block -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .nk-block -->
                <div class="nk-block nk-block-lg">
                    <div class="row gy-gs">
                        <div class="col-md-6">
                            <div class="card-head">
                                <div class="card-title  mb-0">
                                    <h5 class="title">Recent Activities</h5>
                                </div>
                                <div class="card-tools">
                                    <ul class="card-tools-nav">
                                        <li><a href="#">Buy</a></li>
                                        <li><a href="#">Sell</a></li>
                                        <li class="active"><a href="#">All</a></li>
                                    </ul>
                                </div>
                            </div><!-- .card-head -->
                            <div class="tranx-list card card-bordered">
                                <div class="tranx-item">
                                    <div class="tranx-col">
                                        <div class="tranx-info">
                                            <div class="tranx-data">
                                                <div class="tranx-label">Buy Bitcoin <em class="tranx-icon sm icon ni ni-sign-btc"></em></div>
                                                <div class="tranx-date">Nov 12, 2019 11:34 PM</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tranx-col">
                                        <div class="tranx-amount">
                                            <div class="number">0.5384 <span class="currency currency-btc">BTC</span></div>
                                            <div class="number-sm">3,980.93 <span class="currency currency-usd">USD</span></div>
                                        </div>
                                    </div>
                                </div><!-- .tranx-item -->
                                <div class="tranx-item">
                                    <div class="tranx-col">
                                        <div class="tranx-info">
                                            <div class="tranx-data">
                                                <div class="tranx-label">Buy Ehtereum <span class="tranx-icon sm"><img src="./images/coins/eth.svg" alt=""></span></div>
                                                <div class="tranx-date">Nov 12, 2019 11:34 PM</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tranx-col">
                                        <div class="tranx-amount">
                                            <div class="number">1.538405 <span class="currency currency-btc">ETH</span></div>
                                            <div class="number-sm">1,176.34 <span class="currency currency-usd">USD</span></div>
                                        </div>
                                    </div>
                                </div><!-- .tranx-item -->
                                <div class="tranx-item">
                                    <div class="tranx-col">
                                        <div class="tranx-info">
                                            <div class="tranx-data">
                                                <div class="tranx-label">Buy Bitcoin <em class="tranx-icon sm icon ni ni-sign-btc"></em></div>
                                                <div class="tranx-date">Nov 12, 2019 11:34 PM</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tranx-col">
                                        <div class="tranx-amount">
                                            <div class="number">0.5384 <span class="currency currency-btc">BTC</span></div>
                                            <div class="number-sm">3,980.93 <span class="currency currency-usd">USD</span></div>
                                        </div>
                                    </div>
                                </div><!-- .tranx-item -->
                                <div class="tranx-item">
                                    <div class="tranx-col">
                                        <div class="tranx-info">
                                            <div class="tranx-data">
                                                <div class="tranx-label">Buy Ehtereum <span class="tranx-icon sm"><img src="<?= base_url('assets/images/coins/eth.svg')?>" alt=""></span></div>
                                                <div class="tranx-date">Nov 12, 2019 11:34 PM</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tranx-col">
                                        <div class="tranx-amount">
                                            <div class="number">1.538405 <span class="currency currency-btc">ETH</span></div>
                                            <div class="number-sm">1,176.34 <span class="currency currency-usd">USD</span></div>
                                        </div>
                                    </div>
                                </div><!-- .tranx-item -->
                            </div><!-- .tranx-list -->
                        </div><!-- .col -->
                        <div class="col-md-6">
                            <div class="card-head">
                                <div class="card-title mb-0">
                                    <h5 class="title">Balance Flow</h5>
                                </div>
                                <div class="card-tools">
                                    <ul class="card-tools-nav">
                                        <li><a href="#">This Month</a></li>
                                        <li class="active"><a href="#">This Years</a></li>
                                    </ul>
                                </div>
                            </div><!-- .card-title -->
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <div class="nk-wg4">
                                        <div class="nk-wg4-group justify-center gy-3 gx-4">
                                            <div class="nk-wg4-item">
                                                <div class="sub-text">
                                                    <div class="dot dot-lg sq" data-bg="#5ce0aa"></div> <span>Received</span>
                                                </div>
                                            </div>
                                            <div class="nk-wg4-item">
                                                <div class="sub-text">
                                                    <div class="dot dot-lg sq" data-bg="#798bff"></div> <span>Send</span>
                                                </div>
                                            </div>
                                            <div class="nk-wg4-item">
                                                <div class="sub-text">
                                                    <div class="dot dot-lg sq" data-bg="#f6ca3e"></div><span>Withdraw</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-ck3">
                                        <canvas class="chart-account-summary" id="summaryBalance"></canvas>
                                    </div>
                                </div><!-- .card-inner -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .nk-block -->
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="nk-refwg">
                            <div class="nk-refwg-invite card-inner">
                                <div class="nk-refwg-head g-3">
                                    <div class="nk-refwg-title">
                                        <h5 class="title">Refer Us & Earn</h5>
                                        <div class="title-sub">Use the bellow link to invite your friends.</div>
                                    </div>
                                    <div class="nk-refwg-action">
                                        <a href="#" class="btn btn-primary">Invite</a>
                                    </div>
                                </div>
                                <div class="nk-refwg-url">
                                    <div class="form-control-wrap">
                                        <div class="form-clip clipboard-init" data-clipboard-target="#refUrl" data-success="Copied" data-text="Copy Link"><em class="clipboard-icon icon ni ni-copy"></em> <span class="clipboard-text">Copy Link</span></div>
                                        <div class="form-icon">
                                            <em class="icon ni ni-link-alt"></em>
                                        </div>
                                        <input type="text" class="form-control copy-text" id="refUrl" value="https://dashlite.net/?ref=4945KD48">
                                    </div>
                                </div>
                            </div><!-- .nk-refwg-invite -->
                            <div class="nk-refwg-stats card-inner bg-lighter">
                                <div class="nk-refwg-group g-3">
                                    <div class="nk-refwg-name">
                                        <h6 class="title">My Referral <em class="icon ni ni-info" data-toggle="tooltip" data-placement="right" title="Referral Informations"></em></h6>
                                    </div>
                                    <div class="nk-refwg-info g-3">
                                        <div class="nk-refwg-sub">
                                            <div class="title">394</div>
                                            <div class="sub-text">Total Joined</div>
                                        </div>
                                        <div class="nk-refwg-sub">
                                            <div class="title">548.49</div>
                                            <div class="sub-text">Referral Earn</div>
                                        </div>
                                    </div>
                                    <div class="nk-refwg-more dropdown mt-n1 mr-n1">
                                        <a href="#" class="btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                            <ul class="link-list-plain sm">
                                                <li><a href="#">7 days</a></li>
                                                <li><a href="#">15 Days</a></li>
                                                <li><a href="#">30 Days</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-refwg-ck">
                                    <canvas class="chart-refer-stats" id="refBarChart"></canvas>
                                </div>
                            </div><!-- .nk-refwg-stats -->
                        </div><!-- .nk-refwg -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner card-inner-lg">
                            <div class="align-center flex-wrap flex-md-nowrap g-4">
                                <div class="nk-block-image w-120px flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 118">
                                        <path d="M8.916,94.745C-.318,79.153-2.164,58.569,2.382,40.578,7.155,21.69,19.045,9.451,35.162,4.32,46.609.676,58.716.331,70.456,1.845,84.683,3.68,99.57,8.694,108.892,21.408c10.03,13.679,12.071,34.71,10.747,52.054-1.173,15.359-7.441,27.489-19.231,34.494-10.689,6.351-22.92,8.733-34.715,10.331-16.181,2.192-34.195-.336-47.6-12.281A47.243,47.243,0,0,1,8.916,94.745Z" transform="translate(0 -1)" fill="#f6faff" />
                                        <rect x="18" y="32" width="84" height="50" rx="4" ry="4" fill="#fff" />
                                        <rect x="26" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                        <rect x="50" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                        <rect x="74" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                        <rect x="38" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                        <rect x="62" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                        <path d="M98,32H22a5.006,5.006,0,0,0-5,5V79a5.006,5.006,0,0,0,5,5H52v8H45a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2H73a2,2,0,0,0,2-2V94a2,2,0,0,0-2-2H66V84H98a5.006,5.006,0,0,0,5-5V37A5.006,5.006,0,0,0,98,32ZM73,94v4H45V94Zm-9-2H54V84H64Zm37-13a3,3,0,0,1-3,3H22a3,3,0,0,1-3-3V37a3,3,0,0,1,3-3H98a3,3,0,0,1,3,3Z" transform="translate(0 -1)" fill="#798bff" />
                                        <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="#6576ff" />
                                        <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="none" stroke="#6576ff" stroke-miterlimit="10" stroke-width="2" />
                                        <line x1="40" y1="22" x2="57" y2="22" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <line x1="40" y1="27" x2="57" y2="27" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <line x1="40" y1="32" x2="50" y2="32" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <line x1="30.5" y1="87.5" x2="30.5" y2="91.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                        <line x1="28.5" y1="89.5" x2="32.5" y2="89.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                        <line x1="79.5" y1="22.5" x2="79.5" y2="26.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                        <line x1="77.5" y1="24.5" x2="81.5" y2="24.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                        <circle cx="90.5" cy="97.5" r="3" fill="none" stroke="#9cabff" stroke-miterlimit="10" />
                                        <circle cx="24" cy="23" r="2.5" fill="none" stroke="#9cabff" stroke-miterlimit="10" /></svg>
                                </div>
                                <div class="nk-block-content">
                                    <div class="nk-block-content-head px-lg-4">
                                        <h5>We’re here to help you!</h5>
                                        <p class="text-soft">Ask a question or file a support ticket, manage request, report an issues. Our team support team will get back to you by email.</p>
                                    </div>
                                </div>
                                <div class="nk-block-content flex-shrink-0">
                                    <a href="#" class="btn btn-lg btn-outline-primary">Get Support Now</a>
                                </div>
                            </div>
                        </div><!-- .card-inner -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
    <!-- content  -->
               
<?php $this->load->view('user_view/partials/footer') ?>
