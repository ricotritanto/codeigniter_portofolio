 <div class="container-fluid">
        <!-- box header -->
        <header class="box-header">
            <div class="box-logo">
                <a href="index.html"><img src="<?php echo base_url()?>assets/img/logo.png" width="80" alt="Logo"></a>
            </div>
            <!-- box-nav -->
            <a class="box-primary-nav-trigger" href="#0">
                <span class="box-menu-text">Menu</span><span class="box-menu-icon"></span>
            </a>
            <!-- box-primary-nav-trigger -->
        </header>
        <!-- end box header -->

        <!-- nav -->
        <nav>
            <ul class="box-primary-nav">
                <li class="box-label">About me</li>

                <li><a href="index.html">Intro</a> <i class="ion-ios-circle-filled color"></i></li>
                <li><a href="<?php echo base_url('corp/about');?>">About me</a></li>
                <li><a href="<?php echo base_url('corp/myjob');?>">My Job</a><i class="ion-ios-circle-filled color"></li></i>
                <li><a href="<?php echo base_url('corp/portfolio');?>">portfolio</a></li>
                <li><a href="<?php echo base_url('corp/contact');?>">contact me</a></li>


                <li class="box-label">Follow me</li>

                <li class="box-social"><a href="#0"><i class="ion-social-facebook"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-instagram-outline"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-twitter"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-dribbble"></i></a></li>
            </ul>
        </nav>
        <!-- end nav -->
    </div>

    <!-- top bar -->
    <div class="top-bar">
        <h1>MyJob</h1>
        <p><a href="#">Home</a> / My Job</p>
    </div>
    <!-- end top bar -->

    <div class="container main-container">
        <div class="clearfix">
        <?php 
            foreach ($myjob as $row) 
             {
               ?>

            <!-- service-box -->
            <div class="col-md-4 service-box">
                
                <h3> <?php echo $row->title?></h3>
                <div class="h-10"></div>
                <p><?php echo $row->desc;?> </p>
            </div>
            <!-- end service-box -->
 <?php
             }
                    ?>
            

        </div>
    </div>
