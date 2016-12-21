<?php
$pagOptions = isset($options) && is_array($options) ? $options : array();
?>

<div class="pagination">
    <?php echo paginate_links(array_merge(array(
        'end_size'  => 1,
        'mid_size'  => 4,
        'prev_text' => 'Newer',
        'next_text' => 'Older'
    ), $pagOptions)); ?>
</div>
