<?php

/*
Template Name: Casino
*/

get_header(); ?>

<?php get_template_part( 'parts/sub-header-casino');?>

<section class="casino">
    <div class="container">
        <div class="wrapper-casino">
            <div class="casino-page-descr">
                <?= do_shortcode( '[acf field="casino_unit-boby_casino"]' );?>   
            </div>
            <!-- /.casino-page-descr -->
            <div class="casino-page-title">
                <?= do_shortcode( '[acf field="casino_unit-title_advantages"]' );?> 
            </div>
            <!-- /.casino-page-title -->
            <ul class="advantages-list">
                <li class="advantages-list-item">
                    <div class="advantages-list-item-icon">
                        <div class="advantages-list-item-icon__img"></div><!-- /.advantages-list-item-icon__img -->
                    </div>
                    <!-- /.advantages-list-item-icon -->                    
                    <div class="advantages-list-item-title">Ongoing support</div>
                    <!-- /.advantages-list-item-title -->
                </li>
                <!-- /.advantages-list-item -->
                <li class="advantages-list-item">
                    <div class="advantages-list-item-icon">
                        <div class="advantages-list-item-icon__img"></div><!-- /.advantages-list-item-icon__img -->
                    </div>
                    <!-- /.advantages-list-item-icon -->  
                    <div class="advantages-list-item-title">Regular updates of the program</div>
                    <!-- /.advantages-list-item-title -->
                </li>
                <!-- /.advantages-list-item -->
                <li class="advantages-list-item">
                    <div class="advantages-list-item-icon">
                        <div class="advantages-list-item-icon__img"></div><!-- /.advantages-list-item-icon__img -->
                    </div>
                    <!-- /.advantages-list-item-icon -->  
                    <div class="advantages-list-item-title">Constant addition of new functionality</div>
                    <!-- /.advantages-list-item-title -->
                </li>
                <!-- /.advantages-list-item -->
                <li class="advantages-list-item">
                    <div class="advantages-list-item-icon">
                        <div class="advantages-list-item-icon__img"></div><!-- /.advantages-list-item-icon__img -->
                    </div>
                    <!-- /.advantages-list-item-icon -->  
                    <div class="advantages-list-item-title">Continuous work on improving the product</div>
                    <!-- /.advantages-list-item-title -->
                </li>
                <!-- /.advantages-list-item -->
            </ul>
            <!-- /.advantages-list -->
            <div id="features">
                <div id="features-title" class="poker-page-title">
                    <?= do_shortcode( '[acf field="casino_unit-title_features"]' );?>
                </div>
                <div class="img-angle"><div class="hier angle-down"></div></div>
            </div>

            <div id="features-desc" class="casino-page-descr" >
                <?= do_shortcode( '[acf field="casino_unit-features_description"]' );?>
            </div>
            <div id="features-list" style="display: none;">
                <?= do_shortcode( '[acf field="casino_unit-features_list"]' );?>
            </div>
            <div class="casino-page-title">
                <?= do_shortcode( '[acf field="casino_unit-title_product-package"]' );?> 
            </div>
            <!-- /.casino-page-title -->
            <div class="casino-page-descr">
                <?= do_shortcode( '[acf field="casino_unit-boby_product-package"]' );?> 
            </div>
            <!-- /.casino-page-descr -->
            <ul class="product-package-list">
                <li class="product-package-item">
                    <div class="product-package-item-icon">
                        <div class="product-package-item-icon__img"></div>
                        <!-- /.product-package-item-icon__img -->
                    </div>
                    <!-- /.product-package-item-icon -->
                    <div class="product-package-item-textinfo">
                        <div class="product-package-item-textinfo-title">
                            <?= do_shortcode( '[acf field="casino_unit-title_server"]' );?>
                        </div>
                        <!-- /.product-package-item-textinfo-title -->
                        <div class="product-package-item-textinfo-descr">
                            <?= do_shortcode( '[acf field="casino_unit-boby_server"]' );?>                            
                        </div>
                        <!-- /.product-package-item-textinfo-descr -->
                    </div>
                    <!-- /.product-package-item-textinfo -->
                </li>
                <!-- /.product-package-item -->
                <li class="product-package-item">
                    <div class="product-package-item-icon">
                        <div class="product-package-item-icon__img"></div>
                        <!-- /.product-package-item-icon__img -->
                    </div>
                    <!-- /.product-package-item-icon -->
                    <div class="product-package-item-textinfo">
                        <div class="product-package-item-textinfo-title">
                            <?= do_shortcode( '[acf field="casino_unit-title_clien-application"]' );?>
                        </div>
                        <!-- /.product-package-item-textinfo-title -->
                        <div class="product-package-item-textinfo-descr">
                            <?= do_shortcode( '[acf field="casino_unit-boby_client-application"]' );?>
                        </div>
                        <!-- /.product-package-item-textinfo-descr -->
                    </div>
                    <!-- /.product-package-item-textinfo -->
                </li>
                <!-- /.product-package-item -->
                <li class="product-package-item">
                    <div class="product-package-item-icon">
                        <div class="product-package-item-icon__img"></div>
                        <!-- /.product-package-item-icon__img -->
                    </div>
                    <!-- /.product-package-item-icon -->
                    <div class="product-package-item-textinfo">
                        <div class="product-package-item-textinfo-title">
                            <?= do_shortcode( '[acf field="casino_unit-title_control-module"]' );?>
                        </div>
                        <!-- /.product-package-item-textinfo-title -->
                        <div class="product-package-item-textinfo-descr">
                            <?= do_shortcode( '[acf field="casino_unit-boby_control-module"]' );?>
                        </div>
                        <!-- /.product-package-item-textinfo-descr -->
                    </div>
                    <!-- /.product-package-item-textinfo -->
                </li>
                <!-- /.product-package-item -->
                <li class="product-package-item">
                    <div class="product-package-item-icon">
                        <div class="product-package-item-icon__img"></div>
                        <!-- /.product-package-item-icon__img -->
                    </div>
                    <!-- /.product-package-item-icon -->
                    <div class="product-package-item-textinfo">
                        <div class="product-package-item-textinfo-title">
                            <?= do_shortcode( '[acf field="casino_unit-title_support"]' );?>
                        </div>
                        <!-- /.product-package-item-textinfo-title -->
                        <div class="product-package-item-textinfo-descr">
                            <?= do_shortcode( '[acf field="casino_unit-boby_support"]' );?>
                        </div>
                        <!-- /.product-package-item-textinfo-descr -->
                    </div>
                    <!-- /.product-package-item-textinfo -->
                </li>
                <!-- /.product-package-item -->
            </ul>
            <!-- /.product-package-list -->
        </div>
        <!-- /.wrapper-casino-->
    </div>
    <!-- /.container -->
    <div class="casino-center">
        <div class="container">
            <div class="wrapper-casino">    
                <div class="casino-center-block">
                    <div class="casino-center-block-title">
                        EvenBet Poker is a turnkey online poker platform to profit from any popular type of poker room
                    </div>
                    <!-- /.casino-center-block-title -->
                    <button class="button">Request quele</button>
                    <!-- /.button -->
                </div>
                <!-- /.casino-center-block -->
            </div>
            <!-- /.wrapper-casino -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.casino-center -->
    
    <div class="container">
        <div class="wrapper-casino">
            <div class="casino-page-title">
                <?= do_shortcode( '[acf field="casino_unit-title_demo-version"]' );?> 
            </div>
            <!-- /.casino-page-title -->
            <ul class="demo">
                <li class="demo-item">
                    <div class="demo-item-icon">
                        <div class="demo-item-icon__img"></div>
                        <!-- /.demo-item-icon__img -->
                    </div>
                    <!-- /.demo-item-icon -->
                    <div class="demo-item-textinfo">
                        <div class="demo-item-textinfo__title">Web</div>
                        <!-- /.demo-item-textinfo__title -->
                        <div class="demo-item-textinfo__descr">
                            HTML5 versions allow to play via any browser without downloads. 
                            HTML5 poker will also launch on mobile devices. See more info and try demo.
                        </div>
                        <!-- /.demo-item-textinfo__descr -->
                        <div class="demo-item-textinfo__buttons-part">
                            <button class="button casino-button-first try-demo-button">Try on</button>
                            <div class="home-casino-buttons-block__learn-more-block">
                                <button class="button quote web-quote casino-button-second"></button>
                                <div class="home-casino-buttons-block__learn-more">Learn More</div> 
                            </div>
                        </div>
                        <!-- /.demo-item-textinfo__buttons-part -->
                    </div>
                    <!-- /.demo-item-textinfo -->
                    
                </li>
                <!-- /.demo-item -->
                <li class="demo-item">
                    <div class="demo-item-icon">
                        <div class="demo-item-icon__img"></div>
                        <!-- /.demo-item-icon__img -->
                    </div>
                    <!-- /.demo-item-icon -->
                    <div class="demo-item-textinfo">
                        <div class="demo-item-textinfo__title">MOBILE NATIVE</div>
                        <!-- /.demo-item-textinfo__title -->
                        <div class="demo-item-textinfo__descr">
                            Fast, smooth and carefully designed modern application for iOS and 
                            Android will give your audience a remarkable experience of mobile gambling. 
                            Learn more about the mobile solutions or try our applications from iTunes and Google Play stores.
                        </div>
                        <!-- /.demo-item-textinfo__descr -->
                        <div class="demo-item-textinfo__buttons-part">
                            <button class="button casino-button-first try-demo-button">Try on IOS</button>
                            <button class="button try-demo-button">Try on Android</button>
                        </div>
                        <!-- /.demo-item-textinfo__buttons-part -->
                    </div>
                    <!-- /.demo-item-textinfo -->
                    
                </li>
                <!-- /.demo-item -->
            </ul>
            <!-- /.demo -->
            <div class="casino-page-descr">
            <?= do_shortcode( '[acf field="casino_unit-boby_demo-version"]' );?>   
            </div>
            <!-- /.casino-page-descr -->
        </div>
        <!-- /.wrapper-casino -->
    </div>
    <!-- /.container -->
    <div class="slider-3">
        <div id="swiper-container-3" class="swiper-container gallery-top">
            <div class="swiper-wrapper">

                <?= do_shortcode('[pods name="casino_slides" template="Template for product slides"]'); ?>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination-3"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-next-3"></div>
            <div class="swiper-button-prev swiper-button-prev-3"></div>
        </div>
    </div>
    <div class="container">
        <div class="wrapper-casino">
            <div class="casino-page-descr">
                <?= do_shortcode( '[acf field="casino_unit-boby_demo-version-2"]' );?>
            </div>
            <!-- /.fantasy-page-descr -->
            <div class="video-youtube">

                <?
                $link= do_shortcode('[acf field="casino_unit-link-youtube"]');
                if ( isset($link) ) {
                    preg_match( "#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $link, $matches );
                } ?>
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?=$matches[0]?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>

        </div>
        <!-- /.wrapper-fantasy -->
    </div>
    <!-- /.container -->
    <div class="container">
        <div class="wrapper-casino">
            <div class="casino-page-title">
                <?= do_shortcode( '[acf field="casino_unit-title_our-projects"]' );?> 
            </div>
            <!-- /.casino-page-title -->
        </div>
        <!-- /.wrapper-casino -->
    </div>
    <!-- /.container -->
    #Slider#
    <div class="contact-form-casino">
        <div class="container">
            <div class="wrapper-casino">
                <div class="contact-form-title">Buy</div>
                <!-- /.contact-form-title -->                
                
                <?= do_shortcode( '[cf7-form cf7key="contact-form-for-casino-page"]' );?> 
                
            </div>
            <!-- /.wrapper-casino -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.contact-form-casino -->
    
</section>
<!-- /.casino -->

<?php get_template_part( 'parts/nav-footer');?>

<?php get_footer();

