<div id="ui-view">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Edit Menu
                    </div>
                    <div class="card-body">
                        <?php echo form_open('menu/edit/'.$menu['id'],array("class"=>"form-horizontal")); ?>
                        
                            <div class="form-group">
                                <label for="menu_name" class="col-md-4 control-label"><span class="text-danger">*</span>Menu Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="menu_name" value="<?php echo ($this->input->post('menu_name') ? $this->input->post('menu_name') : $menu['menu_name']); ?>" class="form-control" id="menu_name" />
                                    <span class="text-danger"><?php echo form_error('menu_name');?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="url" class="col-md-4 control-label"><span class="text-danger">*</span>Menu Type</label>
                                <div class="col-md-8">
                                    <?php 
                                    $options = array("" => "--Select--",
                                                     "url" => "Url",
                                                     "cms" => "CMS"
                                               );
                                    echo form_dropdown('menu_type',$options,($this->input->post('menu_type') ? $this->input->post('menu_type') : $menu['menu_type']),'id="menu_type" class="form-control" style="width: 100%" onchange="change_type(this.value)"');?>
                                    <span class="text-danger"><?php echo form_error('menu_type');?></span>
                                </div>
                            </div>
                            <div class="form-group" id="block_url">
                                <label for="url" class="col-md-4 control-label"><span class="text-danger">*</span>URL</label>
                                <div class="col-md-8">
                                    <input type="text" name="url" value="<?php echo ($this->input->post('url') ? $this->input->post('url') : $menu['url']); ?>" class="form-control" id="url" />
                                    <span class="text-danger"><?php echo form_error('url');?></span>
                                </div>
                            </div>
                            <div class="form-group" id="block_cms">
                                <label for="url" class="col-md-4 control-label"><span class="text-danger">*</span>CMS</label>
                                <div class="col-md-8">
                                    <?php 
                                    $options = get_select_data2('cms','id','title','title','--Select--');
                                    echo form_dropdown('cms_id',$options,($this->input->post('cms_id') ? $this->input->post('cms_id') : $menu['cms_id']),'id="cms_id" class="form-control" style="width: 100%"');?>
                                    <span class="text-danger"><?php echo form_error('cms_id');?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="icon" class="col-md-4 control-label">Icon</label>
                                <div class="col-md-8">
                                    <input type="text" name="icon" value="<?php echo ($this->input->post('icon') ? $this->input->post('icon') : $menu['icon']); ?>" class="form-control" id="icon" />
                                    <span class="text-danger"><?php echo form_error('icon');?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ordering" class="col-md-4 control-label"><span class="text-danger">*</span>Ordering</label>
                                <div class="col-md-2">
                                    <input type="number" name="ordering" value="<?php echo ($this->input->post('ordering') ? $this->input->post('ordering') : $menu['ordering']); ?>" class="form-control" id="ordering" />
                                    <span class="text-danger"><?php echo form_error('ordering');?></span>
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