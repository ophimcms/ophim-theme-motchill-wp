<div class="most-view block">
    <div class="caption">
        <span class="uppercase"><?= $title; ?></span>
    </div>
    <div class="clear"></div>
    <ul class="list-film">
        <?php $loop =0; while ($query->have_posts()) : $query->the_post(); $loop++; ?>
        <li class="item">
            <span class="number-rank absolute"><?= $loop?></span>
            <span>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </span>
            <div class="count_view"><?= op_get_post_view() ?>lượt xem</div>
        </li>
        <?php endwhile; ?>
    </ul>
</div>
