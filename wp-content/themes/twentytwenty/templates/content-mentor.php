<?php  
/**
 * le template pour afficher 'content-mentor'
 * 
 * @package wordpress
 * @subpackage twenty_twenty
 * @since Twenty Twenty 1.0
 */

 // verifier l'activation de l'ACF
 if(!function_exists('get-field')) return;
 ?>
  <h1>Réferences Produits</h1>
 <ul>
     <li> Réferences : <?php the_field('reference') ?></li>
     <li>Noms : <?php the_field('nom') ?></li>
     <li>Brands : <?php the_field('Bbrand') ?></li>
     <li>status : <?php the_field('statu') ?></li>
     <li>Autres : <?php the_field('autre') ?></li>
 </ul>