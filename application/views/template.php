<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Report Visitor - <?= $title ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/skins/_all-skins.min.css">
    InputMask
    <script src="<?= base_url() ?>assets/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="<?= base_url() ?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="<?= base_url() ?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <script src="<?= base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap datepicker -->
    <script src="<?= base_url() ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- bootstrap color picker -->
    <script src="<?= base_url() ?>assets/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="<?= base_url() ?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <img src="<?= base_url() ?>assets/img/logo_perumda_au.png" alt="" style="max-width: 6rem;">
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= base_url() ?>assets/img/user.png" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?= userdata('nama') ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?= base_url() ?>assets/img/user.png" class="img-circle" alt="User Image">

                                    <p>
                                        <?= userdata('nama') ?>
                                        <small>Member</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="<?= site_url('auth/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
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
                        <img src="<?= base_url() ?>assets/img/user.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?= userdata('nama') ?></p>
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
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>

                    <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                    <li><a href="<?= site_url('report') ?>"><i class="fa fa-print"></i> <span>Report</span></a></li>

                    <?php if (userdata('role') == 2) { ?>
                        <li><a href="<?= site_url('visitor') ?>"><i class="fa fa-print"></i> <span>Add Report</span></a></li>
                    <?php } ?>

                    <?php if (userdata('role') == 1) { ?>
                        <li class="header">Master Data</li>
                        <li><a href="<?= site_url('destination') ?>"><i class="fa fa-map"></i> <span>Destination</span></a></li>
                        <li><a href="<?= site_url('user') ?>"><i class="fa fa-users"></i> <span>Account</span></a></li>
                    <?php } ?>

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?= $contents ?>

        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.0
            </div>
            <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Recent Activity</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                    <p>Will be 23 on April 24th</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-user bg-yellow"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                    <p>New phone +1(800)555-1234</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                    <p>nora@example.com</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-file-code-o bg-green"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                    <p>Execution time 5 seconds</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                    <h3 class="control-sidebar-heading">Tasks Progress</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Custom Template Design
                                    <span class="label label-danger pull-right">70%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Update Resume
                                    <span class="label label-success pull-right">95%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Laravel Integration
                                    <span class="label label-warning pull-right">50%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Back End Framework
                                    <span class="label label-primary pull-right">68%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">General Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Report panel usage
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Some information about this general settings option
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Allow mail redirect
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Other sets of options are available
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Expose author name in posts
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Allow the user to show his name in blog posts
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <h3 class="control-sidebar-heading">Chat Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Show me as online
                                <input type="checkbox" class="pull-right" checked>
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Turn off notifications
                                <input type="checkbox" class="pull-right">
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Delete chat history
                                <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
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
    <!-- <script src="<?= base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script> -->

    <!-- jQuery 3 -->
    <script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <!-- <script src="<?= base_url() ?>assets/bower_components/raphael/raphael.min.js"></script> -->
    <script src="<?= base_url() ?>assets/bower_components/morris.js/morris.min.js"></script>
    <!-- Sparkline -->
    <!-- <script src="<?= base_url() ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script> -->
    <!-- jvectormap -->
    <script src="<?= base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url() ?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url() ?>assets/bower_components/moment/min/moment.min.js"></script>
    <script src="<?= base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?= base_url() ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?= base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?= base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= base_url() ?>assets/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>assets/dist/js/demo.js"></script>

    <script src="<?= base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script src="<?php echo base_url() . 'assets/js/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/raphael-min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/morris.min.js' ?>"></script>


    <?php if (userdata('role') != 1) { ?>
        <script>
            Morris.Bar({
                element: 'graph',
                data: <?php echo $dewasa; ?>,
                xkey: 'golongan',
                ykeys: ['count'],
                labels: ['jumlah'],
                barRatio: 0.4,
                xLabelAngle: 35,
                hideHover: 'auto',
            });
        </script>
    <?php } else { ?>

        <!-- DARMA  -->
        <script>
            console.log(<?php echo $darma; ?>);

            Morris.Bar({
                element: 'graph_darma',
                data: <?php echo $darma; ?>,
                xkey: 'golongan',
                ykeys: ['count'],
                labels: ['jumlah'],
                barRatio: 0.4,
                xLabelAngle: 35,
                hideHover: 'auto',
            });
        </script>
        <!-- END DARMA  -->

        <!-- CIGUGUR  -->
        <script>
            console.log(<?php echo $cigugur; ?>);

            Morris.Bar({
                element: 'graph_cigugur',
                data: <?php echo $cigugur; ?>,
                xkey: 'golongan',
                ykeys: ['count'],
                labels: ['jumlah'],
                barRatio: 0.4,
                xLabelAngle: 35,
                hideHover: 'auto',
            });
        </script>

        <script>
            console.log(<?php echo $dalem; ?>);

            Morris.Bar({
                element: 'graph_dalem',
                data: <?php echo $dalem; ?>,
                xkey: 'golongan',
                ykeys: ['count'],
                labels: ['jumlah'],
                barRatio: 0.4,
                xLabelAngle: 35,
                hideHover: 'auto',
            });
        </script>

        <script>
            console.log(<?php echo $monyet; ?>);

            Morris.Bar({
                element: 'graph_monyet',
                data: <?php echo $monyet; ?>,
                xkey: 'golongan',
                ykeys: ['count'],
                labels: ['jumlah'],
                barRatio: 0.4,
                xLabelAngle: 35,
                hideHover: 'auto',
            });
        </script>

        <script>
            console.log(<?php echo $cipaniis; ?>);

            Morris.Bar({
                element: 'graph_cipaniis',
                data: <?php echo $cipaniis; ?>,
                xkey: 'golongan',
                ykeys: ['count'],
                labels: ['jumlah'],
                barRatio: 0.4,
                xLabelAngle: 35,
                hideHover: 'auto',
            });
        </script>

        <script>
            console.log(<?php echo $remis; ?>);

            Morris.Bar({
                element: 'graph_remis',
                data: <?php echo $remis; ?>,
                xkey: 'golongan',
                ykeys: ['count'],
                labels: ['jumlah'],
                barRatio: 0.4,
                xLabelAngle: 35,
                hideHover: 'auto',
            });
        </script>

        <script>
            console.log(<?php echo $nilem; ?>);

            Morris.Bar({
                element: 'graph_nilem',
                data: <?php echo $nilem; ?>,
                xkey: 'golongan',
                ykeys: ['count'],
                labels: ['jumlah'],
                barRatio: 0.4,
                xLabelAngle: 35,
                hideHover: 'auto',
            });
        </script>

        <!-- END CIGUGUR  -->
    <?php
    } ?>

    <script>
        var confirmation = $("#confirmation");
        var hidden = $("#destination");

        hidden.hide();

        confirmation.change(function() {
            if ($(this).val() == '2') {
                hidden.show();
            } else {
                hidden.hide();
                document.getElementById("dateEnd").value = " ";
            }
        })
    </script>

    <script>
        $(function() {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })

        // $(function() {
        //     //Initialize Select2 Elements
        //     $('.select2').select2()

        //     //Datemask dd/mm/yyyy
        //     $('#datemask').inputmask('dd/mm/yyyy', {
        //         'placeholder': 'dd/mm/yyyy'
        //     })
        //     //Datemask2 mm/dd/yyyy
        //     $('#datemask2').inputmask('mm/dd/yyyy', {
        //         'placeholder': 'mm/dd/yyyy'
        //     })
        //     //Money Euro
        //     $('[data-mask]').inputmask()

        //     //Date range picker
        //     $('#reservation').daterangepicker()
        //     //Date range picker with time picker
        //     $('#reservationtime').daterangepicker({
        //         timePicker: true,
        //         timePickerIncrement: 30,
        //         format: 'Y-m-d'
        //     })
        //     //Date range as a button
        //     $('#daterange-btn').daterangepicker({
        //             ranges: {
        //                 'Today': [moment(), moment()],
        //                 'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        //                 'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        //                 'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        //                 'This Month': [moment().startOf('month'), moment().endOf('month')],
        //                 'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        //             },
        //             startDate: moment().subtract(29, 'days'),
        //             endDate: moment()
        //         },
        //         function(start, end) {
        //             $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        //         }
        //     )

        //     //Date picker
        //     $('#datepicker').datepicker({
        //         autoclose: true
        //     })

        //     //iCheck for checkbox and radio inputs
        //     $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        //         checkboxClass: 'icheckbox_minimal-blue',
        //         radioClass: 'iradio_minimal-blue'
        //     })
        //     //Red color scheme for iCheck
        //     $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        //         checkboxClass: 'icheckbox_minimal-red',
        //         radioClass: 'iradio_minimal-red'
        //     })
        //     //Flat red color scheme for iCheck
        //     $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        //         checkboxClass: 'icheckbox_flat-green',
        //         radioClass: 'iradio_flat-green'
        //     })

        //     //Colorpicker
        //     $('.my-colorpicker1').colorpicker()
        //     //color picker with addon
        //     $('.my-colorpicker2').colorpicker()

        //     //Timepicker
        //     $('.timepicker').timepicker({
        //         showInputs: false
        //     })
        // })
    </script>


</body>

</html>