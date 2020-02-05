<div id="ui-view">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa icon-notebook"></i> Report Cleaning Building
                    </div>
                    <div class="card-body">
                    <?php echo form_open('index.php/user/reportCleaningBuilding/searchDataReporting',array("class"=>"form-horizontal")); ?>
                        <?php if ($this->session->flashdata('msg') != "") { echo $this->session->flashdata('msg'); } ?>
                        <div class="form-group row">
                        <div class="col-md-12">
                            <label for="name"><span class="text-danger">*</span>Area Name</label>
                            <select class="form-control" name="areaName" id="areaName">
                                <?php
                                    $query = $this->db->query(" SELECT * FROM dt_areas WHERE TYPE ='Building' ORDER BY NAME ASC ");
                                    foreach ($query->result() as $row){
                                ?>
                                    <option
                                        value="<?php echo $row->AREA_ID ?>"><?php echo $row->NAME ?>
                                    </option>
                                <?php
                                    }
                                ?>
                            </select>   
                        </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-md-6">
                            <label for="name"><span class="text-danger">*</span>Start Date</label>
                            <input class="form-control" id="startDate" type="date" name="startDate" required>
                            <span class="help-block"><span class="text-danger">*</span>Please enter a valid date</span>
                        </div>
                        <div class="col-md-6">
                            <label for="name"><span class="text-danger">*</span>End Date</label>
                            <input class="form-control" id="endDate" type="date" name="endDate" required>
                            <span class="help-block"><span class="text-danger">*</span>Please enter a valid date</span>
                            <br/>

                            <div class="pull-right">
                                <button 
                                    type="submit"
                                    class="btn btn-primary" 
                                    id="buttonSearchSPL"
                                >
                                    <i class ="fa fa-search">
                                   </i>&nbsp;Search
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
                        </div>
                        </div>
                    <div class="pull-left">
                        <div>
                            <i class="fa fa-align-justify"></i> List Clean Building
                        &nbsp;
                        <a href="<?php echo site_url('index.php/user/reportCleaningBuilding/index'); ?>" 
                            class="btn-outline-light">
                            <i class ="fa fa-refresh"> Refresh</i>
                        </a>
                        </div>
                    </div>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Area Name</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Floor</th>
                                <th>Spider Web</th>
                                <th>Glass</th>
                                <th>UWF Iron</th>
                                <th>Trash</th>
                                <th>Notes</th>
                                <th>Created By</th>
                                <th>Created Date</th>
                            </tr>

                             <?php 

                              foreach( $dataReportings as $dataReporting ){
                                    
                            ?>
                            <tr>  
                                <td><?php  echo $dataReporting['NAME']; ?></td>
                                <td><?php  echo $dataReporting['TANGGAL']; ?></td>
                                <td><?php  echo $dataReporting['TIME']; ?></td>
                                <td><?php  echo $dataReporting['LANTAI']; ?></td>
                                <td><?php  echo $dataReporting['SARANG_LABA_LABA']; ?></td>
                                <td><?php  echo $dataReporting['KACA']; ?></td>
                                <td><?php  echo $dataReporting['BESI_UWF']; ?></td>
                                <td><?php  echo $dataReporting['TEMPAT_SAMPAH']; ?></td>
                                <td><?php  echo $dataReporting['CATATAN']; ?></td>
                                <td><?php  echo $dataReporting['CREATED_BY']; ?></td>
                                <td><?php  echo $dataReporting['CREATED_DATE']; ?></td>
                            </tr>
                            <?php
                              } 
                            ?>
                        </table>
                        <div class="pull-right">
                            <?php 
                            echo $this->pagination->create_links(); 
                            ?>    
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    // set date periode default toDay
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
 
    setInputDate("#startDate");
    setInputDate("#endDate");

    // reset button
    function resetForm() {
        setInputDate("#startDate");
        setInputDate("#endDate");
    }


</script>