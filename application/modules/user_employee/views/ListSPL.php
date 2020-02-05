<div id="ui-view">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> List SPL <b> Group Desc "<?php echo $groupIds[0]['GroupDesc']; ?>"</b>
                    </div>
                    <div class="card-body">
                        <?php if ($this->session->flashdata('msg') != "") { echo $this->session->flashdata('msg'); } ?>
                        <!-- <div class="pull-right">
                            <a href="<?php echo site_url('index.php/administrator/user/add'); ?>" class="btn btn-success">Add</a> 
                        </div> -->
                      
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Actions</th>
                                <th>SPL ID</th>
                                <th>Reff No</th>
                                <th>Overtime Category</th>
                                <th>Date</th>
                                <th>SPL Desc</th>
                                <th>Overtime</th>
                                <th>Break</th>
                                <th>Style No</th>
                                <th>Created By</th>
                            </tr>

                             <?php foreach($splid as $c){
                                   if ($c['VOT'] === 'L')
                                   $resultVOT = 'Overtime after normal working hours';
                                   if($c['VOT'] === 'F')
                                     $resultVOT = 'Overtime prior to normal working hours';
                                   if($c['VOT'] === 'H')
                                     $resultVOT = 'Overtime during holiday';
                                 ?>
                            <tr>  
                                <td>
                                     <a href="<?php echo site_url('index.php/user/employee/edit/'.$c['SPLID']); ?>" class="btn btn-info">
                                        <i class ="fa fa-pencil">
                                            Edit
                                        </i>
                                     </a>
                                    <!-- <a href="<?php echo base_url();?>index.php/user/employee/edit".$c->U_ID class="btn btn-info btn-xs">Edit</a> -->
                                    <!-- <a href="#" class="btn btn-warning btn-xs">Update</a>  -->
                                    <!-- <a href="#" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin menghapus item ini?');">Delete</a> -->
                                </td>
                                <td><?php echo $c['SPLID']; ?></td>
                                <td><?php echo $c['RefNo']; ?></td>
                                <td><?php echo $resultVOT ?></td>
                                <td><?php echo $c['Periode']; ?></td>
                                <td><?php echo $c['SPLDesc']; ?></td>
                                <td><?php echo $c['TOTOT']; ?></td>
                                <td><?php echo $c['BREAK']; ?></td>
                                <td><?php echo $c['StyleNo']; ?></td>
                                <td><?php echo $c['created_by']; ?></td>
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