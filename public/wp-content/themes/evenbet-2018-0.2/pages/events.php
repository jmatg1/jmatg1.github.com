<?php

/*
Template Name: Events
*/

get_header(); ?>

<?php get_template_part( 'parts/events-subheader');?>

<section class="events">
    <div class="container">            
        <div class="wrapper-events">
            <div class="events-descr">
                <?= do_shortcode( '[acf field="events_unit-boby_events"]' );?>                
            </div>
            <ul class="events-block">				
                <?= do_shortcode( '[pods name="event" where=\'`date-to`.`meta_value`>="'.date("Y-m-d").'"\' orderby="date-to DESC" template="Template for the events"]' );?>        <!-- /** limit="4"*/ -->
            </ul>                              
            <!-- /.wrapper -->
        </div>
        <!-- /.wrapper -->
    </div>
    <!-- /.container -->
</section>
<!-- /.news -->
<?php get_template_part( 'parts/nav-footer');?>

<?php get_footer();
