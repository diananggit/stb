<div id="ui-view">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Auto Straps
                    </div>
                    <div class="card-body">
                        <p align="center"><b> Auto Straps - Summaries Output Report </b> 
                            <font color="red">
                                <b>
                                    <script type="text/javascript">
                                        const event = new Date();
                                        event.setDate(event.getDate() - 1);

                                        const options = { weekday: 'long', month: 'long', day: 'numeric',  year: 'numeric',};
                                        let date = event.toLocaleDateString(undefined, options);

                                        document.write(date);
                                    </script>.
                                </b>
                            </font>
                        </p>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <td> Total Output </td>
                                <td> <?php echo " ##### "; ?> Pairs </td>
                            </tr>
                            <tr>
                                <td> Total Efficiency </td> 
                                <td> <?php echo " ##### "; ?> % </td>
                            </tr>
                        </table>

                        <table class="table table-striped table-bordered">
                            <tr>
                                    <th>Descriptions</th>
                                    <?php
                                        $query = $this->db->query(" SELECT * FROM dt_machine_prod ORDER BY ID ASC ");
                                        foreach ($query->result() as $c){
                                    ?>
                                    <th> <?php echo $c->Keterangan; ?></th>
                                    <?php
                                        }
                                    ?>
                            </tr>
                            
                            <?php
                                $query = $this->db->query(" SELECT * FROM dt_machine_description ORDER BY DESC_MACHINE_ID ASC ");
                                    foreach ($query->result() as $c){
                            ?>
                                <tr> 
                                    <td><?php echo $c->DESCRIPTION; ?></td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            <?php
                                    }
                            ?>
                        </table>
                        <div class="pull-left">
                            <span class="text-danger"><b>* Info</b></span><br/>
                            <label>MC : Machine</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>