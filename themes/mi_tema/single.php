<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>

		<div class="container my-3">
			<a href="" class="btn btn-info btn-sm my-5">Volver a <i class="fas fa-home"></i></a>

      <?php the_post_thumbnail('detail', array('class'=>'w-100 h-auto rounded')); ?>
      <h2 class="text-center my-3"><?php the_title(); ?></h2>

      <div>
        <?php the_content(); ?>
      </div>

      <p class="text-center">
        <?php 
          if(has_category('perro')) {
            echo '<i class="fas fa-dog"></i>';
          } else {
            echo '<i class="fas fa-cat"></i>';
          };
        ?>
        <a href="#" class="text-info">
          <?php the_category(' '); ?>
        </a>
      </p>

		</div>

	<?php } ?>

<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>

<?php get_footer() ?>