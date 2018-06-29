<?php

/*
Template Name: Why Us
*/

get_header(); ?>

<div class="page-chisel"></div>    
<section class="why-us">
    <div class="container">
        <div class="wrapper-why-us">
            <div class="why-us-page-title">
                <h1 class="company-part-title"> Why us</h1>             
            </div>
            <!-- /.why-us-page-title -->
            <ul class="why-us-list">
                <li class="why-us-list-item">
                    <div class="why-us-list-item-icon">
                        <div class="why-us-list-item-icon-img"></div>
                        <!-- /.why-us-list-item-icon-img -->
                    </div>
                    <!-- /.why-us-list-item-icon -->
                    <div class="why-us-list-item-textinfo">
                        <div class="why-us-list-item-textinfo-title">
                            <?= do_shortcode( '[acf field="why-us_unit-title_expertise"]' );?>
                        </div>
                        <!-- /.why-us-list-item-textinfo-title -->
                        <div class="why-us-list-item-textinfo-descr">
                            <?= do_shortcode( '[acf field="why-us_unit-body_expertise"]' );?>
                        </div>
                        <!-- /.why-us-list-item-textinfo-descr -->
                    </div>
                    <!-- /.why-us-list-item-textinfo -->
                </li>
                <!-- /.why-us-list-item -->
                <li class="why-us-list-item">
                    <div class="why-us-list-item-icon">
                        <div class="why-us-list-item-icon-img"></div>
                        <!-- /.why-us-list-item-icon-img -->
                    </div>
                    <!-- /.why-us-list-item-icon -->
                    <div class="why-us-list-item-textinfo">
                        <div class="why-us-list-item-textinfo-title">
                            <?= do_shortcode( '[acf field="why-us_unit-title_choice"]' );?>
                        </div>
                        <!-- /.why-us-list-item-textinfo-title -->
                        <div class="why-us-list-item-textinfo-descr">
                            <?= do_shortcode( '[acf field="why-us_unit-body_choice"]' );?>                            
                        </div>
                        <!-- /.why-us-list-item-textinfo-descr -->
                    </div>
                    <!-- /.why-us-list-item-textinfo -->
                </li>
                <!-- /.why-us-list-item -->
                <li class="why-us-list-item">
                    <div class="why-us-list-item-icon">
                        <div class="why-us-list-item-icon-img"></div>
                        <!-- /.why-us-list-item-icon-img -->
                    </div>
                    <!-- /.why-us-list-item-icon -->
                    <div class="why-us-list-item-textinfo">
                        <div class="why-us-list-item-textinfo-title">
                            <?= do_shortcode( '[acf field="why-us_unit-title_support-why-us-list"]' );?>
                        </div>
                        <!-- /.why-us-list-item-textinfo-title -->
                        <div class="why-us-list-item-textinfo-descr">
                            <?= do_shortcode( '[acf field="why-us_unit-body_support-why-us-list"]' );?>    
                        </div>
                        <!-- /.why-us-list-item-textinfo-descr -->
                    </div>
                    <!-- /.why-us-list-item-textinfo -->
                </li>
                <!-- /.why-us-list-item -->
                <li class="why-us-list-item">
                    <div class="why-us-list-item-icon">
                        <div class="why-us-list-item-icon-img"></div>
                        <!-- /.why-us-list-item-icon-img -->
                    </div>
                    <!-- /.why-us-list-item-icon -->
                    <div class="why-us-list-item-textinfo">
                        <div class="why-us-list-item-textinfo-title">
                            <?= do_shortcode( '[acf field="why-us_unit-title_development"]' );?>
                        </div>
                        <!-- /.why-us-list-item-textinfo-title -->
                        <div class="why-us-list-item-textinfo-descr">
                            <?= do_shortcode( '[acf field="why-us_unit-body_development"]' );?> 
                        </div>
                        <!-- /.why-us-list-item-textinfo-descr -->
                    </div>
                    <!-- /.why-us-list-item-textinfo -->
                </li>
                <!-- /.why-us-list-item -->
            </ul>
            <!-- /.why-us-list -->
        </div>
        <!-- /.wrapper-why-us -->    
    </div>
    <!-- /.container -->
    <div class="why-us-technology">
        <div class="container">
            <div class="wrapper-why-us">
                <div class="why-us-technology-block">
                    <div class="why-us-technology-block-title">
                        <?= do_shortcode( '[acf field="why-us_unit-title_technology-leadership"]' );?>   
                    </div>
                    <!-- /.why-us-technology-block-title -->
                    <div class="why-us-technology-block-descr">
                        <?= do_shortcode( '[acf field="why-us_unit-body_technology-leadership"]' );?>  
                    </div>
                    <!-- /.why-us-technology-block-descr -->
                    <div class="why-us-technology-block-gaming-software">
                        In our gaming software, we use modern and trusted technologies:
                        #слайдер#
                    </div>
                    <!-- /.why-us-technology-block-gaming-software -->
                </div>
                <!-- /.why-us-technology-block -->
            </div>
            <!-- /.wrapper-why-us -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.why-us-technology -->
    <div class="container">
        <div class="wrapper-why-us">
            <div class="why-us-page-title">
                <?= do_shortcode( '[acf field="why-us_unit-title_system-architecture"]' );?> 
            </div>
            <!-- /.why-us-page-title -->
            <div class="why-us-page-descr">
                <?= do_shortcode( '[acf field="why-us_unit-body_system-architecture"]' );?> 
            </div>
            <!-- /.why-us-page-descr -->
        </div>
        <!-- /.wrapper-why-us -->
    </div>
    <!-- /.container -->
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
    <div class="container">
        <div class="wrapper-why-us">
            <div class="why-us-page-title">
                <?= do_shortcode( '[acf field="why-us_unit-title_support"]' );?> 
            </div>
            <!-- /.why-us-page-title -->
            <div class="why-us-page-descr">
                <?= do_shortcode( '[acf field="why-us_unit-body_support"]' );?>
            </div>
            <!-- /.why-us-page-descr -->
        </div>
        <!-- /.wrapper-why-us -->
    </div>
    <!-- /.container -->

    <!-- table-why-us -->
        <?php get_template_part( 'parts/table-why-us');?>
    <!-- table-why-us -->
    <div class="contact-form-why-us">
        <div class="container">
            <div class="contact-form">
                <div class="press-wrapper">
                    <div class="contact-form-title">Buy</div>
                    <!-- /.contact-form-title -->
                    <?= do_shortcode( '[contact-form-7 id="364" title="Why us contact form"]');?>  
                </div>
                <!-- /.contact-form-press-wrapper -->                
            </div>
            <!-- /.contact-form -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.contact-form-why-us -->    
    
</section>
<!-- /.why-us -->

<?php get_template_part( 'parts/nav-footer');?>

<?php get_footer();
