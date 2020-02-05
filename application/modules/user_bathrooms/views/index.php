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
                        <i class="fa fa-align-justify"></i> Cleaning Bathroom
                    </div>
                    <div class="card-body">
                        <?php echo form_open('index.php/user/bathroom/add',array("class"=>"form-horizontal")); ?>
                        <?php if ($this->session->flashdata('msg') != "") { echo $this->session->flashdata('msg'); } ?>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="name"><span class="text-danger">*</span>Floor</label>
                                <img src="<?php echo TEMPLATE_ASSETS;?>img/bathrooms/floor.png" alt="Girl in a jacket" width="150" height="150" style="border:30px;">
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

                            </div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            <div class="col-md-2">
                                <label for="name"><span class="text-danger">*</span>Soap</label>
                                <img src="<?php echo TEMPLATE_ASSETS;?>img/bathrooms/soap.png" alt="Girl in a jacket" width="150" height="150" style="border:30px;">
                                <br/>
                                <!-- <input type="radio" name="soap" value="Bersih"> Clean &nbsp;
                                <input type="radio" name="soap" value="Kotor" checked> Dirty -->

                                <label class="containerRadioButton">Empty
                                    <input type="radio" checked="checked" name="soap" value="Habis">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="containerRadioButton">Available
                                    <input type="radio" name="soap" value="Tersedia">
                                    <span class="checkmark"></span>
                                </label>     

                            </div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            <div class="col-md-2">
                              
                                <label for="name"><span class="text-danger">*</span>Closet</label>
                                <img src="<?php echo TEMPLATE_ASSETS;?>img/bathrooms/closet.png" alt="Girl in a jacket" width="150" height="150" style="border:30px;">
                                <br/>
                                <!-- <input type="radio" name="closet" value="Bersih"> Clean &nbsp;
                                <input type="radio" name="closet" value="Kotor" checked> Dirty -->

                                <label class="containerRadioButton">Dirty
                                    <input type="radio" checked="checked" name="closet" value="Kotor">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="containerRadioButton">Clean
                                    <input type="radio" name="closet" value="Bersih">
                                    <span class="checkmark"></span>
                                </label> 

                            </div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            <div class="col-md-2">
                                <label for="name"><span class="text-danger">*</span>Wall</label>
                                <img src="<?php echo TEMPLATE_ASSETS;?>img/bathrooms/wall.png" alt="Girl in a jacket" width="150" height="150" style="border:30px;">
                                <br/>
                                <!-- <input type="radio" name="wall" value="Bersih"> Clean &nbsp;
                                <input type="radio" name="wall" value="Kotor" checked> Dirty -->

                                <label class="containerRadioButton">Dirty
                                    <input type="radio" checked="checked" name="wall" value="Kotor">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="containerRadioButton">Clean
                                    <input type="radio" name="wall" value="Bersih">
                                    <span class="checkmark"></span>
                                </label> 

                            </div> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                            
                            <div class="col-md-2">
                                <label for="name"><span class="text-danger">*</span>Trash</label>
                                <img src="<?php echo TEMPLATE_ASSETS;?>img/bathrooms/Trash.png" alt="Girl in a jacket" width="150" height="150" style="border:30px;">
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

                            </div> &nbsp; &nbsp;
                            
                            <div class="col-md-2">
                                <label for="name"><span class="text-danger">*</span>Scent</label>
                                <img src="<?php echo TEMPLATE_ASSETS;?>img/bathrooms/scent.png" alt="Girl in a jacket" width="150" height="150" style="border:30px;">
                                <br/>
                                <!-- <input type="radio" name="scent" value="Bersih"> Clean &nbsp;
                                <input type="radio" name="scent" value="Kotor" checked> Dirty -->

                                <label class="containerRadioButton">Smell
                                    <input type="radio" checked="checked" name="scent" value="Bau">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="containerRadioButton">Fragrancy
                                    <input type="radio" name="scent" value="Harum">
                                    <span class="checkmark"></span>
                                </label> 

                            </div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            <div class="col-md-2">
                                <label for="name"><span class="text-danger">*</span>Towel</label>
                                <img src="<?php echo TEMPLATE_ASSETS;?>img/bathrooms/towel.png" alt="Girl in a jacket" width="150" height="150" style="border:30px;">
                                <br/>
                                <!-- <input type="radio" name="towel" value="Bersih"> Clean &nbsp;
                                <input type="radio" name="towel" value="Kotor" checked> Dirty -->

                                <label class="containerRadioButton">Dirty
                                    <input type="radio" checked="checked" name="towel" value="Kotor">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="containerRadioButton">Clean
                                    <input type="radio" name="towel" value="Bersih">
                                    <span class="checkmark"></span>
                                </label> 

                            </div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            <div class="col-md-2">
                                <label for="name"><span class="text-danger">*</span>Toilet Door</label>
                                <img src="<?php echo TEMPLATE_ASSETS;?>img/bathrooms/toiletDoor.png" alt="Girl in a jacket" width="150" height="150" style="border:30px;">
                                <br/>
                                <!-- <input type="radio" name="door" value="Bersih"> Clean &nbsp;
                                <input type="radio" name="door" value="Kotor" checked> Dirty -->

                                <label class="containerRadioButton">Dirty
                                    <input type="radio" checked="checked" name="door" value="Kotor">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="containerRadioButton">Clean
                                    <input type="radio" name="door" value="Bersih">
                                    <span class="checkmark"></span>
                                </label> 

                            </div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            <div class="col-md-2">
                                <label for="name"><span class="text-danger">*</span>Faucet</label>
                                <img src="<?php echo TEMPLATE_ASSETS;?>img/bathrooms/faucet.png" alt="Girl in a jacket" width="150" height="150" style="border:30px;">
                                <br/>
                                <!-- <input type="radio" name="faucet" value="Bersih"> Clean &nbsp;
                                <input type="radio" name="faucet" value="Kotor" checked> Dirty -->

                                <label class="containerRadioButton">Dirty
                                    <input type="radio" checked="checked" name="faucet" value="Kotor">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="containerRadioButton">Clean
                                    <input type="radio" name="faucet" value="Bersih">
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
                                        $query = $this->db->query(" SELECT * FROM dt_areas WHERE TYPE ='Bathroom' ORDER BY NAME ASC ");
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
                                <input class="form-control" id="dateCleaning" type="date" name="dateCleaning" required>
                                
                                <div class="pull-right">
                                    <span class="help-block"><span class="text-danger">*</span>Please enter a valid date</span>
                                </div>
                                <br/>
                                <label for="name"><span class="text-danger">*</span>Time</label>
                                <input class="form-control" type="time" id="timeCleaning"  name="timeCleaning" value="now" required>
                                <div class="pull-right">
                                    <span class="help-block"><span class="text-danger">*</span>Please enter a valid time</span>
                                </div><br/>
                                <label for="name"><span class="text-danger">*</span>Inspector</label>
                                    <input type="text" name="createdBy" value="<?php echo $username = $_SESSION['nik'];?>" class="form-control" id="createdBy" disabled/>  
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