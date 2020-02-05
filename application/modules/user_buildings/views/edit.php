<div id="ui-view">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                     <a href="<?php echo site_url('index.php/user/employee/ListSPL'); ?>" 
                        class="btn-outline-light">
                            <i class ="fa fa-arrow-left ">Back</i>
                     </a>&nbsp;
                     <i class="fa fa-align-justify"></i> Edit SPL
                </div>
                <div class="card-body">
                <?php echo form_open('index.php/user/employee/edit/'.$spl['SPLID'],array("class"=>"form-horizontal")); ?>          
                <?php
                  //  print_r($spl);
                ?>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="name">SPL ID</label>
                            <input class="form-control" value=<?php echo $spl['SPLID'] ?> 
                               id="name" type="text" disabled >
                            <input class="form-control" value=<?php echo $spl['SPLID'] ?> 
                               id="splId" type="hidden" name="splId">
                        </div>
                        <div class="col-md-6">
                            <label for="name">Reff No</label>
                            <input class="form-control" name="reffNo" id="reffNo"
                                value="<?php echo ($this->input->post('reffNo') ? $this->input->post('reffNo') : $spl['RefNo']); ?>"
                                type="text" placeholder="16112019-S2 3JAM" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="name">Date</label>
                            <input class="form-control" id="datePeriode"
                             value="<?php echo $spl['Periode']?>"
                             type="date" name="datePeriode" required>
                            <span class="help-block"><span class="text-danger">*</span>Please enter a valid date</span>
                        </div>
                        <div class="col-md-6">
                            <label for="name">SPL Desc</label>
                            <input class="form-control" id="splDesc" 
                                   value="<?php echo ($this->input->post('splDesc') ? $this->input->post('splDesc') : $spl['SPLDesc']); ?>"
                                   type="text" name="splDesc" placeholder="LEMBUR AWAL SHIFT 2 ~ 3JAM" required>
                        </div>
                    </div>
                    <?php 
                     $times = $spl['VOT'] ;
                     $breaks = $spl['BREAK'];
                     $overtimes = $spl['TOTOT'];
                    ?>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="name">Overtime Category</label>
                            <select class="form-control" 
                                name="time" id="time">
                                <?php 
                                    $time=$times;
                                    if ($time == "F") echo "<option value='F' selected>Overtime prior to normal working hours</option>";
                                    else echo "<option value='F'>Overtime prior to normal working hours</option>";
                                    if ($time == "L") echo "<option value='L' selected>Overtime after normal working hours</option>";
                                    else echo "<option value='L'>Overtime after normal working hours</option>";
                                    if ($time == "H") echo "<option value='H' selected>Overtime during holiday</option>";
                                    else echo "<option value='H'>Overtime during holiday</option>";  
                                ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="name">Break</label>
                            <select class="form-control" name="time" id="break">
                                <?php 
                                    $break=$breaks;
                                    if ($break == "00:00:00") echo "<option value='00' selected>00 Minutes</option>";
                                    else echo "<option value='00'>00 Minutes</option>";
                                    if ($break == "00:30:00") echo "<option value='30' selected>30 Minutes</option>";
                                    else echo "<option value='30'>30 Minutes</option>";
                                    if ($break == "01:00:00") echo "<option value='60' selected>01 Hours</option>";
                                    else echo "<option value='60'>01 Hours</option>";  
                                ?> 
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="name">Overtime</label>
                            <select class="form-control" name="time" id="endTime">
                               
                                <?php 
                                    $overtime=$overtimes;
                                    if ($overtime == "01:00:00") echo "<option value='60' selected>01 Hour</option>";
                                    else echo "<option value='60'>01 Hour</option>";
                                    if ($overtime == "02:00:00") echo "<option value='120' selected>02 Hours</option>";
                                    else echo "<option value='120'>02 Hours</option>";
                                    if ($overtime == "03:00:00") echo "<option value='180' selected>03 Hours</option>";
                                    else echo "<option value='180'>03 Hours</option>";
                                    if ($overtime == "04:00:00") echo "<option value='240' selected>04 Hours</option>";
                                    else echo "<option value='240'>04 Hours</option>";  
                                    if ($overtime == "05:00:00") echo "<option value='300' selected>05 Hours</option>";
                                    else echo "<option value='300'>05 Hours</option>";
                                    if ($overtime == "06:00:00") echo "<option value='300' selected>06 Hours</option>";
                                    else echo "<option value='360'>06 Hours</option>";    
                                    if ($overtime == "07:00:00") echo "<option value='300' selected>07 Hours</option>";
                                    else echo "<option value='420'>07 Hours</option>";        
                                ?>  
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="name">Style No</label>
                            <input class="form-control" id="styleNo" name="styleNo"
                             value="<?php echo ($this->input->post('styleNo') ? $this->input->post('styleNo') : $spl['StyleNo']); ?>"
                             type="text" placeholder="US 4S83" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <!-- <div class="col-md-6">
                            <label for="name">Style No</label>
                            <input class="form-control" id="styleNo" name="styleNo" type="text" placeholder="US 4S83" required>
                        </div> -->
                    </div>
                <input class="form-control" value="<?php echo $getGroupId = $_SESSION['nik'];?>" id="username" type="hidden" name="username">
                </form>
                    <div class="pull-left">
                        <button type="button" 
                                value="Reset"
                                onclick="resetForm()"
                                class="btn btn-warning active">
                            <i class ="fa fa-eraser"> 
                            </i>
                            Reset
                        </button>&nbsp;&nbsp;
                    </div>
                    <div class="pull-left">
                        <button 
                                type="submit"
                                class="btn btn-primary" 
                                id="buttonSubmitSPL"
                                data-toggle="modal" >
                                <i class ="fa fa-save">
                                </i>&nbsp;Update
                            </button>
                    </div>
                </div>
            </div>
            <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> List Employee
                    </div>
                    <div class="card-body">
                        <!-- <form method="post" action="<?php echo base_url();?>administrator/komentar/set_search" class="form-horizontal">
                            <div class="form-group row">
                              <div class="col-md-4">
                                <div class="input-group">
                                  <input id="keyword" name="keyword" class="form-control" placeholder="Search Employee" type="text" value="<?php echo $this->session->userdata('kom_sess_keyword'); ?>">
                                  <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary" disabled><i class="fa fa-search"></i> Search</button>
                                  </span>
                                </div>
                              </div>
                            </div>
                        </form> -->
                        <?php if ($this->session->flashdata('msg') != "") { echo $this->session->flashdata('msg'); } ?>
                        <table class="table table-striped table-bordered">
                            <tr>             
                                <th>SPL ID</th>              
                                <th>NIK</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            <?php 
                               foreach ($splEmployee as $splEmployees) {
                            ?>
                            <tr>
                                <td><?php echo $splEmployees['SPLID'];?></td>
                                <td><?php echo $splEmployees['NIK']; ?></td>
                                <td><?php echo $splEmployees['Name'];?></td>
                                <td style="display:none; "><?php  echo $splEmployees['EmployeeID']; ?></td>
                                <td>
                                 <a href="<?php echo site_url('index.php/user/employee/remove/'.$splEmployees['SPLID'].'/'.$splEmployees['EmployeeID']); ?>" 
                                  onclick="return confirm('Are you sure to remove this Employee ?');">
                                    <button 
                                        type="submit"
                                        class="btn btn-sm btn-primary" 
                                        id="btnSubmitApprove"
                                    >
                                    <i class ="fa fa-dot-circle-o">
                                    </i> Remove
                                    </button>
                                 </a>                 
                                </td>                        
                            </tr>
                            <?php
                             }
                         ?>
                        </table>
                            <div class="pull-right">
                                <?php
                                 //  echo $this->pagination->create_links();
                                ?>    
                            </div>
                        </div>                 
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">

    //convertToHours
    function convertHours(minutes) {
        var h, m, s, result='';
        // HOURs
        h = Math.floor(minutes/3600);
        minutes -= h*3600;
        if(h){
            result = h<10 ? '0'+h+':' : h+':';
         }
         // MINUTEs
        m = Math.floor(minutes/60);
        minutes -= m*60;
        result += m<10 ? '0'+m+':' : m+':';
        // SECONDs
        s=minutes%60;
        result += s<10 ? '0'+s : s;
    return result;
    }

    // function add two times
    /**
    * Add two string time values (HH:mm:ss) with javascript
    */

    function addTimes (startTime, endTime) {
        var times = [ 0, 0, 0 ]
        var max = times.length

        var a = (startTime || '').split(':')
        var b = (endTime || '').split(':')

        // normalize time values
        for (var i = 0; i < max; i++) {
            a[i] = isNaN(parseInt(a[i])) ? 0 : parseInt(a[i])
            b[i] = isNaN(parseInt(b[i])) ? 0 : parseInt(b[i])
        }

        // store time values
        for (var i = 0; i < max; i++) {
            times[i] = a[i] + b[i]
        }

        var hours = times[0]
        var minutes = times[1]
        var seconds = times[2]

        if (seconds >= 60) {
            var m = (seconds / 60) << 0
            minutes += m
            seconds -= 60 * m
         }

        if (minutes >= 60) {
            var h = (minutes / 60) << 0
            hours += h
            minutes -= 60 * h
        }

    return ('0' + hours).slice(-2) + ':' + ('0' + minutes).slice(-2) + ':' + ('0' + seconds).slice(-2)
    }


    // handling input submit
    $(document).ready(function(){
      //  $('#buttonSubmitSPL').attr('disabled',true);
    
    
        // $('#reffNo').keyup(function(){
        //     if($(this).val().length !=0){
        //         $('#buttonSubmitSPL').attr('disabled', false);
        //     }
        //     else
        //     {
        //         $('#buttonSubmitSPL').attr('disabled', true);        
        //     }
        // })

    

        // $('#splDesc').keyup(function(){
        //     if($(this).val().length !=0){
        //         $('#buttonSubmitSPL').attr('disabled', false);
        //     }
        //     else
        //     {
        //         $('#buttonSubmitSPL').attr('disabled', true);        
        //     }
        // })

        // $('#styleNo').keyup(function(){
        //     console.log('length',$(this).val().length);
        //     if($(this).val().length !=0 ){
        //         $('#buttonSubmitSPL').attr('disabled', false);
        //     }
        //     else
        //     {
        //         $('#buttonSubmitSPL').attr('disabled', true);        
        //     }
        // })
    });

    // get data table to modal
    $('table tbody tr  td').on('click',function(){
        $("#viewModalSPL").modal("show");
        $("#getNik").val($(this).closest('tr').children()[0].textContent);
        $("#getName").val($(this).closest('tr').children()[1].textContent);
        $("#getGroupDesc").val($(this).closest('tr').children()[2].textContent);
        $("#employeeID").val($(this).closest('tr').children()[3].textContent);
    });

    //set date periode default toDay
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
    //setInputDate("#datePeriode");

    // reset button
    function resetForm() {
        $("#reffNo").val('');
        $("#splDesc").val('');
        $("#styleNo").val('');
        $("#time").val('L');

        setInputDate("#datePeriode");
        $("#endTime").val('60');
        $("#break").val("00");
    }

    //insert SPL emp0011 
    $(document).ready(function(){
        $("#buttonSubmitSPL").click(function(e){
            e.preventDefault(); 
            
            // get data from input form
            let breaks=$("#break").val();
            let startTime=$("#startTime").val();
            let endTime=$("#endTime").val();
            let splId=$("#splId").val();
            let reffNo=$("#reffNo").val();
            let datePeriode=$("#datePeriode").val();
            let splDesc=$("#splDesc").val();
            let time=$("#time").val();
            let styleNo=$("#styleNo").val();
            let createdBy = $("#username").val();

            let resultBreaks = convertHours(breaks);
            // let resultStartTime = convertHours(startTime);
            // let resultEndTime = convertHours(endTime);
            
            const ResultTOTOT = convertHours(endTime);
            
            // mapping data
            if (ResultTOTOT === '01:00'){
                var resultStartTime = '01:00';
                var resultEndTime = '00:00'
               // console.log("==1");
            } else if (ResultTOTOT === '02:00'){
                var resultStartTime = '02:00';
                var res = resultStartTime.split(':');
                var result = res[0]-'02';
                var resultEndTime = '0'+result+':00';
               // console.log("==2");
            }else if (ResultTOTOT >= '02:00' && time != 'H'){
                var resultStartTime = '02:00';
                var res = resultStartTime.split(':');
                var resTot = ResultTOTOT.split(':');
                var result = resTot[0]-res[0];
                var resultEndTime = '0'+result+':00';
               // console.log(">2");
            } else if (ResultTOTOT >= '02:00' && time === 'H'){
                var resultStartTime = '00:00';
                var resultEndTime = ResultTOTOT;
               // console.log(">2 H");
            }

 
        $.ajax({
            url: "<?php echo site_url('index.php/user/employee/DataEditSPL')?>",
            type: 'POST',
            dataType: 'html',
            data: {
                splId: splId, 
                reffNo: reffNo,
                datePeriode: datePeriode,
                splDesc: splDesc,
                time: time,
                breaks: resultBreaks,
                startTime: resultStartTime,
                endTime: resultEndTime,
                totOT: ResultTOTOT,
                styleNo: styleNo,
                createdBy: createdBy
            },
            success: function(data) {
                 console.log(data); //Testing
                // $("#splId").val('');
                 $("#reffNo").val('');
                // $("#datePeriode").val(Date());
                 $("#splDesc").val('');
                 $("#styleNo").val('');
                 alert("succes Update SPL!");
                // $("#formCreateSPL")[0].reset()
                
            }
        });
       });
    });

   
  

  </script>