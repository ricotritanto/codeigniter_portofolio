 <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Service</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>corp/services">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Service</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>   
        </section><!--/#Page header-->


        <!-- 
        ================================================== 
            Service Page Section  Start
        ================================================== -->
        <section id="service-page" class="pages service-page">        
            <div class="container">
                <div class="row">             
                    <div class="col-md-6">
                        <div class="block">
                            <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">Apa keahlian saya..???</h2>
                            <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">Berikut skill saya selama bekerja dibeberapa perusahaan.</p>

                            <div class="row service-parts">
                            <?php foreach ($portfolio as $key ) 
                            {
                                ?>
                                <div class="col-md-6">
                                    <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="600ms">
                                        <i class="ion-ios-paper-outline"></i>
                                        <h4><?php echo $key->title;?></h4>
                                        <p><?php echo $key->description_picture;?></p>
                                    </div>
                                </div>                                
                                <?php 
                            }?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="block">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/images/team.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- 
        ================================================== 
            Works Section Start
        ================================================== -->
        <section class="works service-page">
            <div class="container">
                <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">Apa yang sudah saya kerjakan..??</h2>
                    <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">
                       Ini adalah beberapa contoh portofolio saya:
                    </p>
                <div class="row">
                <?php foreach ($myjob as $key) 
                {
                ?>
                    <div class="col-sm-3">
                         <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                            <div class="img-wrapper">
                                <img src="<?php echo base_url()?>uploads/<?php echo $key->file_name;?>" height="150">
                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" class="fancybox" href="<?php echo base_url()?>uploads/<?php echo $key->file_name;?>">Demo</a>        
                                       <a target="<?php echo base_url();?>corp/work" href="">Details</a>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                                <h4>
                                    <a href="<?php echo base_url();?>corp/work">
                                        <?php echo $key->title;?>      
                                    </a>
                                </h4>
                                <p>
                                    <?php echo $key->client;?>
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                    <?php }?>
                    

                   

                </div>
            </div>
        </section>
        <!-- 
        ================================================== 
            Clients Section Start
        ================================================== -->
        <!--<section id="clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="subtitle text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".3s">Thank u for clients</h2>
                        <p class="subtitle-des text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".5s">dari hobi untuk membantu banyak orang.</p>
                        <div id="clients-logo" class="owl-carousel">
                            <div>
                                <img src="<?php echo base_url();?>assets/images/clients/logo-1.jpg" alt="">
                            </div>
                            <div>
                                <img src="<?php echo base_url();?>assets/images/clients/logo-2.jpg" alt="">
                            </div>
                            <div>
                                <img src="<?php echo base_url();?>assets/images/clients/logo-3.jpg" alt="">
                            </div>
                            <div>
                                <img src="<?php echo base_url();?>assets/images/clients/logo-4.jpg" alt="">
                            </div>
                            <div>
                                <img src="<?php echo base_url();?>assets/images/clients/logo-5.jpg" alt="">
                            </div>
                             <div>
                                <img src="<?php echo base_url();?>assets/images/clients/logo-1.jpg" alt="">
                            </div>
                            <div>
                                <img src="<?php echo base_url();?>assets/images/clients/logo-2.jpg" alt="">
                            </div>
                            <div>
                                <img src="<?php echo base_url();?>assets/images/clients/logo-3.jpg" alt="">
                            </div>
                            <div>
                                <img src="<?php echo base_url();?>assets/images/clients/logo-4.jpg" alt="">
                            </div>
                            <div>
                                <img src="<?php echo base_url();?>assets/images/clients/logo-5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->





     