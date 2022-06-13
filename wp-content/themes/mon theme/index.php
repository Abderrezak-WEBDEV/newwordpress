<?php get_header(); ?>
          <div class="col-6 border">
          <?php
            if(have_posts()){//Si il y a des posts à afficher
            while (have_posts()) {// Tant qu'il y a des posts à afficher
            the_post();//Iteration - on charge le post
            ?>
           <h2>
                <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
                </a>
            </h2>
            <?php
            the_post_thumbnail('medium'); // La miniature
            the_excerpt() ; // L'extrait du post
            }
            }
            ?>
          </div>
<?php get_footer(); ?>