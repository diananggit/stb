<div id="ui-view">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Edit User
                    </div>
                    <div class="card-body">
                        <?php echo form_open('user/edit/'.$user['U_ID'],array("class"=>"form-horizontal")); ?>
                        
                            <div class="form-group">
                                <label for="username" class="col-md-4 control-label"><span class="text-danger">*</span>Username</label>
                                <div class="col-md-8">
                                    <input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $user['USERNAME']); ?>" class="form-control" id="username" />
                                    <span class="text-danger"><?php echo form_error('username');?></span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="password_old" class="col-md-4 control-label">Old Password</label>
                                <div class="col-md-8">
                                    <input type="password" name="password_old" value="<?php echo $this->input->post('password_old'); ?>" class="form-control" id="password_old" />
                                    <span class="text-danger"><?php echo form_error('password_old');?></span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Password</label>
                                <div class="col-md-8">
                                    <input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
                                    <span class="text-danger"><?php echo form_error('password');?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Password Confirmation</label>
                                <div class="col-md-8">
                                    <input type="password" name="password_conf" value="<?php echo $this->input->post('password_conf'); ?>" class="form-control" id="password_conf" />
                                    <span class="text-danger"><?php echo form_error('password_conf');?></span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-8">
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                            
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>