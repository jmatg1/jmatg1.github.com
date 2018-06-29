<?php

/*
Template Name: For the Press
*/

get_header(); ?>

<?php get_template_part( 'parts/press-sub-header');?>    

<section class="material-for-press">
    <div class="container">
        <div class="press-wrapper">
            <div class="press-title">
                <?= do_shortcode( '[acf field="for-the-press_unit-title_about"]' );?>
            </div>
            <!-- /.press-title -->
            <div class="press-descr">
                <?= do_shortcode( '[acf field="for-the-press_unit-boby_about"]' );?>
            </div>
            <!-- /.press-descr -->
            <div class="press-title">
                <?= do_shortcode( '[acf field="for-the-press_unit-title_logo"]' );?>
            </div>
            <!-- /.press-title -->
            <div class="press-descr press-descr-second">
                <?= do_shortcode( '[acf field="for-the-press_unit-boby_logo"]' );?>
            </div>
            <!-- /.press-descr -->
            <div class="press-logo">
                <ul class="press-logo-list">
                    <li class="press-logo-list-item">
                        <div class="press-logo-list-item-icon"></div><!-- /.press-logo-list-item-icon -->
                        <div class="press-logo-list-item-info">
                            <div class="press-logo-list-item-info-title"><a href="#">Vector variant</a></div>
                            <!-- /.press-logo-list-item-info-title -->
                            <div class="press-logo-list-item-info descr">0,5 мб, PNG</div>
                            <!-- /.press-logo-list-item-info descr -->
                        </div>
                        <!-- /.press-logo-list-item-info -->
                    </li>
                    <!-- /.press-logo-list-item -->
                    <li class="press-logo-list-item">
                        <div class="press-logo-list-item-icon"></div><!-- /.press-logo-list-item-icon -->
                        <div class="press-logo-list-item-info">
                            <div class="press-logo-list-item-info-title"><a href="#">Vector variant</a></div>
                            <!-- /.press-logo-list-item-info-title -->
                            <div class="press-logo-list-item-info descr">0,5 мб, PNG</div>
                        <!-- /.press-logo-list-item-info descr -->
                        </div>
                        <!-- /.press-logo-list-item-info -->
                    </li>
                    <!-- /.press-logo-list-item -->
                </ul>
                <!-- /.press-logo-list -->
            </div>
            <!-- /.press-logo -->
            <?php get_template_part( 'parts/contacts-block');?> 
        </div>
        <!-- /.press-wrapper -->
    </div>
    <!-- /.container -->
</section>
<!-- /.material-for-press -->
<?php get_template_part( 'parts/contact-form-press');?>    
<?php get_template_part( 'parts/nav-footer');?>    
<?php get_footer();
