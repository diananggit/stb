<div id="ui-view">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Employee
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?php echo base_url();?>administrator/komentar/set_search" class="form-horizontal">
                            <div class="form-group row">
                              <div class="col-md-4">
                                <div class="input-group">
                                  <input id="keyword" name="keyword" class="form-control" placeholder="Search Employee" type="text" value="<?php echo $this->session->userdata('kom_sess_keyword'); ?>">
                                  <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
                                  </span>
                                </div>
                              </div>
                            </div>
                        </form>
                        <?php if ($this->session->flashdata('msg') != "") { echo $this->session->flashdata('msg'); } ?>
                       
                        <!-- <form method="post" action="<?php echo base_url();?>index.php/administrator/employee/save" class="form-horizontal">
                            <span class="input-group-btn">
                              <button type="submit" class="btn btn-success" type="button">Add</button>
                            </span>
                        </form>  -->
                        <div class="pull-right">
                            <a href="<?php echo site_url('index.php/administrator/employee/save'); ?>" class="btn btn-success">Add</a> 
                        </div>
                        <table class="table table-striped table-bordered">
                            <tr>                           
                                <th>NIK</th>
                                <th>Name</th>
                                <th>Group Desc</th>
                                
                            </tr>
                            <?php 
                              foreach($publikasi as $c){    
                            ?>
                            <tr>
                                <td><?php echo $c['NIK']; ?></td>
                                <td><?php echo $c['Name']; ?></td>
                                <td><?php echo $c['GroupDesc']; ?></td>  
                                                  
                            </tr>
                            <?php } ?>
                        </table>
                      
                        <div class="pull-right">
                            <?php echo $this->pagination->create_links(); ?>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>