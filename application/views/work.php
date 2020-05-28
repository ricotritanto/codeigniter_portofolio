<section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>MY PROJECT</h2>
                            <div class="portfolio-meta">
                               <span><?php $todayDate = date("D, M Y"); echo $todayDate;?></span>|
                                 <span> &copy; AMZ</span>
                                <!--<span> Tags: <a href="">business</a>,<a href="">people</a></span>
                                -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section><!--/#Page header-->
            <section class="single-post">
                <div class="container">
                    <div class="row">
                    <?php 
                    foreach ($myjob as $key ) 
                    {?>
                   
                        <div class="col-md-12">
                            <div class="post-img">
                                <img class="img-responsive" alt="" src="<?php echo base_url()?>uploads/resize/<?php echo $key->file_name;?>">
                            </div>
                            <div class="post-content">
                                <p>
                                    <?php echo $key->desctwo;?>
                                </p>
                                <!--<blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas alias ut totam labore, rerum soluta harum vitae pariatur, optio, ad dolore, nihil eligendi nesciunt repellat esse provident sapiente. Repellendus, minus!
                                </blockquote>
                                
                                <ol>
                                    <li>Ipsum dolor sit amet.</li>
                                    <li>Lorem sit amet.</li>
                                    <li>Lorem ipsum dolor sit amet.</li>
                                    <li>Lorem ipsum dolor amet.</li>
                                </ol>-->                                
                            </div>
                        <?php }?>
                            <ul class="social-share">
                                <h4>Share this article</h4>
                                <li>
                                    <a href="#" class="Facebook">
                                        <i class="ion-social-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="Twitter">
                                        <i class="ion-social-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="Linkedin">
                                        <i class="ion-social-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="Google Plus">
                                        <i class="ion-social-googleplus"></i>
                                    </a>
                                </li>
                                
                            </ul>
                            
                        </div>
                    </div>