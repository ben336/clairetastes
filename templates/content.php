<?php global $postIsFirst; ?>

<article <?php post_class(); ?>>
  <div class="wrapper <?php if($postIsFirst==1) { echo 'firstPost"'; } ?>">
    <div class="post-thumbnail">
    <?php 
      if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
        if($postIsFirst==1)
        {
          the_post_thumbnail("large");
        }
        else
        {
          the_post_thumbnail("thumbnail");
        }
      } 
    ?>
    </div>
    <header class="postHeader">
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
   <!-- <div class="entry-summary">
      <?php //the_excerpt(); ?>
    </div> -->
  </div>
</article>
