<?php get_header(); ?>
          <div class="col-6 border">
          <?php
            if(have_posts()){//Si il y a des posts à afficher
            while (have_posts()) {// Tant qu'il y a des posts à afficher
            the_post();//Iteration - on charge le post
            ?>
            <h2><?php the_title() ?></h2> <!-- le Titre du post -->
            <?php
            the_post_thumbnail('medium'); // La miniature
            the_content() ; // Le contenu du post
            }
            }
            ?>
          </div>
<?php get_footer(); ?>