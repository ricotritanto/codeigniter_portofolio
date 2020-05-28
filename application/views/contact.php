<section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Contact</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>   
        </section><!--/#page-header-->


        <!-- 
        ================================================== 
            Contact Section Start
        ================================================== -->
        <center> 
        
                     <h4> 
                   <?php $flash_pesan = $this->session->flashdata('pesan')?>
                                    <?php if (! empty($flash_pesan)) : ?>
                                        <div class="alert alert-success alert-dismissable">
                                            <?php echo $flash_pesan; ?>
                                        </div>
                                    <?php endif ?></h4>
     </center>
         
        <section id="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    <form action="<?php echo base_url('corp/save_contact');?>" method="post">
                        <div class="block">
                            <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Hubungi Saya</h2>
                            <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                               Masukkan alamat email Anda untuk berlangganan blog ini dan menerima pemberitahuan tulisan-tulisan baru melalui email.
                            </p>
                            <div class="contact-form">
                                <form id="contact-form" method="post" action="sendmail.php" role="form">
                        
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                        <input type="text" placeholder="Your Name" class="form-control" name="name" autocomplete="off" required autofocus id="name">
                                    </div>
                                    
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                        <input type="email" placeholder="Your Email" class="form-control" name="email" autocomplete="off" required id="email" >
                                    </div>
                                    
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                        <input type="text" placeholder="Subject" class="form-control" name="object" required autocomplete="off" id="subject">
                                    </div>
                                    
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                        <textarea rows="6" placeholder="Message" class="form-control" name="message" required autocomplete="off"id="message"></textarea>    
                                    </div>
                                    
                                    
                                    <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                        <input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Send Message">
                                    </div>                      
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="map-area">
                            <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Temukan disini</h2>
                            <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                               Cari saya lewat aplikasi google
                            </p>
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d948.74882099525!2d110.3756594880806!3d-7.009846999681973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMDAnMzUuNSJTIDExMMKwMjInMzQuNCJF!5e1!3m2!1sid!2sid!4v1483862432921" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row address-details">
                    <div class="col-md-3">
                        <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                            <i class="ion-ios-location-outline"></i>
                            <h5>704B ,Street Candi Prambanan, Semarang <br>Indonesia,50149</h5>
                        </div>
                    </div>
                    <!--
                    <div class="col-md-3">
                        <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                            <i class="ion-ios-location-outline"></i>
                            <h5>125 , Kings Street,Melbourne <br>United Kingdom,600562</h5>
                        </div>
                    </div>-->
                    <div class="col-md-3">
                        <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                            <i class="ion-ios-email-outline"></i>
                            <p>support@amz.com<br>support@amazing.com</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                            <i class="ion-ios-telephone-outline"></i>
                            <p>+85 xx xxx xxx<br>+81 999 999 999</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      
       