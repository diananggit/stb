                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Data Building
                    </div>
                    <div class="card-body">
                        <?php echo form_open('index.php/user/building/add',array("class"=>"form-horizontal")); ?>
                      
                        <?php if ($this->session->flashdata('msg') != "") { echo $this->session->flashdata('msg'); } ?>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="areaName" ><span class="text-danger">*</span>Machine Name</label>
                                <select class="form-control" name="areaName" id="areaName">
                                    <?php
                                       $query = $this->db->query(" SELECT * FROM  dt_machine_prod ORDER BY ID ASC ");
                                         foreach ($query->result() as $row){
                                    ?>
                                    <option
                                        value="<?php  echo $row->Keterangan ?>" > <?php  echo $row->Keterangan ?>
                                    </option>
                                    <?php
                                        }
                                    ?>
                                </select>
                                
                                <label for="style" ><span class="text-danger">*</span>Style</label>
                                <select class="form-control" name="style" id="style">
                                    <?php
                                       $query = $this->db->query(" SELECT * FROM  dt_machine_prod ORDER BY ID ASC ");
                                         foreach ($query->result() as $row){
                                    ?>
                                    <option
                                        value="<?php  echo $row->Keterangan ?>" > <?php  echo $row->Keterangan ?>
                                    </option>
                                    <?php
                                        }
                                    ?>
                                </select>
                                
                                <label for="name"><span class="text-danger">*</span>Good Quality (Pairs)</label>
                                <input type="text" name="createdBy" id="createdBy" value=""  class="form-control" />   
                              
                                <label for="name"><span class="text-danger">*</span>Rejected-Measuremant (Pairs)</label>
                                <input type="text" name="createdBy" id="createdBy" value="" class="form-control" />   
                                

                            </div>
                             <div class="col-md-6">
                             <label for="areaName" ><span class="text-danger">*</span>ORC Number</label>
                                <select class="form-control" name="areaName" id="areaName">
                                    <?php
                                       $query = $this->db->query(" SELECT * FROM  dt_machine_prod ORDER BY ID ASC ");
                                         foreach ($query->result() as $row){
                                    ?>
                                    <option
                                        value="<?php  echo $row->Keterangan ?>" > <?php  echo $row->Keterangan ?>
                                    </option>
                                    <?php
                                        }
                                    ?>
                                </select>
                                
                                <label for="name"><span class="text-danger">*</span>Size (mm)</label>
                                <input type="text" name="createdBy" id="createdBy" value="" class="form-control" />   
                               
                                <label for="name"><span class="text-danger">*</span>Rejected-Missing Parts (Pairs)</label>
                                <input type="text" name="createdBy" id="createdBy" value="" class="form-control" />   
    
                                <label for="name"><span class="text-danger">*</span>Rejected-Stiching (Pairs)</label>
                                <input type="text" name="createdBy" id="createdBy" value="" class="form-control" />   
 
                            </div>
                        </div>

                            <div class="pull-right">
                                 <button 
                                    type="submit"
                                    class="btn  btn-primary" 
                                    id="buttonSubmitSPL"
                                    data-toggle="modal" >
                                    <i class ="fa fa-save">
                                    </i>&nbsp;Save
                                </button>
                            </div>

                            <div class="pull-right">
                                <button type="button" value="Reset"
                                    id="btnResetForm" 
                                    onclick="resetForm()"
                                    class="btn btn-warning active">
                                    <i class ="fa fa-eraser"> 
                                    </i>
                                    Reset
                                </button>&nbsp;&nbsp;
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>

<script type="text/javascript">

  // set date cleaning default toDay
  function setInputDate(_id){
        let _dat = document.querySelector(_id);
        let hoy = new Date(),
              d = hoy.getDate(),
              m = hoy.getMonth()+1, 
              y = hoy.getFullYear(),
        data;

        if(d < 10){
            d = "0"+d;
        };
        if(m < 10){
            m = "0"+m;
        };

        data = y+"-"+m+"-"+d;
        _dat.value = data;
    };
  setInputDate("#dateCleaning");

  // set time cleaning default toNow
    $(function(){     
        let d = new Date(),        
            h = d.getHours(),
            m = d.getMinutes();
        if(h < 10) h = '0' + h; 
        if(m < 10) m = '0' + m; 
        $('input[type="time"][value="now"]').each(function(){ 
            $(this).attr({'value': h + ':' + m});
        });
    });

  // reset button
  function resetForm() {
        $("#notes").val('');
        setInputDate("#dateCleaning");
    }

</script>