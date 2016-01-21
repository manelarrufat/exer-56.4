<?php

/**
 * @file
 * Displays a list of nodes unpublished.
 *
 * Available variables:
 *
 */
  //dpm($variables, 'NODES $VARIABLES');
  $nodes = array();
  $nodes = $variables['list']['#items'];
  //dpm($nodes);
?>

<ul>
  <?php foreach ($nodes as $key => $value) : ?>
    <li class="unpublished"><?php print $value; ?></li>
  <?php endforeach; ?>
</ul>