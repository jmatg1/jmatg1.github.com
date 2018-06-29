<?php

/*
Template Name: Articles
*/

get_header(); ?>
<?php get_template_part( 'parts/articles-subheader'); ?>

<section class="articles">
    <div class="container">            
        <div class="wrapper-articles">
                <?= do_shortcode( '[pods name="articles" template="Template for the articles" limit = "4" pagination="true"]' );?>

            <!-- /.wrapper -->
        </div>
        <!-- /.wrapper -->
    </div>
    <!-- /.container -->
</section>
<!-- /.news -->


<?php get_template_part( 'parts/nav-footer');?>

<?php get_footer();
