<div id="ui-view">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> List Areas
                    </div>
                    <div class="card-body">
                        <?php if ($this->session->flashdata('msg') != "") { echo $this->session->flashdata('msg'); } ?>
                        <div class="pull-right">
                            <a href="<?php echo site_url('index.php/administrator/area/add'); ?>" class="btn btn-success">Add</a> 
                        </div>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Actions</th>
                                <th>Type</th>
                                <th>Name</th>
                                <th>Created By</th>
                                <th>Created Date</th>
                                <th>Modified Date</th>
                             
                            </tr>
                            <?php
                                foreach($user as $c){
                            ?>
                            <tr>
                                <td>
                                    <a href="<?php echo site_url('index.php/area/edit/'.$c->AREA_ID); ?>" class="btn btn-info btn-xs">Edit</a> 
                                    <a href="<?php echo site_url('index.php/administrator/area/remove/'.$c->AREA_ID); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to remove this Area?');">Delete</a>
                                </td>
                                <td><?php echo $c->TYPE; ?></td>
                                <td><?php echo $c->NAME; ?></td>
                                <td><?php echo $c->CREATED_BY; ?></td>
                                <td><?php echo $c->CREATED_DATE;  ?></td>
                                <td><?php echo $c->MODIFIED_DATE;  ?></td>      
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

