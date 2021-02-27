<?php $this->load->view('user_view/partials/head') ?>
<?php $this->load->view('user_view/partials/navBar') ?>
<?php $this->load->view('user_view/partials/header') ?>

    <!-- content -->
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">
                    <!-- <div class="nk-block-head nk-block-head-lg wide-sm">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub"><a class="back-to" href="html/components.html"><em class="icon ni ni-arrow-left"></em><span>Components</span></a></div>
                            <h2 class="nk-block-title fw-normal">DataTable Example</h2>
                            <div class="nk-block-des">
                                <p class="lead">Using <a href="https://datatables.net/" target="_blank">DataTables</a>, add advanced interaction controls to your HTML tables. It is a highly flexible tool and all advanced features allow you to display table instantly and nice way.</p>
                                <p>Check out the <a href="https://datatables.net/" target="_blank">documentation</a> for a full overview.</p>
                            </div>
                        </div>
                    </div> -->
                    <!-- .nk-block-head -->
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content d-flex justify-between">
                                <div>
                                    <h4 class="nk-block-title">Users</h4>
                                    <div class="nk-block-des">
                                        <p>Preview Users</p>
                                    </div>
                                </div>
                                <div>
                                    <li class="nk-block-des">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registerUser">Register User</button>
                                    </li>
                                </div>
                            </div>
                        </div>
                        <div class="card card-preview">
                            <div class="card-inner">
                                <table class="datatable-init table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>User Name</th>
                                            <th>User Code</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 0; 
                                    foreach($allUsers as $row): $i++ ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $row->name ?></td>
                                            <td><?= $row->code ?></td>
                                            <td><?= $row->email ?></td>
                                            <td>
                                                <div class="tb-tnx-status">
                                                    <?php if($row->badge == 'Unverified'): ?>
                                                        <span class="badge badge-dot badge-warning"><?= $row->badge ?></span>
                                                    <?php else: ?>
                                                        <span class="badge badge-dot badge-success"><?= $row->badge ?></span>
                                                    <?php endif ?>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                        <ul class="link-list-plain">
                                                            <li><a href="#">View</a></li>
                                                            <li><a href="#">Payment</a></li>
                                                            <li><a href="#">Edit</a></li>
                                                            <li><a href="#">Remove</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- .card-preview -->
                    </div>
                     <!-- nk-block -->
                    
                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
    <!-- content  -->

    <!-- Modal Form -->
    <div class="modal fade" tabindex="-1" id="registerUser">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Register User</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="#" class="form-validate is-alter">
                        <div class="form-group">
                            <label class="form-label" for="full-name">Full Name</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="full-name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email-address">Email address</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="email-address" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="phone-no">Phone No</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="phone-no">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="pay-amount">Category</label>
                            <div class="form-control-wrap">
                                <div class="form-control-wrap">
                                    <select name="" id="" class="form-control">
                                            <option value="" selected disabled>-- Select Category --</option>
                                        <?php foreach($all_categories as $row): ?>
                                            <option value="<?= $row->id ?>"><?= $row->name?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Date of Birth</label>
                            <div class="form-control-wrap">
                                <input type="date" class="form-control" id="phone-no">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="phone-no">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
               
<?php $this->load->view('user_view/partials/footer') ?>
