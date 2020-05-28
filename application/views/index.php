 <section id="hero-area" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="block wow fadeInUp" data-wow-delay=".3s">
                            
                            <!-- Slider -->
                            <section class="cd-intro">
                                <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                                <span>HI, MY NAME IS Rico & I AM A</span><br>
                                <span class="cd-words-wrapper">
                                    <b class="is-visible">IT SUPPORT</b>
                                    <b>DEVELOPER</b>
                                    <b>FATHER</b>
                                </span>
                                </h1>
                                </section> <!-- cd-intro -->
                                <!-- /.slider -->
                                <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                                    With 5 years experience, I've occupied many roles including freelance programmer, IT Support, and Marketing. This site showcases some of my work. 
                                </h2>
                                <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" data-wow-delay=".9s" href="<?php echo base_url();?>corp/work " data-section="#works" >View Works</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--/#main-slider-->

         <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                                <h2>
                                ABOUT ME
                                </h2>
                                <p>
                                   Hello, I'm a writer code. I am always interested in world progamming or smelling IT.
                                </p>
                            </div>
                            
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                                <img src="<?php echo base_url();?>assets/images/about/about.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- /#about -->

            <section class="works works-fit">
            <div class="container">
                <h2 class="subtitle">Kabar Lainnya</h2>
                    <p class="subtitle-des">
                        Baca juga  berita lainnya disini:
                    </p>
                <div class="row">
                <?php foreach ($news as $key) 
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
                                        <a target="__blank" href="<?php echo base_url('corp/news_detail/'.$key->slug);?>">Details</a>
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

           