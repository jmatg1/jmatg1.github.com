<?php

/*
Template Name: About Us
*/

get_header(); ?>
    
<div class="page-chisel"></div>    
<section class="about">
    <div class="container">
        <div class="wrapper-about">
           <div class="about-title">
               <h1 class="company-part-title">About us</h1>
            </div>
           <!-- /.about-title -->
           <div class="about-descr">           
                
                <?= do_shortcode( '[acf field="about-us_unit-boby_about-us"]' );?> 
                             
           </div>
           <!-- /.about-descr -->
           <div class="about-title">Products:</div>
           <!-- /.about-title -->
           <ul class="products-list">               
               <li class="products-list-item">
                   <div class="product-list-item__icon first-product-item"></div>
                   <!-- /.product-list-item-icon -->
                   <div class="product-list-item__title">Casino</div>
                <!-- /.product-list-item__title --> 
                </li>
               <!-- /.products-list-item -->
               <li class="products-list-item">
                   <div class="product-list-item__icon second-product-item"></div>
                   <!-- /.product-list-item-icon -->
                   <div class="product-list-item__title">Poker</div>
                <!-- /.product-list-item__title --> 
                </li>
               <!-- /.products-list-item -->
               <li class="products-list-item">
                   <div class="product-list-item__icon third-product-item"></div>
                   <!-- /.product-list-item-icon -->
                   <div class="product-list-item__title">Fantasy sport</div>
                <!-- /.product-list-item__title --> 
                </li>
               <!-- /.products-list-item -->
           </ul>
           <!-- /.products-list -->
           <div class="about-title">
           <?= do_shortcode( '[acf field="about-us_unit-title_our-main-gaming-products-are"]' );?>            
           </div>
           <!-- /.about-title -->
           
           <ul class="main-gaming-products-list">               
               <li class="main-gaming-products-list-item">
                    <div class="main-gaming-products-list-item__icon">
                        <div class="main-gaming-products-list-item__icon-img"></div>                    
                    </div>
                    <!-- /.main-gaming-products-list-item__icon -->
                    <div class="main-gaming-products-list-item__text-block">
                        <div class="main-gaming-products-list-item__title">
                            <?= do_shortcode( '[acf field="about-us_unit-title_casino"]' );?>                         
                        </div>
                        <!-- /.main-gaming-products-list-item__title -->
                        <div class="main-gaming-products-list-item__descr">                        
                            <?= do_shortcode( '[acf field="about-us_unit-boby_casino"]' );?> 
                        </div>
                        <!-- /.main-gaming-products-list-item__descr -->
                    </div>
                    <!-- /.main-gaming-products-list-item__text-block -->
                </li>
               <!-- /.main-gaming-products-list-item -->
               <li class="main-gaming-products-list-item">
                    <div class="main-gaming-products-list-item__icon">
                        <div class="main-gaming-products-list-item__icon-img"></div>                    
                    </div>
                    <!-- /.main-gaming-products-list-item__icon -->
                    <div class="main-gaming-products-list-item__text-block">
                        <div class="main-gaming-products-list-item__title">
                            <?= do_shortcode( '[acf field="about-us_unit-title_poker"]' );?>                
                        </div>
                        <!-- /.main-gaming-products-list-item__title -->
                        <div class="main-gaming-products-list-item__descr"> 
                            <?= do_shortcode( '[acf field="about-us_unit-boby_poker"]' );?>                       
                        </div>
                        <!-- /.main-gaming-products-list-item__descr -->
                    </div>
                    <!-- /.main-gaming-products-list-item__text-block -->
                </li>
               <!-- /.main-gaming-products-list-item -->
               <li class="main-gaming-products-list-item">
               <div class="main-gaming-products-list-item__icon">
                        <div class="main-gaming-products-list-item__icon-img"></div>                    
                    </div>
                    <!-- /.main-gaming-products-list-item__icon -->
                    <div class="main-gaming-products-list-item__text-block">
                        <div class="main-gaming-products-list-item__title">   
                            <?= do_shortcode( '[acf field="about-us_unit-title_fantasy-sport"]' );?>         
                        </div>
                        <!-- /.main-gaming-products-list-item__title -->
                        <div class="main-gaming-products-list-item__descr">   
                            <?= do_shortcode( '[acf field="about-us_unit-boby_fantasy-sport"]' );?>   
                        </div>
                        <!-- /.main-gaming-products-list-item__descr -->
                    </div>
                    <!-- /.main-gaming-products-list-item__text-block -->  
                </li>
               <!-- /.main-gaming-products-list-item -->
            </ul>
            <!-- /.priducts-list -->
            <div class="about-descr">
                <?= do_shortcode( '[acf field="about-us_unit-boby_our-main-gaming-products-are"]' );?>                
            </div>
            <!-- /.about-descr -->   
            </div>
        <!-- /.wrapper-about -->    
    </div>
    <!-- /.container -->
    <div class="container">
        <div class="wrapper-about-slider">
            <div class="about-title about-title-swiper">
                    <?= do_shortcode( '[acf field="about-us_unit-title_timeline"]' );?>      
            </div>
            <!-- /.about-title -->
            <!-- Slider main container -->
        <div class="lunchbox">
                <div id="slider1" class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?= do_shortcode('[pods name="timelines" template="Template timeline"]'); ?>
                    </div>
                    <!-- /.swiper-wrapper -->
                    <!-- If we need navigation buttons -->



                    <!-- /.swiper-container -->
                </div>
                <!-- /.wrapper-about-slider -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
            <div class="about-title about-title-swiper">
                CUSTOMERS 
            </div>
        <div class="lunchbox">
            <div id="slider2" class="swiper-container">                
                <div id="slider2-wrapper" class="swiper-wrapper">
                    
                    <?= do_shortcode('[pods name="customers" template="Template for customers slider"]'); ?>
                </div>
                <!-- /.swiper-wrapper -->
                <!-- If we need navigation buttons -->

                
            </div>
            <div class="swiper-customer-button-next swiper-button-prev"></div>
            <div class="swiper-customer-button-prev swiper-button-next"></div>
        </div>
            <!-- /.swiper-container -->
        
    </div>
    <!-- /.container --> 
    <div class="container">
        <div class="wrapper-about">        
            <p>Слайдер</p>           
            
            


            </div>
        <!-- /.wrapper-about -->    
    </div>
    <!-- /.container -->
    </section>
<!-- /.about -->
<div class="numeric-statistick-about">
    <div class="container">
        <div class="wrapper-about">           
            <?= do_shortcode('[tf_numbers name="numbers-about-us-page"]'); ?>
            </div>
        <!-- /.wrapper-about -->    
    </div>
    <!-- /.container -->
</div>
<!-- /.numeric-statistick-about -->
<section class="about">           
    <div class="container">
        <div class="wrapper-about">     
            <div class="about-descr">
                    <?= do_shortcode( '[acf field="about-us_unit-boby_our-main-gaming-products-are-2"]' );?>                             
            </div>
            <!-- /.about-descr -->
            <?php get_template_part( 'parts/contacts-block');?> 
        </div>
        <!-- /.wrapper-about -->    
    </div>
    <!-- /.container -->
</section>
<!-- /.about -->

<?php get_template_part( 'parts/contact-form-press');?>
<?php get_template_part( 'parts/nav-footer');?>

<?php get_footer();
