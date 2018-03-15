<div class="bg-faded p-4 my-4">
  <!-- Image Carousel -->
  <div class="flexslider">
    <ul class="slides">
      <?php
      $args = array(
        'post_type' => array('slider'),
        'posts_per_page' => 3,
      );
      $slider = new WP_Query( $args );
      if( $slider->have_posts() ): ?>
        <?php while ( $slider->have_posts() ) : $slider->the_post(); ?>

        <?php $slider_link = get_post_meta(get_the_ID(), 'standard_link_url_field', true); ?>
          <li>
            <a href="<?php echo $slider_link; ?>">
            <?php if (has_post_thumbnail()) {
              the_post_thumbnail();
            }else {
              echo '<img src="'.get_template_directory_uri().'/dist/images/slide-1.jpg" alt="">';
            }
            ?>
            <p class="flex-caption"><?php the_title(); ?></p>
            </a>
          </li>
        <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata(); ?>
    </ul>
  </div>
</div>
<div class="bg-faded p-4 my-4">
  <hr class="divider">
  <h2 class="text-center text-lg text-uppercase my-0">このサイトについて</h2>
  <hr class="divider">
  <img class="w-30 float-left" src="<?php echo get_stylesheet_directory_uri() ?>/dist/images/top-img.png" alt="サイトのイメージ画像">
  <p>このサイトはワードプレスの学習のためのサイトです。このサイトはワードプレスの学習のためのサイトです。このサイトはワードプレスの学習のためのサイトです。このサイトはワードプレスの学習のためのサイトです。このサイトはワードプレスの学習のためのサイトです。このサイトはワードプレスの学習のためのサイトです。このサイトはワードプレスの学習のためのサイトです。このサイトはワードプレスの学習のためのサイトです。</p>
  <div class="clearfix"></div>
</div>