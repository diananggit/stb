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
                        <div class="pull-right">
                            <a href="<?php echo site_url('index.php/user/employee/CreateSPL'); ?>" class="btn btn-success">
                                <i class ="fa fa-check">
                                </i>
                                Add
                            </a> 
                        </div>
                        <table id="tableID" class="table table-striped table-bordered table-hover">
                            <tr>                           
                                <th>Employee Id</th>   
                                <th>NIK</th>
                                <th>Name</th>
                                <th>Group Desc</th>
                                <th>Action</th>
                            </tr>
                            <?php 
                              foreach($publikasi as $c){    
                            ?>
                            <tr>
                                <td><?php echo $c['EmployeeID']; ?></td>
                                <td><?php echo $c['NIK']; ?></td>
                                <td><?php echo $c['Name']; ?></td>
                                <td><?php echo $c['GroupDesc']; ?></td>  
                                
                                <td>
                                    <label class="form-check-label" for="inline-checkbox1"></label>
                                    <span id="getId"> 
                                        <input class="form-check-input" name="sport" type="checkbox" value=<?php echo $c['NIK']; ?>>
                              </span>       
                                </td>
                                              
                            </tr>
                            <?php } ?>
                            <button type="button">Get Values</button>
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

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script>
$(document).ready(function() {
        $("button").click(function(){
            var favorite = [];
            $.each($("input[name='sport']:checked"), function(){
                favorite.push($(this).val());
            });
            alert("My favourite sports are: " + favorite.join(", "));
        });
    });
</script>