<?php

/*
Template Name: FAQ
*/

get_header(); ?>
<style>
    #masthead{
        background-color: #191d39;
    }</style>

    <section class="faq">
        <div class="container">
            <div class="wrapper-faq">
                <h1 class="faq-title">FAQ</h1>
                <div class="faq-descr">
                </div>
                <?php while( have_posts() ) : the_post();
                    $more = 1; // отображаем полностью всё содержимое поста
                    the_content(); // выводим контент
                endwhile;  ?>

                <!-- /.wrapper -->
            </div>
            <!-- /.wrapper -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.news -->
<?php get_footer();?>

