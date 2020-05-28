<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Admin Home Page</title>
        <!-- Bootstrap -->
        <link href="<?php echo base_url();?>admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>admin/assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<?php echo base_url();?>admin/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/tinymce.dev.js"></script>
        <script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/plugins/table/plugin.dev.js"></script>
        <script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/plugins/paste/plugin.dev.js"></script>
        <script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js"></script>
<!-- END TINYMCE -->
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i>User Admin <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="login.html">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="active">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Settings <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    <li>
                                        <a href="#">Tools <i class="icon-arrow-right"></i>

                                        </a>
                                        <ul class="dropdown-menu sub-menu">
                                            <li>
                                                <a href="#">Reports</a>
                                            </li>
                                            <li>
                                                <a href="#">Logs</a>
                                            </li>
                                            <li>
                                                <a href="#">Errors</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">SEO Settings</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Action Module <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="<?php echo base_url();?>akses/index/study">Study</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="<?php echo base_url();?>akses/index/myjob">MyJob</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="<?php echo base_url();?>akses/index/portfolio">Portofolio</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="<?php echo base_url();?>akses/index/news">News</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="<?php echo base_url();?>akses/index/about">About Me</a>
                                    </li>
                                     <li>
                                        <a tabindex="-1" href="<?php echo base_url();?>akses/index/comment">Comment</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="#">FAQ</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Users <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">User List</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Search</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Permissions</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class="active">
                            <a href="<?php echo base_url();?>akses/index/"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>akses/index/study"><i class="icon-chevron-right"></i> Study</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>akses/index/category"><i class="icon-chevron-right"></i> Category</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>akses/index/tutorial"><i class="icon-chevron-right"></i> Tutorial</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>akses/index/myjob"><i class="icon-chevron-right"></i> MyJob</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>akses/index/portfolio"><i class="icon-chevron-right"></i> Portfolio</a>
                        </li>
                         <li>
                            <a href="<?php echo base_url();?>akses/index/about"><i class="icon-chevron-right"></i> About me</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>akses/index/news"><i class="icon-chevron-right"></i> News</a>
                        </li>
                         <li>
                            <a href="<?php echo base_url();?>akses/index/comment"><i class="icon-chevron-right"></i> Comment</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-warning pull-right"></span> Logout</a>
                        </li>
                    </ul>
                </div>