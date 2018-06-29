<?php

/*
Template Name: News
*/

get_header(); ?>

<?php get_template_part( 'parts/sub-header-news');?>

<section class="news">
    <div class="container">    
        <div class="wrapper-news">
            				
                <?= do_shortcode( '[pods name="news" limit="4" pagination="true" template="Template for news"]');?>        <!-- /** limit="4"*/ -->                 
            
        </div>
        <!-- /.wrapper-news -->
    </div>
    <!-- /.container -->
</section>
<!-- /.news -->
<?php get_template_part( 'parts/nav-footer');?>

<?php get_footer();
