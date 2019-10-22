<?php

get_header();

while(have_posts()) {
	the_post(); ?>

<div class="container">
  <div class="row">
    <div id="post-navigation" class="mx-auto">
      <div class="metabox">
        <a href="<?php echo esc_url(get_permalink(get_adjacent_post(false,'',false))) ?>">Previous Post</a>
      </div>
      <div class="metabox">
        <a href="<?php echo esc_url(site_url('/blog')) ?>"> Blog Home</a>
      </div>
      <div class="metabox">
        <a href="<?php echo esc_url(get_permalink(get_adjacent_post(false,'',true))) ?>">Next Post</a>
      </div>
    </div>
  </div>
</div>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php the_content(); ?>
      </div>
    </div>
  </div>

<div class="container">
  <div class="row">
    <div id="post-navigation" class="mx-auto">
      <div class="metabox">
        <a href="<?php echo esc_url(get_permalink(get_adjacent_post(false,'',false))) ?>">Previous Post</a>
      </div>
      <div class="metabox">
        <a href="<?php echo esc_url(site_url('/blog')) ?>"> Blog Home</a>
      </div>
      <div class="metabox">
        <a href="<?php echo esc_url(get_permalink(get_adjacent_post(false,'',true))) ?>">Next Post</a>
      </div>
    </div>
  </div>
</div>

	<?php
}

get_footer();

?>
