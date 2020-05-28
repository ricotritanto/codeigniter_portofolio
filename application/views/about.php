<div class="top-bar">
        <h1>About Me</h1>
        <p><a href="#">Home</a> / About me</p>
    </div>
    <!-- end Top bar -->
     <?php 
            foreach ($about as $row) 
             {
               ?>
    
    <!-- Main container -->
    <div class="container main-container clearfix"> 
        <div class="col-md-6">
            <img src="<?php echo base_url()?>uploads/resize/<?php echo $row->file_name;?>" class="img-responsive" alt="" />
        </div>
        <div class="col-md-6">
           <h3 class="uppercase">About Me </h3>
           <h5><?php echo $row->title;?></h5>
           <div class="h-30"></div>
            <p><?php echo $row->desc;?>
            <div class="h-10"></div>
            <ul class="social-ul">
                <li class="box-social"><a href="#0"><i class="ion-social-facebook"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-instagram-outline"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-twitter"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-dribbble"></i></a></li>
            </ul>
        <?php
             }
        ?>

        </div>
    </div>