<?php

/*
Template Name: Mediacentre
*/

get_header(); ?>

<?php get_template_part( 'parts/mediacentre-sub-header');?>

<section class="mediacentre">
    <div class="container">
        <div class="mediacentre-blocks">
            <div class="mediacentre-news">
                <div class="mediacentre-block__news-head">
                    <div class="mediacentre-block__title">
                        <?= do_shortcode( '[acf field="mediacentre_unit-title_news"]' );?>   
                    </div>
                    <div class="mediacentre-block__link">
                        <button class="mediacentre-button">
                            <a href="./news/">All News</a>
                        </button> <!-- /.mediacentre-button -->
                    </div>
                    <!-- /.mediacentre-block__link -->                        
                </div>
                <!-- /.mediacentre-blocks__news-head -->                  
                <ul class="mediacentre-news-block">                
                    <?= do_shortcode( '[pods name="news" limit="2" template="Templates news for rhe mediacentre page"]');?>                
                </ul>
                <!-- /.mediacentre-news-block-->
            </div>
            <!-- /.mediacentre-news -->
           
            <div class="mediacentre-events">
                <div class="mediacentre-block__events-head mediacentre-events-title">
                    <div class="mediacentre-block__title">
                        <?= do_shortcode( '[acf field="mediacentre_unit-title_events"]' );?>
                    </div>
                    <div class="mediacentre-block__link">
                        <button class="mediacentre-button">
                            <a href="./events/">All events</a>
                        </button> <!-- /.mediacentre-button -->
                    </div>
                    <!-- /.mediacentre-block__link -->                        
                </div>
                <!-- /.mediacentre-events-head .mediacentre-events-title-->
                <ul class="mediacentre-events-block">                    
                    <?= do_shortcode( '[pods name="event" limit="3" template="Templates events for rhe mediacentre page"]' );?>
                </ul>
                <!-- /.mediacentre-events-block -->
            </div>
            <!-- /.mediacentre-events -->
            

        </div>
        <!-- /.mediacentre-blocks --> 
        <div class="mediacentre-articles">
            <!-- /.mediacentre-events-head .mediacentre-events-title-->
            <div class="mediacentre-articles-blocks">
                <?= do_shortcode( '[pods name="articles" limit="1" template="Templates articles for rhe mediacentre page"]' );?>                
            </div>
            <!-- /.mediacentre-articles-blocks -->              
        </div>
        <!-- /.mediacentre-articles -->
    </div>
<!-- /.container -->

        <div class="mediacentre-subscribe">
            <div class="container">
                <div class="mediacentre-subscribe-title">
                    Subscribe to newsletter
                </div>
                <!-- /.mediacentre-subscribe-title -->
                <div class="mediacentre-subscribe-block">
                    <div class="mediacentre-subscribe-descr">
                        This summer, the list of the partners providing us with casino games
                        and slots content, has significantly increased thanks to three new partnership agreements.
                    </div>
                    <?= do_shortcode( '[cf7-form cf7key="subscribe-to-newsletter"]' );?>                
                    
                    
                    <!-- /.mediacentre-subscribe-descr -->
                    <!-- <div class="subscribe-form">
                        <div class="subscribe-input-field">
                        <input type="text" class="mediacentre-subscribe-input" placeholder="E-mail"><button class=" button-320 button hidden-button-desctop"></button>
                        </div> -->
                        <!-- /.subscribe-input-field -->                        
                        <!-- <button class="mediacentre-subscribe-button button hidden-mobile">
                            <div class="hidden-mobile">
                            Subscribe
                            </div> -->
                            <!-- /.hidden-mobile -->
                        <!-- </button> -->
                         <!-- /.mediacentre-subscribe-button -->
                    <!-- </div> -->
                    <!-- /.subscribe-form -->
                </div>
                <!-- /.mediacentre-subscribe-block -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.mediacentre-subscribe -->                     
   
</section>
<!-- /.mediacentre -->   
<?php get_template_part( 'parts/nav-footer');?>

<?php get_footer();
