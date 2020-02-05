<style>

    /* The container */
    .containerRadioButton {
        position: relative;
        padding-left: 26px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 13px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default radio button */
    .containerRadioButton input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    /* Create a custom radio button */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 18px;
        width: 18px;
        background-color: #eee;
        border-radius: 50%;
    }

    /* On mouse-over, add a grey background color */
    .containerRadioButton:hover input ~ .checkmark {
        background-color: #ccc;
    }

    /* When the radio button is checked, add a blue background */
    .containerRadioButton input:checked ~ .checkmark {
        background-color: #2196F3;
    }

    /* Create the indicator (the dot/circle - hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Style the indicator (dot/circle) */
    .containerRadioButton .checkmark:after {
 	    top: 9px;
	    left: 9px;
	    width: 8px;
	    height: 8px;
	    border-radius: 50%;
	    background: white;
    }
</style>
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Cleaning Building
                    </div>
                    <div class="card-body">
                        <?php echo form_open('index.php/user/building/add',array("class"=>"form-horizontal")); ?>
                        <?php if ($this->session->flashdata('msg') != "") { echo $this->session->flashdata('msg'); } ?>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="name"><span class="text-danger">*</span>Floor</label>
                                <img src="<?php echo TEMPLATE_ASSETS;?>img/buildings/floor.png" alt="Girl in a jacket" width="150" height="150" style="border:30px;">
                                <br/>
                                <!-- <input type="radio" name="floor" value="Bersih"> Clean &nbsp;
                                <input type="radio" name="floor" value="Kotor" checked> Dirty -->

                                <label class="containerRadioButton">Dirty
                                    <input type="radio" checked="checked" name="floor" value="Kotor">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="containerRadioButton">Clean
                                    <input type="radio" name="floor" value="Bersih">
                                    <span class="checkmark"></span>
                                </label> 


                            </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="col-md-2">
                                <label for="name"><span class="text-danger">*</span>Spider Web</label>
                                <img src="<?php echo TEMPLATE_ASSETS;?>img/buildings/spider-web.png" alt="Girl in a jacket" width="150" height="150" style="border:30px;">
                                <br/>
                                <!-- <input type="radio" name="spider" value="Bersih"> Clean &nbsp;
                                <input type="radio" name="spider" value="Kotor" checked> Dirty -->

                                <label class="containerRadioButton">Dirty
                                    <input type="radio" checked="checked" name="spider" value="Kotor">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="containerRadioButton">Clean
                                    <input type="radio" name="spider" value="Bersih">
                                    <span class="checkmark"></span>
                                </label> 

                            </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="col-md-2">
                                <label for="name"><span class="text-danger">*</span>Glass</label>
                                <img src="<?php echo TEMPLATE_ASSETS;?>img/buildings/glass.png" alt="Girl in a jacket" width="150" height="150" style="border:30px;">
                                <br/>
                                <!-- <input type="radio" name="glass" value="Bersih"> Clean &nbsp;
                                <input type="radio" name="glass" value="Kotor" checked> Dirty -->

                                <label class="containerRadioButton">Dirty
                                    <input type="radio" checked="checked" name="glass" value="Kotor">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="containerRadioButton">Clean
                                    <input type="radio" name="glass" value="Bersih">
                                    <span class="checkmark"></span>
                                </label> 

                            </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="col-md-2">
                                <label for="name"><span class="text-danger">*</span>UWF Iron</label>
                                <img src="<?php echo TEMPLATE_ASSETS;?>img/buildings/iron.png" alt="Girl in a jacket" width="150" height="150" style="border:30px;">
                                <br/>
                                <!-- <input type="radio" name="iron" value="Bersih"> Clean &nbsp;
                                <input type="radio" name="iron" value="Kotor" checked> Dirty -->

                                <label class="containerRadioButton">Dirty
                                    <input type="radio" checked="checked" name="iron" value="Kotor">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="containerRadioButton">Clean
                                    <input type="radio" name="iron" value="Bersih">
                                    <span class="checkmark"></span>
                                </label> 


                            </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="col-md-2">
                                <label for="name"><span class="text-danger">*</span>Trash</label>
                                <img src="<?php echo TEMPLATE_ASSETS;?>img/buildings/Trash.png" alt="Girl in a jacket" width="150" height="150" style="border:30px;">
                                <br/>
                                <!-- <input type="radio" name="trash" value="Bersih"> Clean &nbsp;
                                <input type="radio" name="trash" value="Kotor" checked> Dirty -->

                                <label class="containerRadioButton">Full
                                    <input type="radio" checked="checked" name="trash" value="Penuh">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="containerRadioButton">Empty
                                    <input type="radio" name="trash" value="Kosong">
                                    <span class="checkmark"></span>
                                </label> 

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="name"><span class="text-danger">*</span>Notes</label>
                                <textarea class="form-control" id="notes" 
                                          name="notes" rows="8"
                                          placeholder="Notes..."
                                          style="margin-top: 0px; margin-bottom: 0px; height: 148px;"
                                          required
                                ></textarea> 
                            <label for="areaName" ><span class="text-danger">*</span>Area Name</label>
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
                             <div class="col-md-6">
                             <label for="name"><span class="text-danger">*</span>Date</label>
                                <input class="form-control"type="date" id="dateCleaning" name="dateCleaning" required>
                                
                                <div class="pull-right">
                                    <span class="help-block"><span class="text-danger">*</span>Please enter a valid date.</span>
                                </div>
                                <br/>
                                <label for="name"><span class="text-danger">*</span>Time</label>
                                <input class="form-control" type="time" id="timeCleaning"  name="timeCleaning" value="now" required>
                                <div class="pull-right">
                                    <span class="help-block"><span class="text-danger">*</span>Please enter a valid time.</span>
                                </div><br/>
                                <label for="name"><span class="text-danger">*</span>Inspector</label>
                                    <input type="text" name="createdBy" id="createdBy" value="<?php echo $username = $_SESSION['nik'];?>" class="form-control" disabled/>   
                                    <input type="hidden" name="createdByHide" id="createdByHide" value="<?php echo $username = $_SESSION['nik'];?>" class="form-control" />   
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