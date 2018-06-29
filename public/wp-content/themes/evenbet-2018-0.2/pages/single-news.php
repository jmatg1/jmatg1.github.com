<?php

/*
Template Name: Single News
*/

get_header(); ?>

<?php
//вывод через шорткод
   // echo do_shortcode('[pods id="'. $post->ID .'" name="news" template="Template for the single-news" ]');
//вывод через php
$pods = pods('news', $post->ID);
?>

<style>
    #masthead{
        background-color: #191d39;
    }</style>

<section class="single-news">

    <div class="container">
        <div class="wrapper-single-news">
            <div class="single-news-block">
                <div class="single-news-title"><?= $pods->display('title'); ?></div>
                <div class="single-news-image"><?= $pods->display('news-image._img.large');?></div>
                <span class="single-news-editor"><?= $pods->display('content'); ?></span>
            </div>
            <div class="single-news-date">Date: <?= $pods->display('post_date'); ?></div>
        </div>

    </div>
    <!-- /.container -->
</section>



<?php get_template_part( 'parts/nav-footer');?>

<?php get_footer();
