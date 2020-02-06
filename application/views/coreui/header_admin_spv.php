<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Lukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,Angular 2,Angular4,Angular 4,jQuery,CSS,HTML,RWD,Dashboard,React,React.js,Vue,Vue.js">
    <link rel="shortcut icon" href="<?php echo TEMPLATE_ASSETS;?>img/favicon.png">
    <title>STB Prod. Report</title>
    
    <!-- Icons -->
    <link href="<?php echo TEMPLATE_ASSETS;?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo TEMPLATE_ASSETS;?>css/simple-line-icons.css" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="<?php echo TEMPLATE_ASSETS;?>css/style.css" rel="stylesheet">
    <?php echo @$css;?>
    <script>
        base_url = '<?php echo base_url();?>';
    </script>
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden pace-done">
    <header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler d-lg-none" type="button" style="color:white;">☰</button>
        <a class="navbar-brand" href="#"></a>
        <ul class="nav navbar-nav d-md-down-none">
            <li class="nav-item">
                <a class="nav-link navbar-toggler sidebar-toggler" href="#" style="color:white;">☰</a>
            </li>

            <li class="nav-item px-3">
                <a class="nav-link" href="#" style="color:white;">Dashboard</a>
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;">
                    <img src="<?php echo TEMPLATE_ASSETS;?>img/avatars/avatar.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                    <span class="d-md-down-none" style="color:white;">  <?php echo $username = $_SESSION['nik'];?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">

                    <div class="dropdown-header text-center">
                        <strong>Account</strong>
                    </div>
                    
                    <a class="dropdown-item" href="<?php echo base_url();?>index.php/administrator/logout"><i class="fa fa-lock"></i> Logout</a>
                </div>
            </li>
        </ul>
    </header>

    <div class="app-body">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-speedometer"></i> Dashboard</a>
                    </li>
                    <!-- <li class="nav-title">
                        Contents
                    </li> -->
                    <!-- <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-folder-alt"></i> Reports</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url();?>index.php/administrator/reportCleaningBuilding"><i class="icon-graph"></i> Building Report</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url();?>index.php/administrator/reportCleaningBathroom"><i class="icon-graph"></i> Bathroom Report</a>
                            </li>
                        </ul>
                    </li> -->
                    <li class="nav-title">
                        Settings
                    </li>
                    <!-- <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-notebook"></i> Menu Management</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item"> -->
                                <!-- <a class="nav-link" href="<?php echo base_url();?>administrator/menu/add"><i class="icon-pencil"></i> Tambah Menu</a> -->
                                <!-- <a class="nav-link" href="#"><i class="icon-pencil"></i> Tambah Menu</a> -->
                            <!-- </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url();?>index.php/administrator/menu"><i class="icon-list"></i> List Menu</a> -->
                            <!-- </li>
                        </ul>
                    </li> -->
                    <!-- <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-notebook"></i> Role Management</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                               <a class="nav-link" href="<?php //  echo base_url();?>administrator/menu/add"><i class="icon-pencil"></i> Tambah Menu</a> -->
                              <!--    <a class="nav-link" href="#"><i class="icon-pencil"></i> Add Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php // echo base_url();?>index.php/administrator/menu"><i class="icon-list"></i> List Menu</a>
                            </li>
                        </ul>
                    </li> -->
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-notebook"></i> Desc. Management</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url();?>index.php/administrator/area/add"><i class="icon-pencil"></i> Add Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url();?>index.php/administrator/area"><i class="icon-list"></i> List Description</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-notebook"></i> User Management</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url();?>index.php/administrator/user/add"><i class="icon-pencil"></i> Add User</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url();?>index.php/administrator/user"><i class="icon-list"></i> List User</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main content -->
        <main class="main">

        <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <?php echo ($this->uri->segment(1) != "" ? '<li class="breadcrumb-item"><a href="#">'.ucfirst($this->uri->segment(1)).'</a></li>' : '');?>
                <?php echo ($this->uri->segment(2) != "" ? '<li class="breadcrumb-item"><a href="#">'.ucfirst($this->uri->segment(2)).'</a></li>' : '');?>
            </ol>
        <div class="container-fluid">