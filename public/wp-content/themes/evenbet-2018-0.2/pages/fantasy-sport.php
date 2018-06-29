<?php

/*
Template Name: Fantasy Sport
*/

get_header(); ?>

<?php get_template_part( 'parts/sub-header-fantasy-sport');?>

<section class="fantasy">
    <div class="container">
        <div class="wrapper-fantasy">
            <div class="fantasy-page-descr">
                <?= do_shortcode( '[acf field="fantasy_unit-boby_fantasy-sport"]' );?>   
            </div>
            <!-- /.fantasy-page-descr -->
            <div class="fantasy-page-title">
                <?= do_shortcode( '[acf field="fantasy_unit-title_advantages"]' );?> 
            </div>
            <!-- /.fantasy-page-title -->
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
               <div id="features-title" class="fantasy-page-title">
                <?= do_shortcode( '[acf field="fantasy_unit-title_features"]' );?>
               </div>
               <div class="img-angle"><div class="hier angle-down"></div></div>
           </div>
            <!-- /.fantasy-page-title -->
            <div id="features-desc" class="fantasy-page-descr" >
                <?= do_shortcode( '[acf field="fantasy_unit-features_description"]' );?>
            </div>
            <div id="features-list" style="display: none;">
                <?= do_shortcode( '[acf field="fantasy_unit-features_list"]' );?>
            </div>
            <!-- /.fantasy-page-descr -->
            <div class="fantasy-page-title">
                <?= do_shortcode( '[acf field="fantasy_unit-title_product-package"]' );?> 
            </div>
            <!-- /.fantasy-page-title -->
            <div class="fantasy-page-descr">
                <?= do_shortcode( '[acf field="fantasy_unit-boby_product-package"]' );?> 
            </div>
            <!-- /.fantasy-page-descr -->
            <ul class="product-package-list">
                <li class="product-package-item">
                    <div class="product-package-item-icon">
                        <div class="product-package-item-icon__img"></div>
                        <!-- /.product-package-item-icon__img -->
                    </div>
                    <!-- /.product-package-item-icon -->
                    <div class="product-package-item-textinfo">
                        <div class="product-package-item-textinfo-title">
                            <?= do_shortcode( '[acf field="fantasy_unit-title_server"]' );?>
                        </div>
                        <!-- /.product-package-item-textinfo-title -->
                        <div class="product-package-item-textinfo-descr">
                            <?= do_shortcode( '[acf field="fantasy_unit-boby_server"]' );?>                            
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
                            <?= do_shortcode( '[acf field="fantasy_unit-title_clien-application"]' );?>
                        </div>
                        <!-- /.product-package-item-textinfo-title -->
                        <div class="product-package-item-textinfo-descr">
                            <?= do_shortcode( '[acf field="fantasy_unit-boby_client-application"]' );?>
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
                            <?= do_shortcode( '[acf field="fantasy_unit-title_control-module"]' );?>
                        </div>
                        <!-- /.product-package-item-textinfo-title -->
                        <div class="product-package-item-textinfo-descr">
                            <?= do_shortcode( '[acf field="fantasy_unit-boby_control-module"]' );?>
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
                            <?= do_shortcode( '[acf field="fantasy_unit-title_support"]' );?>
                        </div>
                        <!-- /.product-package-item-textinfo-title -->
                        <div class="product-package-item-textinfo-descr">
                            <?= do_shortcode( '[acf field="fantasy_unit-boby_support"]' );?>
                        </div>
                        <!-- /.product-package-item-textinfo-descr -->
                    </div>
                    <!-- /.product-package-item-textinfo -->
                </li>
                <!-- /.product-package-item -->
            </ul>
            <!-- /.product-package-list -->
        </div>
        <!-- /.wrapper-fantasy-->
    </div>
    <!-- /.container -->
    <div class="fantasy-center">
        <div class="container">
            <div class="wrapper-fantasy">    
                <div class="fantasy-center-block">
                    <div class="fantasy-center-block-title">
                        EvenBet fantasy is a turnkey online fantasy platform to profit from any popular type of fantasy room
                    </div>
                    <!-- /.fantasy-center-block-title -->
                    <button onclick="location.href='#request'" class="button">Request quote</button>
                    <!-- /.button -->
                </div>
                <!-- /.fantasy-center-block -->
            </div>
            <!-- /.wrapper-fantasy -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.fantasy-center -->
    
    <div class="container">
        <div class="wrapper-fantasy">
            <div class="fantasy-page-title">
                <?= do_shortcode( '[acf field="fantasy_unit-title_demo-version"]' );?> 
            </div>
            <!-- /.fantasy-page-title -->
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
                            HTML5 fantasy will also launch on mobile devices. See more info and try demo.
                        </div>
                        <!-- /.demo-item-textinfo__descr -->
                        <div class="demo-item-textinfo__buttons-part">
                            <button class="button fantasy-button-first try-demo-button">Try on</button>
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
                            <button class="button fantasy-button-first try-demo-button">Try on IOS</button>
                            <button class="button try-demo-button">Try on Android</button>
                        </div>
                        <!-- /.demo-item-textinfo__buttons-part -->
                    </div>
                    <!-- /.demo-item-textinfo -->
                    
                </li>
                <!-- /.demo-item -->
            </ul>
            <!-- /.demo -->
            <div class="fantasy-page-descr">
            <?= do_shortcode( '[acf field="fantasy_unit-boby_demo-version"]' );?>   
            </div>
            <!-- /.fantasy-page-descr -->
        </div>
        <!-- /.wrapper-fantasy -->
    </div>
    <!-- /.container -->
    <div class="slider-3">
        <div id="swiper-container-3" class="swiper-container gallery-top">
            <div class="swiper-wrapper">

                <?= do_shortcode('[pods name="product_slides" template="Template for product slides"]'); ?>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination-3"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-next-3"></div>
            <div class="swiper-button-prev swiper-button-prev-3"></div>
        </div>
    </div>
    <div class="container">
        <div class="wrapper-fantasy">
            <div class="fantasy-page-descr">
            <?= do_shortcode( '[acf field="fantasy_unit-boby_demo-version-2"]' );?>   
            </div>
            <!-- /.fantasy-page-descr -->
            <div class="video-youtube">
                <?  $link= do_shortcode('[acf field="link_youtube"]');
                if ( isset($link) ) {
                    preg_match( "#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $link, $matches );
                } ?>
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?=$matches[0]?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>

        </div>
        <!-- /.wrapper-fantasy -->
    </div>

    <div class="container">
        <div class="wrapper-fantasy">
            <div class="fantasy-page-title">
                <?= do_shortcode( '[acf field="fantasy_unit-title_our-projects"]' );?>
            </div>
            <!-- /.fantasy-page-title -->
        </div>
        <!-- /.wrapper-fantasy -->
    </div>
    <!-- /.container -->
 #slider
    <div class="contact-form-fantasy">
        <div class="container">
            <div class="wrapper-fantasy">
                <div id ="request" class="contact-form-title">Buy</div>
                <!-- /.contact-form-title -->
                <?= do_shortcode( '[cf7-form cf7key="contact-form-for-casino-page"]' );?> 
            </div>
            <!-- /.wrapper-fantasy -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.contact-form-fantasy -->
    
</section>
<!-- /.fantasy -->

<?php get_template_part( 'parts/nav-footer');?>

<?php get_footer();
