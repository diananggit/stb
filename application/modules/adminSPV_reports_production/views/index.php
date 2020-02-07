<div class="card">
    <div class="card-block">
        <div class="row">
            <div class="col-sm-5">
                <?php  
                  $data =   $this->session->all_userdata();
                  $username = $data['nik'];   ?>
                <p> Dashboard! </p>
                <label> Welcome <b><?php echo $username ?>.</b> <label>
                <canvas id="myChart" width="400" height="400"></canvas>
            </div>
        </div>
    </div>
</div>