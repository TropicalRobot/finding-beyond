<?php

$pagOptions = isset($options) && is_array($options) ? $options : array();
$maxPages   = isset($options['total']) ? $options['total'] : 0;

?>

<div class="blog-archive-pagination">
    <div class="pagination">
        <?php echo paginate_links(array_merge(array(
            'total' => $total,
            'end_size'  => 1,
            'mid_size'  => 4,
            'prev_text' => 'Newer',
            'next_text' => 'Older'
        ), $pagOptions)); ?>
    </div>

</div>
