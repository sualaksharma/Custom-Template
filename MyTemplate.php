<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>


<?php
/*Template Name: My Template*/

//display custom post type posts on a page

get_header();

  $args = array( 'post_type' => 'wpll_movies', 'posts_per_page' => 10 );
    $loop = new WP_Query( $args );
    ?>
    <div class="row">
     <?php    
    while ( $loop->have_posts() ) : $loop->the_post();
    ?>
     <div class="column">
    <div class="card">
      <h3><?php echo the_title();?></h3>
      <?php echo get_the_post_thumbnail( null, 'post-thumbnail');?>
      
    </div>
  </div>
    <?php endwhile; ?>
</div>

<?php echo get_post_meta(1, 'test_field', true);?>
<h2><?php the_field('test_field'); ?></h2>

<?php get_footer(); ?>

