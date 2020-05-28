        <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>About Me</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">About</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 
        ================================================== 
            Company Description Section Start
        ================================================== -->
        <section class="company-description">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                        <img src="<?php echo base_url()?>uploads/resize/<?php echo $about[0]->file_name;?>" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-6">
                        <div class="block">
                            <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms"><?php echo $about[0]->title;?></h3>
                            <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                                <?php echo $about[0]->desc;?>
                            </p>
                            <p  class="wow fadeInUp" data-wow-delay=".7s" data-wow-duration="500ms">
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- 
        ================================================== 
            Company Feature Section Start
        ================================================== -->
        <section class="about-feature clearfix">
            <div class="container-fluid">
           
                <div class="row">     
                
                    <?php foreach ($study as $key) {
                # code...
            ?>           
                    <div  class="block about-feature-2 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">
                        <h2>
                        <?php echo $key->name ;?>
                        </h2>
                        <p>
                            <?php echo $key->desc ;?>
                        </p>
                    </div>
                    <?php }?>
                </div>
            </div>
        </section>


        <!-- 
        ================================================== 
            Team Section Start
        ================================================== -->
        <section id="team">
            <div class="container">
                <div class="row">
                    <h2 class="subtitle text-center">Thanks my Friends</h2>
                    <div class="col-md-3">
                        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                            <div class="team-img">
                                <!--<img src="images/team/team-1.jpg" class="team-pic" alt="">-->
                            </div>
                            <h3 class="team_name">Muhammad Lukman</h3>
                            <p class="team_designation">Software Engineer, Ralali.com</p>
                            <!--<p class="team_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                            --><p class="social-icons">
                                <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                                <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                                <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                                <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                            <div class="team-img">
                               <!--<img src="images/team/team-1.jpg" class="team-pic" alt="">-->
                            </div>
                            <h3 class="team_name">Muhammad Zulfikar</h3>
                            <p class="team_designation">Software Engineer, Freelance Programmer</p>
                           <!-- <p class="team_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .</p>
                            --><p class="social-icons">
                                <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                                <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                                <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                                <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                            <div class="team-img">
                               <!--<img src="images/team/team-1.jpg" class="team-pic" alt="">-->
                            </div>
                            <h3 class="team_name">Doddy</h3>
                            <p class="team_designation">Software Engineer, Ralali.com</p>
                            <!--<p class="team_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .</p>
                            --><p class="social-icons">
                                <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                                <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                                <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                                <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                            <div class="team-img">
                               <!--<img src="images/team/team-1.jpg" class="team-pic" alt="">-->
                            </div>
                            <h3 class="team_name">Erlang Prima S</h3>
                            <p class="team_designation">SPV, Telkomsel </p>
                            <!--<p class="team_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .</p>
                            --><p class="social-icons">
                                <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                                <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                                <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                                <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                            </p>
                        </div>
                    </div>
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
                        <h2 class="subtitle text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Our Happy Clinets</h2>
                        <p class="subtitle-des text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, error.</p>
                        <div id="clients-logo" class="owl-carousel">
                            <div>
                                <img src="images/clients/logo-1.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-2.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-3.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-4.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-5.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-1.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-2.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-3.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-4.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        
        <!--
        ==================================================
        Call To Action Section Start
        ================================================== 
        <section id="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT YOU THINK ?</h1>
                            <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis,</br>possimus commodi, fugiat magnam temporibus vero magni recusandae? Dolore, maxime praesentium.</p>
                            <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>-->
      