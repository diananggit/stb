<div id="ui-view">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Create SPL
                </div>
                <div class="card-body">
                <form action="#" method="post">
                
                <?php
                   $query = $this->db->query("SELECT SPLID FROM emp0011 ORDER BY SPLID DESC LIMIT 1");
                   $getSPLID = $query->row();
                   $result = $getSPLID->SPLID + 1;
                ?>
                <form action="#"  method="post" id="formCreateSPL">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="name">SPL ID</label>
                            <input class="form-control" value=<?php echo $result ?> 
                               id="name" type="text" disabled >
                            <input class="form-control" value=<?php echo $result ?> 
                               id="splId" type="hidden" name="splId">
                        </div>
                        <div class="col-md-6">
                            <label for="name">Reff No</label>
                            <input class="form-control" name="reffNo" id="reffNo" required
                                type="text" placeholder="16112019-S2 3JAM">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="name">Date</label>
                            <input class="form-control" id="datePeriode" type="date" name="datePeriode" required>
                           
                            <span class="help-block"><span class="text-danger">*</span>Please enter a valid date</span>
                        </div>
                        <div class="col-md-6">
                            <label for="name">SPL Desc</label>
                            <input class="form-control" id="splDesc" 
                            type="text" name="splDesc" placeholder="LEMBUR AWAL SHIFT 2 ~ 3JAM" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="name">Overtime Category</label>
                            <select class="form-control" name="time" id="time">
                                <option value="L">Overtime after normal working hours</option> 
                                <option value="F">Overtime prior to normal working hours</option> 
                                <option value="H">Overtime during holiday</option> 
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="name">Break</label>
                            <select class="form-control" name="time" id="break">
                                <option value="00">00 Minutes</option> 
                                <option value="30">30 Minutes</option> 
                                <option value="60">01 Hour</option> 
                            </select>
                            <!-- <input class="form-control" id="break" value="00:00" type="time" name="break" required> -->
                        </div>
                    </div>
                    <div class="form-group row">
                        <!-- <div class="col-md-6">
                            <label for="name">Overtime 1</label>
                            <select class="form-control" name="time" id="startTime">
                                <option value="60">01 Hours</option> 
                                <option value="120">02 Hours</option> 
                            </select>
                            <input class="form-control" id="startTime" type="time" name="startTime" required>
                        </div> -->
                        <div class="col-md-6">
                            <label for="name">Overtime</label>
                            <!-- <input class="form-control" id="endTime" type="time" name="endTime" required> -->
                            <select class="form-control" name="time" id="endTime">
                                <option value="60">01 Hour</option> 
                                <option value="120">02 Hours</option> 
                                <option value="180">03 Hours</option> 
                                <option value="240">04 Hours</option> 
                                <option value="300">05 Hours</option>
                                <option value="360">06 Hours</option> 
                                <option value="420">07 Hours</option> 
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="name">Style No</label>
                            <input class="form-control" id="styleNo" name="styleNo" type="text" placeholder="US 4S83" required>
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
                        <button type="button" value="Reset"
                                id="btnResetForm" 
                                onclick="resetForm()"
                                class="btn btn-warning active">
                            <i class ="fa fa-eraser"> 
                            </i>
                            Reset
                        </button>&nbsp;&nbsp;
                    </div>
                    <div class="pull-left">
                        <button 
                                type="button"
                                class="btn btn-primary" 
                                id="buttonSubmitSPL"
                                data-toggle="modal" >
                                <i class ="fa fa-save">
                                </i>&nbsp;Save
                            </button>
                    </div>
                </div>
            </div>
            <div class="card" id="cardListEmployee" style="display:none;">
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
                                <th>NIK</th>
                                <th>Name</th>
                                <th>Group Desc</th>
                                <th>Action</th>
                            </tr>
                            <?php 
                              foreach($publikasi as $c){    
                            ?>
                            <tr id="<?php echo $c['NIK'];?>">
                                <td><?php echo $c['NIK']; ?></td>
                                <td><?php echo $c['Name']; ?></td>
                                <td><?php echo $c['GroupDesc']; ?></td> 
                                <td style=" display:none;"><?php echo $c['EmployeeID']; ?></td>
                                <td>       
                                    <button 
                                        type="submit"
                                        class="btn btn-sm btn-primary" 
                                        id="btnSubmitApprove"
                                        data-toggle="modal" >
                                            <i class ="fa fa-dot-circle-o">
                                            </i> Approval
                                    </button>
                                </td>                    
                            </tr>
                            <?php } ?>
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

<!-- Start Modal -->
<div class="modal fade" id="viewModalSPL" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> Surat Permohonan Lembur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    &nbsp;<p> &nbsp;&nbsp;&nbsp;Dengan ini, Saya ;</p>
      <?php
        $query = $this->db->query("SELECT SPLID FROM emp0011 ORDER BY SPLID DESC LIMIT 1");
        $getSPLID = $query->row();
        $result = $getSPLID->SPLID + 1;
      ?>
      <div class="modal-body">
      <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <label for="name">SPL ID</label>
                </div>
                <div class="col-md-6">
                     <input class="form-control" 
                            value=<?php echo $result ?> 
                            name="splId" id="splId"
                            type="text" disabled>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <label for="name">NIK</label>
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="getNik" id="getNik" disabled>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Name</label>
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="getName" id="getName" disabled>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Group Desc</label>
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="getGroupDesc" id="getGroupDesc" disabled>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Reff No</label>
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="getReffNo" id="getReffNo" disabled>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <label for="name">SPL Desc</label>
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="getSPLDesc" id="getSPLDesc" disabled>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Style No</label>
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="getStyleNo" id="getStyleNo" disabled>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Date</label>
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="getDatePeriod" id="getDatePeriod" disabled>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Overtime</label>
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="getOvertime" id="getOvertime" disabled>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Overtime Category</label>
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="getOvertimeCategory" id="getOvertimeCategory" disabled>
                </div>
            </div>
        </div>
        <br>
        <p>Menyetujui untuk bekerja lembur, dengan keterangan sebagaimana tertulis diatas, dalam keadaan sadar dan tanpa paksaan.</p>
      <!-- start hidden value -->
      <input class="form-control" value="<?php echo $getGroupId = $_SESSION['groupId'];?>" id="groupId" type="hidden" name="groupId">
      <input class="form-control" type="hidden" name="EmployeeID" id="employeeID" disabled>
      <!-- end hidden value -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
            <i class ="fa fa-close">
            </i>
            Batal
        </button>
        <button type="button" class="btn btn-primary" id="buttonSubmitDetailSPL">
            <i class ="fa fa-dot-circle-o">
            </i>
            Menyetujui
        </button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->

<!-- Start checking PIN -->
<?php
  //  $query = $this->db->query("SELECT NIK FROM emp0003 WHERE NIK = '$nik' ORDER BY NIK DESC LIMIT 1");
  //  $getPIN = $query->num_rows();
    //$result = $getSPLID->SPLID + 1;
?>
<!-- End Checking PIN -->

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
        $('#buttonSubmitSPL').attr('disabled',true);
    
    
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

        $('#styleNo').keyup(function(){
            console.log('length',$(this).val().length);
            if($(this).val().length !=0 ){
                $('#buttonSubmitSPL').attr('disabled', false);
            }
            else
            {
                $('#buttonSubmitSPL').attr('disabled', true);        
            }
        })
    });

    // get data table to modal
    $('table tbody tr  td').on('click',function(){
        // get localStorage
        let viewStyleNoLocalStorage = localStorage.getItem("styleNo");
        let viewDatePeriodeLocalStorage = localStorage.getItem("datePeriode");
        let viewOvertimeLocalStorage = localStorage.getItem("overtime");
        let viewOvertimeCategoryLocalStorage = localStorage.getItem("overtimeCategory");

        let viewSplDescLocalStorage = localStorage.getItem("splDesc");
        let viewReffNocLocalStorage = localStorage.getItem("reffNo");

        $("#viewModalSPL").modal("show");
        
        $("#getNik").val($(this).closest('tr').children()[0].textContent);
        $("#getName").val($(this).closest('tr').children()[1].textContent);
        $("#getGroupDesc").val($(this).closest('tr').children()[2].textContent);
        $("#employeeID").val($(this).closest('tr').children()[3].textContent);

        $("#getStyleNo").val(viewStyleNoLocalStorage);
        $("#getDatePeriod").val(viewDatePeriodeLocalStorage);
        $("#getOvertime").val(viewOvertimeLocalStorage);
        $("#getOvertimeCategory").val(viewOvertimeCategoryLocalStorage);

        $("#getSPLDesc").val(viewSplDescLocalStorage);
        $("#getReffNo").val(viewReffNocLocalStorage);

    });

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
    setInputDate("#datePeriode");

    // insert SPL emp0011 
    $(document).ready(function(){
      
        $("#buttonSubmitSPL").click(function(e){
            $('#cardListEmployee').css('display','');
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

            // totOT  = sum OT 1 + OT 2
            // let ResultTOTOT = addTimes(resultStartTime,resultEndTime);

            // To localStorage 
            if ( time === 'L'){
                var resultOvertimeCategory = 'Overtime after normal working hours';
            }else if ( time === 'F' ) {
                var resultOvertimeCategory = 'Overtime prior to normal working hours';
            }else if ( time === 'H' ) {
                var resultOvertimeCategory = 'Overtime during holiday';
            }

            let styleNoLocalStorage = localStorage.setItem("styleNo", styleNo);
            let datePeriodeLocalStorage = localStorage.setItem("datePeriode", datePeriode);
            let overtimeLocalStorage = localStorage.setItem("overtime", ResultTOTOT);
            let overtimeCategoryLocalStorage = localStorage.setItem("overtimeCategory", resultOvertimeCategory);

            let splDescLocalStorage = localStorage.setItem("splDesc", splDesc);
            let reffNoLocalStorage = localStorage.setItem("reffNo", reffNo);
           
 
        $.ajax({
            url: "<?php echo site_url('index.php/user/employee/createNewSPL')?>",
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
                 $("#reffNo").val('');
                 $("#splDesc").val('');
                 $("#styleNo").val('');
                 $("#time").val('L');

                 setInputDate("#datePeriode");
                 $("#endTime").val('60');
                 $("#break").val("00");
                 alert("succes create SPL!");
                
            }
        });
       });
    });

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

    // insert Detail SPL emp0012 
    $(document).ready(function(){
        $("#buttonSubmitDetailSPL").click(function(e){

            e.preventDefault(); 
            let nik = $("#getNik").val();
            let pin = prompt("Please input your PIN number?", "");

            // slicing variabel
            let resNIK = nik.slice(-6);
            let resPIN = pin.slice(-6);

            console.log('PIN :',resPIN);
            console.log('NIK :',resNIK);

            if ( resNIK === resPIN ){
 
                let groupId = $("#groupId").val();
                let employeeId = $("#employeeID").val();
                let splId = $("#splId").val();

                let niks = $("#getNik").val();

              $.ajax({
                url: "<?php echo site_url('index.php/user/employee/createNewDetailSPL')?>",
                type: 'POST',
                dataType: 'html',
                data: {
                    splId: splId, 
                    groupId: groupId,
                    employeeId: employeeId
                },
                success: function(data) {
                    // console.log("ajax",data); //Testing
                    $('#viewModalSPL').modal('hide');
                    // $("#btnSubmitApprove").prop('disabled', true);    
                    try{        
                        let  objectData = data;
                    // var obj = jQuery.parseJSON(data);
                    // alert( obj['STATUS']);
                    // console.log("objectData ",objectData);
                        $('#'+niks).remove();
                        alert("Thank you :)");
                    }catch(e) {     
                    // alert('Exception while request..');
                        console.log(e);
                    }       
                },
                error: function(){                      
                // alert('Error while request..');
                }
            //}
             });

            }else{
	             alert("Your PIN number false!");
            }
       });
    });

  </script>