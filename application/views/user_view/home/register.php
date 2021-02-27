<?php $this->load->view('user_view/partials/head') ?>
<?php $this->load->view('user_view/partials/navBar') ?>
<?php $this->load->view('user_view/partials/header') ?>

    <!-- content -->
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
        <?php if($this->session->user['role'] == 'super_admin'):?>
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">
                    <!-- <div class="nk-block-head nk-block-head-lg wide-sm">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub"><a class="back-to" href="html/components.html"><em class="icon ni ni-arrow-left"></em><span>Components</span></a></div>
                            <h2 class="nk-block-title fw-normal">jQuery Form Validation</h2>
                            <div class="nk-block-des">
                                <p class="lead">Using the <a href="https://jqueryvalidation.org/" target="_blank">jQuery Validation</a> plugin, you can simply add validation on clientside before submit form. The plugin also offering plenty of customization options. For a full overview of this plugin, check out the <a href="https://jqueryvalidation.org/" target="_blank">documentation</a>.</p>
                            </div>
                        </div>
                    </div> -->
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="title nk-block-title">Register</h4>
                                <div class="nk-block-des">
                                    <p>Register / Admin</p>                       
                                </div>
                            </div>
                        </div>
                        <!-- error Message -->
                            <?php if($this->session->flashdata('error')): ?>
                                    <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
                                <?php endif  ?>
                            <!-- success message -->
                            <?php if($this->session->flashdata('success')): ?>
                                    <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
                            <?php endif  ?>
                        <!-- error Message ends -->
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <form action="#" class="form-validate">
                                    <div class="row g-gs">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-full-name">Full Name</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="fv-full-name" name="fv-full-name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-email">Email address</label>
                                                <div class="form-control-wrap">
                                                    <input type="email" class="form-control" id="fv-email" name="fv-email" required>
                                                </div>
                                            </div>
                                        </div>
                   
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-subject">Category</label>
                                                <div class="form-control-wrap">
                                                    <!-- <input type="text" class="form-control" id="fv-subject" name="fv-subject" required> -->
                                                    <select name="" id="" class="form-control">
                                                        <option value="">-- Select Category --</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-topics">Date Of Birth</label>
                                                <div class="form-control-wrap ">
                                                    <input type="date" class="form-control" id="fv-email" name="fv-email" required>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-message">Passcode</label>
                                                <div class="form-control-wrap">
                                                    <input type="password" class="form-control" placeholder="*******" id="fv-email" name="fv-email" required>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">Communication</label>
                                                <ul class="custom-control-group g-3 align-center">
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" name="fv-com" id="fv-com-email" required>
                                                            <label class="custom-control-label" for="fv-com-email">Email</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" name="fv-com" id="fv-com-sms" required>
                                                            <label class="custom-control-label" for="fv-com-sms">SMS</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" name="fv-com" id="fv-com-phone" required>
                                                            <label class="custom-control-label" for="fv-com-phone">Phone</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Register</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Register Admin for Super Admin -->
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="title nk-block-title">Register</h4>
                                <div class="nk-block-des">
                                    <p>Register / User</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner">
                            <form action="#" class="form-validate">
                                    <div class="row g-gs">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-full-name">Full Name</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="fv-full-name" name="fv-full-name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-email">Email address</label>
                                                <div class="form-control-wrap">
                                                    <input type="email" class="form-control" id="fv-email" name="fv-email" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-subject">Category</label>
                                                <div class="form-control-wrap">
                                                    <!-- <input type="text" class="form-control" id="fv-subject" name="fv-subject" required> -->
                                                    <select name="" id="" class="form-control">
                                                            <option value="" selected disabled>-- Select Category --</option>
                                                        <?php foreach($all_categories as $row): ?>
                                                            <option value="<?= $row->id ?>"><?= $row->name?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-topics">Date Of Birth</label>
                                                <div class="form-control-wrap ">
                                                    <input type="date" class="form-control" id="fv-email" name="fv-email" required>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-message">Passcode</label>
                                                <div class="form-control-wrap">
                                                    <input type="password" class="form-control" placeholder="*******" id="fv-email" name="fv-email" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Register</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end super_admin register -->
                </div><!-- .components-preview -->
            </div>
        <?php else: ?>
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">
                    <!-- Register Admin for Super Admin -->
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="title nk-block-title">Register</h4>
                                <div class="nk-block-des">
                                    <p>Register / User</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner">
                            <form action="#" class="form-validate">
                                    <div class="row g-gs">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-full-name">Full Name</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="fv-full-name" name="fv-full-name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-email">Email address</label>
                                                <div class="form-control-wrap">
                                                    <input type="email" class="form-control" id="fv-email" name="fv-email" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-subject">Category</label>
                                                <div class="form-control-wrap">
                                                    <!-- <input type="text" class="form-control" id="fv-subject" name="fv-subject" required> -->
                                                    <select name="" id="" class="form-control">
                                                            <option value="" selected disabled>-- Select Category --</option>
                                                        <?php foreach($all_categories as $row): ?>
                                                            <option value="<?= $row->id ?>"><?= $row->name?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-topics">Date Of Birth</label>
                                                <div class="form-control-wrap ">
                                                    <input type="date" class="form-control" id="fv-email" name="fv-email" required>
                                                </div>
                                                <div class="help-block form-error">
                                                    <?php echo form_error('username'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-message">Passcode</label>
                                                <div class="form-control-wrap">
                                                    <input type="password" class="form-control" placeholder="*******" id="fv-email" name="fv-email" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Register</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end super_admin register -->
                </div><!-- .components-preview -->
            </div>
        <?php endif ?>
        </div>
    </div>
    <!-- content  -->
               
<?php $this->load->view('user_view/partials/footer') ?>
