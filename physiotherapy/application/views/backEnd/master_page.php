<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php
            if (isset($title))
                echo $title;
            else
                echo "Admin Panel • HRSOFTBD News Portal Admin Panel"
            ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Date Picker jquery-ui.css -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <!-- Select2 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
        <!-- bootstrap datepicker -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">
        <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/all.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/switch/rzroky_switch.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/rzrokymy.css">
        <style>
            .flexContainer {
            display: flex;
            }
            .inputField {
            flex: 1;
            }
        </style>
        <!-- Dynamic CSS File if needed. -->
        <?php if (!empty($page_styles_css)): ?>
        <?php foreach ($page_styles_css as $href): ?>
        <?php echo link_tag($href); ?>
        <?php endforeach; ?>
        <?php endif; ?>
        <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            var base_url = '<?php echo base_url() ?>';
        </script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- bootstrap datepicker -->
        <script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- DataTables -->
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!-- iCheck 1.0.1 -->
        <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
        <script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
        <script src="<?php echo base_url(); ?>assets/bootstrap/js/ckeditor.js"></script>
        <!--   for gallery-->
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/gallery/app/scripts/main.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/gallery/app/scripts/repo/gallery.js"></script>
        <link href="<?php echo base_url(); ?>assets/gallery/dist/styles/__main.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/morris/morris.css">
        <!--   for gallery-->
    </head>
    <body class="hold-transition skin-blue sidebar-mini" <?php if ($this->session->flashdata('message')) echo "onload='setTimeout(snackbar_function, 100)';" ?>  >
        <div id="snackbar"><?php echo $this->session->flashdata('message'); ?></div>
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="<?php echo base_url(); ?>" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>HR</b>NP</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>HR</b>News Portal</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">Extra Tools</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="http://banglaconverter.com/" target="_blank">
                                                <i class="fa fa-bold text-aqua"></i> Bangla Converter
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                                page and may cause design problems
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                <i class="fa fa-users text-red"></i> 5 new members joined
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                <i class="fa fa-user text-red"></i> You changed your username
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">View all</a></li>
                                </ul>
                            </li>
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url() . $_SESSION['userPhoto']; ?>" class="user-image" alt="User Image">
                                <span class="hidden-xs"> <?php echo $_SESSION['username_first']; ?> </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src=" <?php echo base_url() . $_SESSION['userPhoto']; ?> " class="img-circle" alt="User Image">
                                        <p>
                                            <?php echo $_SESSION['username_first'] . "   " . $_SESSION['username_last']; ?>
                                            <small> <?php echo $_SESSION['userType']; ?> </small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class="user-body">
                                        <div class="row">
                                            <div class="col-xs-4 text-center">
                                                <a href="http://gmail.com">Mail</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="<?php echo base_url('webmail'); ?> ">Webmail</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="http://facebook.com/hrsoftbd" target="_blank">Facebook</a>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="<?php echo base_url() . $_SESSION['userType']; ?>/profile" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo base_url('login/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src=" <?php echo base_url() . $_SESSION['userPhoto']; ?> " class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p> <?php echo $_SESSION['username']; ?> </p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                            </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header"> <?php echo $this->lang->line("main_navigation"); ?> </li>
                        <li class="treeview <?php if ($activeMenu === "dashboard_view") echo "active"; ?> ">
                            <a href="<?php echo base_url('login'); ?>">
                            <i class="fa fa-dashboard"></i> <span> <?php echo $this->lang->line("dashboard"); ?> </span>
                            <span class="pull-right-container">
                            </span>
                            </a>
                        </li>
                        
                        <?php if ($_SESSION['userType'] === 'admin') : ?>

                        <li class="treeview hidden <?php if ($activeMenu === "user_list" || $activeMenu === "add_user" || $activeMenu === "user_edit") echo "active"; ?> ">
                            <a href="#">
                            <i class="fa fa-users"></i> <span> <?php echo $this->lang->line("manage_user"); ?> </span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class=" <?php if ($activeMenu === "add_user") echo "active"; ?> "><a href="<?php echo base_url('admin/add_user'); ?>"><i class="fa fa-circle-o"></i> <?php echo $this->lang->line("add_user"); ?> </a></li>
                                <li class=" <?php if ($activeMenu === "user_list") echo "active"; ?> "><a href="<?php echo base_url('admin/user_list'); ?>"><i class="fa fa-circle-o"></i> <?php echo $this->lang->line("user_list"); ?> </a></li>
                            </ul>
                        </li>
                        <li class="treeview <?php if ($activeMenu === "package_list" || $activeMenu === "package_add" || $activeMenu === "package_edit") echo "active"; ?> ">
                            <a href="#">
                            <i class="fa fa-gift"></i> <span> <?php echo $this->lang->line("manage_package"); ?> </span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class=" <?php if ($activeMenu === "package_add") echo "active"; ?> "><a href="<?php echo base_url('admin/packages/add'); ?>"><i class="fa fa-circle-o"></i> <?php echo $this->lang->line("package_add"); ?> </a></li>
                                <li class=" <?php if ($activeMenu === "package_list") echo "active"; ?> "><a href="<?php echo base_url('admin/packages/list'); ?>"><i class="fa fa-circle-o"></i> <?php echo $this->lang->line("package_list"); ?> </a></li>
                            </ul>
                        </li>
                        <li class="treeview <?php if ($activeMenu === "portfolio") echo "active"; ?> ">
                            <a href="<?php echo base_url('admin/portfolio'); ?>">
                            <i class="fa fa-briefcase"></i> <span> <?php echo $this->lang->line('manage_portfolio'); ?> </span>
                            </a>
                        </li>
                        <li class="treeview <?php if ($activeMenu === "blog_list" || $activeMenu === "blog_add" || $activeMenu === "blog_edit") echo "active"; ?> ">
                            <a href="#">
                            <i class="fa fa-newspaper-o"></i> <span> <?php echo $this->lang->line('manage_blog'); ?> </span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class=" <?php if ($activeMenu === "blog_add") echo "active"; ?> "><a href="<?php echo base_url('admin/blog/add'); ?>"><i class="fa fa-circle-o"></i> <?php echo $this->lang->line('add_blog'); ?> </a></li>
                                <li class=" <?php if ($activeMenu === "blog_list") echo "active"; ?> "><a href="<?php echo base_url('admin/blog/list'); ?>"><i class="fa fa-circle-o"></i> <?php echo $this->lang->line('blog_list'); ?> </a></li>
                            </ul>
                        </li>

                        <li class="treeview <?php if ($activeMenu === "slider_list" || $activeMenu === "slider_add" || $activeMenu === "slider_edit") echo "active"; ?> ">
                            <a href="#">
                            <i class="fa fa-sliders"></i> <span> <?php echo $this->lang->line("slider_manage"); ?> </span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class=" <?php if ($activeMenu === "slider_add") echo "active"; ?> "><a href="<?php echo base_url('admin/slider/add'); ?>"><i class="fa fa-circle-o"></i> <?php echo $this->lang->line("slider_add"); ?> </a></li>
                                <li class=" <?php if ($activeMenu === "slider_list") echo "active"; ?> "><a href="<?php echo base_url('admin/slider/list'); ?>"><i class="fa fa-circle-o"></i> <?php echo $this->lang->line("slider_list"); ?> </a></li>
                            </ul>
                        </li>
                        <li class="treeview <?php if ($activeMenu === "teammember") echo "active"; ?> ">
                            <a href="<?php echo base_url('admin/teammember'); ?>">
                            <i class="fa fa-users"></i> <span> <?php echo $this->lang->line('manage_teammember'); ?> </span>
                            </a>
                        </li>
                        <li class="treeview <?php if ($activeMenu === "page_settings") echo "active"; ?> ">
                            <a href="<?php echo base_url('admin/page_settings'); ?>">
                            <i class="fa fa-cog"></i> <span> <?php echo $this->lang->line('page_settings'); ?> </span>
                            </a>
                        </li>
                        <li class="treeview <?php if ($activeMenu === "testimonials_list" || $activeMenu === "testimonials_add" || $activeMenu === "testimonials_edit") echo "active"; ?> ">
                            <a href="#">
                            <i class="fa fa-quote-left"></i> <span> <?php echo $this->lang->line("testimonials_manage"); ?> </span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class=" <?php if ($activeMenu === "testimonials_add") echo "active"; ?> "><a href="<?php echo base_url('admin/testimonials/add'); ?>"><i class="fa fa-circle-o"></i> <?php echo $this->lang->line("testimonials_add"); ?> </a></li>
                                <li class=" <?php if ($activeMenu === "testimonials_list") echo "active"; ?> "><a href="<?php echo base_url('admin/testimonials/list'); ?>"><i class="fa fa-circle-o"></i> <?php echo $this->lang->line("testimonials_list"); ?> </a></li>
                            </ul>
                        </li>
                        <li class="treeview <?php if ($activeMenu === "contact_manage_list" || $activeMenu === "contact_manage_edit") echo "active"; ?> ">
                            <a href="<?php echo base_url('admin/contactmanage/list'); ?>">
                            <i class="fa fa-envelope"></i> <span> <?php echo $this->lang->line('manage_contact_page'); ?> </span>
                            </a>
                        </li>
                        <li class="treeview <?php if ($activeMenu === "contact_page") echo "active"; ?> ">
                            <a href="<?php echo base_url('admin/contactpage'); ?>">
                            <i class="fa fa-envelope"></i> <span> <?php echo $this->lang->line('contact_page'); ?> </span>
                            </a>
                        </li>
                        <li class="treeview <?php if ($activeMenu === "general") echo "active"; ?> ">
                            <a href="<?php echo base_url('admin/general') ?>">
                            <i class="fa fa-gears"></i> <span> <?php echo $this->lang->line('general_setting'); ?> </span>
                            </a>
                        </li>
                        <li class="treeview hidden <?php if ($activeMenu === "red_alert") echo "active"; ?> ">
                            <a href="<?php echo base_url('admin/red_alert') ?>">
                            <i class="fa fa-warning"></i> <span> <?php echo $this->lang->line('red_alert'); ?> </span>
                            </a>
                        </li>

                        <?php endif; ?>                                                                                                 
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Version 1.0</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="">Dashboard</li>
                    </ol>
                </section>
                <!-- Main content -->
                <?php
                    if (isset($page)) {
                        $this->load->view($page);
                    }
                    ?>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0.1
                </div>
                <strong>Design &amp; Developed by <a href="http://hrsoftbd.com" target="_blank">HRSOFTBD</a>.</strong> <small>Technology for you.</small>.
            </footer>
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                    <li class="active"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-building-o"></i></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">
                        <h3 class="control-sidebar-heading">Change Language</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="<?php echo base_url("login/lang_set/bangla"); ?>">
                                    <i class="menu-icon fa fa-user bg-yellow"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Bangla</h4>
                                        <p>বাংলাতে দেখতে এখানে ক্লিক করুন</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("login/lang_set/english"); ?>">
                                    <i class="menu-icon fa fa-file-code-o bg-green"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">English</h4>
                                        <p>Click to view in English</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <h3 class="control-sidebar-heading">General Settings</h3>
                        <!-- /.control-sidebar-menu -->
                    </div>
                    <!-- /.tab-pane -->
                    <!-- Settings tab content -->
                    <div class="tab-pane active" id="control-sidebar-settings-tab">
                        <form method="post">
                            <h3 class="control-sidebar-heading">Offers from HRSOFTBD</h3>
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                Make Website
                                </label>
                                <p>
                                    Make a dynamic website for you school, collage, company personal, coaching, official purpose etc.
                                </p>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                Software Develop
                                </label>
                                <p>
                                    we develope software which will be very easy to operate and this will help u to save money.
                                </p>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                APP Develop
                                </label>
                                <p>
                                    We Develop App for Mobile as Android, Apple, Windows Phone. Make a mobile version of your software or website .
                                </p>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                SMS Marketing
                                </label>
                                <p>
                                    The Fastest marketing and most popular marketing is SMS Marketing, we have about 80,00,000 mobile database. Including Doctors, Lawers, Engineers, Teachers, Businessmans, Club members etc. 
                                </p>
                            </div>
                            <!-- /.form-group -->
                            <h3 class="control-sidebar-heading">Other Services</h3>
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                Accounting Software
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                Voice call Marketing
                                </label>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                Fingure Print Machine
                                </label>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                Online Air Ticketing Software
                                </label>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                Real Estate Management Software
                                </label>
                            </div>
                            <!-- /.form-group -->
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->
        <!-- jQuery 2.2.3 -->
        <!-- Date Picker jquery-ui.js -->
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url(); ?>assets/plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url(); ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- SlimScroll 1.3.0 -->
        <script src="<?php echo base_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- ChartJS 1.0.1 -->
        <script src="<?php echo base_url(); ?>assets/plugins/chartjs/Chart.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard2.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
        <script>
            $(".select2").select2();
            function snackbar_function() {
                var x = document.getElementById("snackbar")
                x.className = "show";
                setTimeout(function () {
                    x.className = x.className.replace("show", "");
                }, 3000);
            }
            
        </script>       
    </body>
</html>

