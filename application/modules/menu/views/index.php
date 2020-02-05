<div id="ui-view">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Menus
                    </div>
                    <div class="card-body">
                        <?php if ($this->session->flashdata('msg') != "") { echo $this->session->flashdata('msg'); } ?>
                        <div class="pull-right">
                            <a href="<?php echo site_url('menu/add'); ?>" class="btn btn-success">Add</a> 
                        </div>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Menu Name</th>
                                <th>Parent Menu</th>
                                <th>Menu Type</th>
                                <th>URL</th>
                                <th>Ordering</th>
                                <th>Created Date</th>
                                <th>Created By</th>
                                <th>Actions</th>
                            </tr>
                            <?php foreach($menu as $c){ ?>
                            <tr>
                                <td><?php echo $c['menu_name']; ?></td>
                                <td><?php echo ($c['parent_menu'] != null ? get_table_row('menu','id',$c['parent_menu'])->menu_name : ''); ?></td>
                                <td><?php echo $c['menu_type']; ?></td>
                                <td><?php echo $c['url']; ?></td>
                                <td><?php echo $c['ordering']; ?></td>
                                <td><?php echo $c['created_date']; ?></td>
                                <td><?php echo $c['USERNAME']; ?></td>
                                <td>
                                    <a href="<?php echo site_url('menu/edit/'.$c['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
                                    <a href="<?php echo site_url('menu/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin menghapus item ini?');">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                        <div class="pull-right">
                            <?php echo $this->pagination->create_links(); ?>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>