<div class="review-block">
    <article class="review-block-item">
        <h3 class="review-block-item__head"><?php the_title(); ?></h3>
        <div class="review-block-item__img">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="review-block-item__content">
            <?php the_content(); ?>
        </div>
    </article>
</div>