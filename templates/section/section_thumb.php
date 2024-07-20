<div class="list-films film-new">
    <h2 class="title-box">
        <a title="<?= $title; ?>" rel="nofollow" href="<?= $slug; ?>" class="tab active"><?= $title; ?></a>
    </h2>
    <ul class="film-moi tab-content">
        <?php $key =0; while ($query->have_posts()) : $query->the_post();
            $xClass = 'item';
            if ($key === 0 || $key % 4 === 0) {
                $xClass .= ' no-margin-left';
            }
            include THEMETEMPLADE.'/section/section_thumb_item.php';
        endwhile; ?>
    </ul>
</div>
