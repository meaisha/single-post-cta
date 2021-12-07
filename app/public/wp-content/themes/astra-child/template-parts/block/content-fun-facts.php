<?php
// Block Name: Fun Facts

$id = 'fun-facts-' . $block['id']; 
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<div class="fun-facts" <?php echo $align_class; ?> id="<?php echo $id; ?>">
  <h4><?php the_field['title']; ?></h4>
  <div class="fact-description"><?php the_field['description']; ?></div>
</div>