<?php

/*
Template Name: Single Article
Template Post Type: post
*/

get_header(); ?>

<?php
//вывод через шорткод
   // echo do_shortcode('[pods id="'. $post->ID .'" name="articles" template="Template for the single-articles" ]');
//вывод через php
$pods = pods('articles', $post->ID);
?>

<style>
    #masthead{
        background-color: #191d39;
    }</style>

<section class="single-articles">

    <div class="container">
        <div class="wrapper-single-articles">
            <div class="single-articles-block">
                <div class="single-article-title"><h1><?= $pods->display('title'); ?></h1></div>
                <div class="single-article-image"><img src="<?= $pods->display('article_image');?>" alt="Image {@title}"/></div>
                <span class="single-article-editor"><?= $pods->display('content'); ?></span>
            </div>
            <div class="single-article-date">Date: <?= $pods->display('article_date'); ?></div>
        </div>

    </div>
    <!-- /.container -->
</section>



<?php get_template_part( 'parts/nav-footer');?>

<?php get_footer(); ?>