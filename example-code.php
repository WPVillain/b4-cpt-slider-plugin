<div class="container-fluid b4-slider">
    <!-- Carousel -->
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin: auto;">
      <!-- Indicators -->
      <?php $the_slides_query_ol = new WP_Query('post_type=slider&showposts=3'); ?>
          <?php if ( $the_slides_query_ol->have_posts() ) : ?>
      <ol class="carousel-indicators">
        <?php while ( $the_slides_query_ol->have_posts() ) : $the_slides_query_ol->the_post(); ?>
          <li data-target="#carousel-example-generic" data-slide-to="<?php echo $the_slides_query_ol->current_post ?>" class="<?php if( $the_slides_query_ol->current_post == 0 ) echo 'active' ?>"></li>
          <?php wp_reset_postdata(); ?>
          <?php endwhile; ?>
      </ol>
      <?php endif; ?>
      <!-- Wrapper for slides -->
      <?php $the_slides_query = new WP_Query('post_type=slider&showposts=3'); ?>
          <?php if ( $the_slides_query->have_posts() ) : ?>
      <div class="carousel-inner" role="listbox">
        <?php while ( $the_slides_query->have_posts() ) : $the_slides_query->the_post(); ?>
          <div class="carousel-item <?php if( $the_slides_query->current_post == 0 ) echo 'active' ?>">
            <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']); //the_post_thumbnail( 'full' ); ?>
                <?php endif; ?>
                  <!-- Static Header -->
                    <div class="header-text carousel-caption hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                                <?php if (get_the_title()) {?>
                                <span><?php the_title(); ?></span>
                                <?php } ?>
                            </h2>
                            <br>
                            <h3>
                              <?php if (get_the_content()) {?>
                              <span><?php the_content(); ?></span>
                              <?php } ?>
                            </h3>
                        </div> <!-- / text center -->
                    </div><!-- /header-text -->
          </div><!-- end item -->
          <?php wp_reset_postdata(); ?>
            <?php endwhile; ?>
      </div> <!-- end carousel inner -->
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div><!-- /carousel -->
  </div><!-- end row -->
  <?php endif; ?>
