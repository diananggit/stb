<div id="ui-view">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Add User
                    </div>
                    <div class="card-body">
                        <?php echo form_open('index.php/administrator/user/add',array("class"=>"form-horizontal")); ?>

                            <div class="form-group">
                                <label for="username" class="col-md-4 control-label"><span class="text-danger">*</span>Username</label>
                                <div class="col-md-8">
                                    <input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username" />
                                    <span class="text-danger"><?php echo form_error('username');?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label"><span class="text-danger">*</span>Password</label>
                                <div class="col-md-8">
                                    <input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
                                    <span class="text-danger"><?php echo form_error('password');?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label"><span class="text-danger">*</span>Password Confirmation</label>
                                <div class="col-md-8">
                                    <input type="password" name="password_conf" value="<?php echo $this->input->post('password_conf'); ?>" class="form-control" id="password_conf" />
                                    <span class="text-danger"><?php echo form_error('password_conf');?></span>
                                </div>
                            </div> 

                           <!-- start input type hidden -->
                           <input type="hidden" name="createdBy" value="<?php echo $username = $_SESSION['nik'];?>" class="form-control" id="createdBy" />
                           <!-- end input type hidden -->

                            <div class="form-group">
                            <label for="groupDesc" class="col-md-4 control-label"><span class="text-danger">*</span>Group Name</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="groupId" id="groupId">
                                    <?php
                                        $query = $this->db->query("SELECT * FROM g_groups ORDER BY group_id DESC");
                                        foreach ($query->result() as $row){
                                    ?>
                                    <option
                                        value="<?php echo $row->GROUP_ID ?>"><?php echo $row->GROUP_NAME ?>
                                    </option>
                                    <?php
                                     }
                                    ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-8">
                                    <button type="submit" class="btn btn-sm btn-primary">
                                        <i class ="fa fa-dot-circle-o">
                                        </i>
                                        Save
                                    </button>
                                </div>
                            </div>

                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>