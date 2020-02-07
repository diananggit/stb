<div class="card">
    <div class="card-block">
        <div class="row">
            <div class="col-sm-5">
                <?php  
                  $data =   $this->session->all_userdata();
                  $username = $data['nik'];   ?>
                <p> Dashboard Admin SPV! </p>
                <label> Welcome <b><?php echo $username ?>.</b> <label>
            </div>
        </div>
    </div>
</div>