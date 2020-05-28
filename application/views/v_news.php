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

            <section class="portfolio-single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portfolio-single-img">
                                <img class="img-responsive" alt="" src="<?php echo base_url()?>uploads/resize/<?php echo $news[0]->file_name;?>">
                            </div>
                            <div class="portfolio-content">
                                <p>
                                    <?php echo $news[0]->desc;?>
                                </p>
                            </div>
                         
                        </div>
                    </div>
                </div>
            </section>

            <section class="works works-fit">
            <div class="container">
                <h2 class="subtitle">Kabar Lainnya</h2>
                    <p class="subtitle-des">
                        Baca juga  berita lainnya disini:
                    </p>
                <div class="row">
                <?php foreach ($listnews as $key) 
                {
                    $aa = word_limiter($key->title,3); 
                ?>
                    <div class="col-sm-3">
                         <figure class="wow fadeInLeft animated portfolio-item animated" data-wow-duration="300ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 0ms; -webkit-animation-delay: 0ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                            <div class="img-wrapper">
                                <img src="<?php echo base_url()?>uploads/resize/<?php echo $key->file_name;?>" class="img-responsive" alt="portfolio items">
                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" title="Proin imperdiet augue et magna interdum hendrerit" class="fancybox" href="<?php echo base_url()?>uploads/resize/<?php echo $key->file_name;?>">Demo</a>        
                                        <a target="_blank" href="<?php echo base_url('corp/news_detail/'.$key->slug);?>">Details</a>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                                <h4>
                                    <a href="<?php echo base_url('corp/v_news/'.$key->slug);?>">
                                         <?php echo $key->title;?>      
                                    </a>
                                </h4>
                                <p>
                                     <?php echo $key->category;?>
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                    <?php }?>
                    

                   

                </div>
            </div>
        </section>
        