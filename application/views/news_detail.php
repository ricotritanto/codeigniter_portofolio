<?php echo $this->session->flashdata('message');?>

<section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2><?php echo $news[0]->title;?></h2>
                            <div class="portfolio-meta">
                                <span><?php echo $day[$tgl].', '.$news[0]->date?></span>|
                               <span> <?php echo $news[0]->category;?></span>|
                               <span> source :<u> <?php echo $news[0]->source?></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section><!--/#Page header-->
            <section class="single-post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="post-img">
                                <img class="img-responsive" alt="" src="<?php echo base_url()?>uploads/resize/<?php echo $news[0]->file_name;?>">
                            </div>
                            <div class="post-content">
                                <p>
                                    <?php echo $news[0]->desc;?>
                                </p>
                                
                            </div>
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

                    <div class="row">
                    <?php foreach ($comment as $key) 
                    { 
                    ?>
                        <div class="col-md-12">
                            <div class="comments">
                                <div class="media">
                                    <a href="" class="pull-left">
                                       <!-- <img alt="" src="images/avater.jpg" class="media-object">-->
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                        <?php echo $key->name;?></h4>
                                        <p class="text-muted">
                                            <?php echo $key->date;?>
                                        </p>
                                        <p>
                                            <?php echo $key->comment;?>
                                        </p>
                                        <!--<a href="">Reply</a>-->
                                        <hr>
                                        <!-- Nested media object -->
                                        <!--<div class="media">
                                            <a href="" class="pull-left">
                                                <img alt="" src="images/avater-1.jpg" class="media-object">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                Tom Cruse </h4>
                                                <p class="text-muted">
                                                    12 July 2013, 10:20 PM
                                                </p>
                                                <p>
                                                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                                                </p>
                                            </div>
                                        </div>-->
                                        <!--end media-->
                                        <hr>                                      
                                       
                                    </div>                                    
                                </div>
                                
                            </div>
                        </div><?php } ?>
                    </div>
                    



                    <div class="post-comment">
                                <h3>Leave a Reply</h3>
                                <form role="form" class="form-horizontal" method="post" action="<?php echo base_url();?>corp/comment">
                                <input type="hidden" name="idnews" value="<?php echo $news[0]->id_news;?>">
                                    <div class="form-group">
                                        <div class="col-lg-6">
                                            <input type="text" class="col-lg-12 form-control" required placeholder="Name" name="nama">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="email" class="col-lg-12 form-control" required placeholder="Email" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            <textarea class=" form-control" rows="8" name="pesan" required placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <p>
                                    </p>
                                    <p>
                                        <button class="btn btn-send" type="submit">Comment</button>
                                    </p>
                                    
                                    <p></p>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>