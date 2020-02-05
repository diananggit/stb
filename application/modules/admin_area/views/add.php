<div id="ui-view">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Add Area
                    </div>
                    <div class="card-body">
                        <?php echo form_open('index.php/administrator/area/add',array("class"=>"form-horizontal")); ?>

                           <!-- start input type hidden -->
                           <input type="hidden" name="createdBy" value="<?php echo $username = $_SESSION['nik'];?>" class="form-control" id="createdBy" />
                           <!-- end input type hidden -->

                            <div class="form-group">
                            <label for="groupDesc" class="col-md-4 control-label"><span class="text-danger">*</span>Type Area</label>
                                <div class="col-md-8">
                                <select class="form-control" name="typeArea" id="typeArea">
                                <option value="Building">Building</option> 
                                <option value="Bathroom">Bathroom</option> 
                               
                            </select>
                                   
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nameArea" class="col-md-4 control-label"><span class="text-danger">*</span>Name Area</label>
                                <div class="col-md-8">
                                    <input type="text" name="nameArea" value="<?php echo $this->input->post('nameArea'); ?>" class="form-control" id="nameArea" required />
                                    <span class="text-danger"><?php echo form_error('nameArea');?></span>
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