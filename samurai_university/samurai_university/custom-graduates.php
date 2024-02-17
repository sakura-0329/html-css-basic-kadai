<?php
 /*
 Template Name: イベント投稿ページ
 Template Post Type: post
 */
 ?>
<!-- header.php ここから -->
<?php get_header(); ?>
 
 <?php if(have_posts()) :?>
   <?php while (have_posts()) : the_post() ; ?>
   <!-- Home -->

   <div class="home">
      <div class="breadcrumbs_container">
        <div class="image_header">
          <div class="header_info">
            <div>graduates</div>
            <div>卒業生の声</div>
          </div>
        </div>
      </div>
    </div>

 