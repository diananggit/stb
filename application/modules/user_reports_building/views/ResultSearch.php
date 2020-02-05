<div id="ui-view">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa icon-notebook"></i> Report SPL
                    </div>
                    <div class="card-body">
                    <?php echo form_open('index.php/user/reportSPL/searchSPL',array("class"=>"form-horizontal")); ?>
                        <?php if ($this->session->flashdata('msg') != "") { echo $this->session->flashdata('msg'); } ?>
                        <div class="form-group row">
                        <div class="col-md-6">
                            <label for="name">Start Date</label>
                            <input class="form-control" id="startDate" type="date" name="startDate" required>
                            <span class="help-block"><span class="text-danger">*</span>Please enter a valid date</span>
                        </div>
                        <div class="col-md-6">
                            <label for="name">End Date</label>
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
                            <i class="fa fa-align-justify"></i> List SPL
                        &nbsp;
                        <a href="<?php echo site_url('index.php/reportSPL/index'); ?>" 
                            class="btn-outline-light">
                            <i class ="fa fa-refresh"> Refresh</i>
                        </a>
                        </div>
                    </div>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>SPL ID</th>
                                <th>Period</th>
                                <th>Group Desc</th>
                                <th>Total</th>
                                <th>Duration</th>
                                <th>Style No</th>
                                <th>Created By</th>
                            </tr>

                             <?php 
                              // ini_set('memory_limit', '-1');
                              foreach($dataSPLs as $dataSPL){
                                if ($dataSPL['durasi'] === '01:00:00')
                                    $resultPeriod = '01 Hour';
                                if ($dataSPL['durasi'] === '02:00:00')
                                    $resultPeriod = '02 Hours';
                                if ($dataSPL['durasi'] === '03:00:00')
                                    $resultPeriod = '03 Hours';
                                if ($dataSPL['durasi'] === '04:00:00')
                                    $resultPeriod = '04 Hours';
                                if ($dataSPL['durasi'] === '05:00:00')
                                    $resultPeriod = '05 Hours';
                                if ($dataSPL['durasi'] === '06:00:00')
                                    $resultPeriod = '06 Hours';
                                if ($dataSPL['durasi'] === '07:00:00')
                                    $resultPeriod = '07 Hours';
                                    
                            ?>
                            <tr>  
                                <td><?php  echo $dataSPL['splid']; ?></td>
                                <td><?php  echo $dataSPL['periode']; ?></td>
                                <td><?php  echo $dataSPL['group_desc']; ?></td>
                                <td><?php  echo $dataSPL['jumlah']; ?> Employee</td>
                                <td><?php  echo $resultPeriod; ?></td>
                                <td><?php  echo $dataSPL['style_no']; ?></td>
                                <td><?php  echo $dataSPL['created_by']; ?></td>
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