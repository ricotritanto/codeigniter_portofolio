<section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Blog Traveling</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="<?php echo base_url('corp');?>">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active"><?php echo $blog[0]->category;?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            </section><!--/#Page header-->
            <section id="blog-full-width">
                <div class="container">
                    <div class="row">
                     <div class="col-md-8">
                         <?php foreach ($blog as $key) 
                    {?>
                            <article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
                                <div class="blog-post-image">
                                    <a href="<?php echo base_url('corp/news_detail/'.$key->slug);?>"><img class="img-responsive" src="<?php echo base_url()?>uploads/resize/<?php echo $key->file_name;?>" alt="" /></a>
                                </div>
                                <div class="blog-content">
                                    <h2 class="blogpost-title">
                                    <a href="post-fullwidth.html"><?php echo $key->title;?></a>
                                    </h2>
                                    <div class="blog-meta">
                                        <span><?php echo $key->date;?></span>
                                        <span>by <a href=""><?php echo $key->source;?></a></span>
                                        <span><a href=""><?php echo $key->category;?></a></span>
                                    </div>
                                    <p><?php echo substr($key->desc,0,300);?>
                                    </p><a href="<?php echo base_url('corp/news_detail/'.$key->slug);?>" class="btn btn-dafault btn-details">Continue Reading</a>
                                </div>
                                
                            </article>   <?php }?>                          
                        </div>
                        <div class="col-md-4">
                            <div class="sidebar">
                                <div class="search widget">
                                    <form action="" method="get" class="searchform" role="search">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search for...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"> <i class="ion-search"></i> </button>
                                            </span>
                                            </div><!-- /input-group -->
                                        </form>
                                    </div>
                                    <div class="author widget">
                                        <img class="img-responsive" src="images/author/author-bg.jpg">
                                        <div class="author-body text-center">
                                            <div class="author-img">
                                                <img src="images/author/author.jpg">
                                            </div>
                                            <div class="author-bio">
                                                <h3>Jonathon Andrew</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt magnam asperiores consectetur, corporis ullam impedit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="categories widget">
                                        <h3 class="widget-head">Categories</h3>
                                         <ul>
                                            <li>
                                                <a href="">Sport</a> <span class="badge"><?php echo count($sport);?></span>
                                            </li>
                                            <li>
                                                <a href="">Traveling</a> <span class="badge"><?php echo count($blog);?></span>
                                            </li>
                                            <li>
                                                <a href="">Technology</a> <span class="badge"><?php echo count($it);?></span>
                                            </li>
                                            <li>
                                                <a href="">Other</a> <span class="badge"><?php echo count($other);?></span>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                   <div class="recent-post widget">
                                        <h3>Recent Posts</h3>
                                        
                                        <ul>
                                            <?php foreach ($news as $key) {?>
                                            
                                        
                                            <li>
                                                <a href="<?php echo base_url('corp/news_detail/'.$key->slug);?>>"><?php echo $key->title;?></a><br>
                                                <time><?php echo $key->date;?></time>
                                            </li>
                                         <?php   } ?>
                                            
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>