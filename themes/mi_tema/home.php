<?php get_header() ?>

<div class="container my-5">
    <h1 class="text-center display-2 my-3"><i class="fas fa-paw"></i> Mascotas <i class="fas fa-paw"></i></h1>

    <div class="card-columns">
      
      <?php
        $arg = array(
          'post_type'		 => 'post',
          'posts_per_page' => -1,
          'orderby' => 'rand'
        );
      
        $get_arg = new WP_Query( $arg );
      
        while ( $get_arg->have_posts() ) {
          $get_arg->the_post();
        ?>
      
        <div class="card p-2 mb-3">
          <div class="row no-gutters">
            <div class="col-md-4 text-center">
              <?php the_post_thumbnail('square', array('class' => 'card-img w-100 h-auto rounded-circle')); ?>
              <a href="<?php the_permalink(); ?>" class="btn btn-info btn-sm my-3">¡Conóceme!</a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h3 class="card-title"><?php the_title() ?></h3>
                <p class="card-text"><?php the_excerpt(); ?></p>
                <p class="card-text">
                  <small class="text-muted">
                    <?php 
                      if(has_category('perro')) {
                        echo '<i class="fas fa-dog"></i>';
                      } else {
                        echo '<i class="fas fa-cat"></i>';
                      };
                    ?>
                    <a href="#" class="text-info"><?php the_category(' '); ?></a>
                  </small>
                </p>
              </div>
            </div>
          </div>
        </div>
      
        <?php } wp_reset_postdata(); ?>

    </div>
  </div>

<?php get_footer() ?>