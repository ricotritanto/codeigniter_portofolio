<div class="top-bar">
        <h1>portfolio</h1>
        <p><a href="#">Home</a> / Portfolio</p>
    </div>
    <!-- end top bar -->

    <!-- main container -->
    <div class="main-container portfolio-inner clearfix">
        <!-- portfolio div -->
        <div class="portfolio-div">
            <div class="portfolio">
                <!-- portfolio_filter -->
                <div class="categories-grid wow fadeInLeft">
                    <nav class="categories text-center">
                        <ul class="portfolio_filter">
                            <li><a href="" class="active" data-filter="*">All</a></li>
                            <li><a href="" data-filter=".pemrograman">pemrograman</a></li>
                            <li><a href="" data-filter=".network">Network</a></li>
                            <li><a href="" data-filter=".website">website</a></li>
                            <li><a href="" data-filter=".contractor">Traveling</a></li>
                            <li><a href="" data-filter=".other">Other</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- portfolio_filter -->
       
                <!-- portfolio_container -->
                <div class="no-padding portfolio_container clearfix">
                    <!-- single work -->
                     <?php 
            foreach ($portfolio as $row) 
             {
                $cate= $row->category;

               ?>
               <?php if ($cate=='pemrograman') 
                {
                    ?>
                    
                        <div class="col-md-4 col-sm-6  pemrograman">
                        <a href="<?php echo base_url('corp/v_portfolio/'.$row->id_portfolio); ?>" class="portfolio_item">
                            <img src="<?php echo base_url()?>uploads/resize/<?php echo $row->file_name;?>" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span><?php echo $row->title;?></span>
                                        <em><?php echo $row->category;?></em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <?php
                }else
                {
                 
                }
            
            if ($cate=='network') 
                {
                    ?>
                    
                        <div class="col-md-4 col-sm-6 ads network">
                        <a href="<?php echo base_url('corp/v_portfolio/'.$row->id_portfolio); ?>" class="portfolio_item">
                            <img src="<?php echo base_url()?>uploads/resize/<?php echo $row->file_name;?>" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                         <span><?php echo $row->title;?></span>
                                        <em><?php echo $row->category;?></em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <?php
                }else
                {
                 
                }
                if ($cate=='website') 
                {
                    ?>
                    
                       <div class="col-md-4 col-sm-12 website">
                        <a href="<?php echo base_url('corp/v_portfolio/'.$row->id_portfolio); ?>" class="portfolio_item">
                          <img src="<?php echo base_url()?>uploads/resize/<?php echo $row->file_name;?>" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                         <span><?php echo $row->title;?></span>
                                        <em><?php echo $row->category;?></em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <?php
                }else
                {
                 
                }

                if ($cate=='other') 
                {
                    ?>
                    
                       <div class="col-md-4 col-sm-6 other">
                        <a href="<?php echo base_url('corp/v_portfolio/'.$row->id_portfolio); ?>" class="portfolio_item">
                            <img src="<?php echo base_url()?>uploads/resize/<?php echo $row->file_name;?>" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                         <span><?php echo $row->title;?></span>
                                        <em><?php echo $row->category;?></em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <?php
                }else
                {
                 
                }

                if ($cate=='traveling') 
                {
                    ?>
                    
                      <div class="col-md-4 col-sm-6 contractor">
                        <a href="<?php echo base_url('corp/v_portfolio/'.$row->id_portfolio); ?>" class="portfolio_item">
                            <img src="<?php echo base_url()?>uploads/resize/<?php echo $row->file_name;?>" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                         <span><?php echo $row->title;?></span>
                                        <em><?php echo $row->category;?></em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <?php
                }else
                {
                 
                }
             }   
                    ?>

                   
                    <!-- end single work -->

                </div>
                <!-- end portfolio_container -->
               

                 
            </div>
            <!-- portfolio -->
        </div>
        <!-- end portfolio div -->
    </div>
    <!-- end main container -->
