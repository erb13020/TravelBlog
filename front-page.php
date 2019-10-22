<?php
get_header();
?>

<div class="jumbotron-front" >
  <div class="banner-front">
  <h1>Olivia's Travels</h1>
  <p>Student, Future Nurse, & Adventurer</p>
  <p>
    <a class="btn btn-primary btn-front" href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" role="button">My Travel Blog</a>
  </p>
  </div>
</div>

<?php
get_footer();
?>
