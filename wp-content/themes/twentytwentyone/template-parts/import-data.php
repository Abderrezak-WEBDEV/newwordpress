<?php

//verifier l'activation du ACF
if(!function_exists('get_field')) return;

?>

<h1><?php the_field('titre');?></h1>
<ul>
  <li><strong>Réference:</strong><?php the_field('reference');?></li>
  <li><strong>Name:</strong><?php the_field('name');?></li>
  <li><strong>Brand:</strong><?php the_field('brand');?></li>
  <li><strong>Status:</strong><?php the_field('status');?></li>
  <li><strong>Autre:</strong><?php the_field('autre');?></li>
</ul>