<?php
get_header();
?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container blog">


    
    <article class=" blog-list">
        <img src="<?php the_field('imagem_postagem'); ?>">        
            <div class="blog-list-content">
                <div class="title">
                    <a href="<?php the_permalink(); ?>">
                       <?php the_title() ?>
                    </a>
                </div>
                <div class="blog-footer">
                    <b> Blog post</b><span><?php the_field('data_postagem'); ?></span>
                </div>
                <label for="" class="tag-title">Tags</label>
                <ul class="tags">
                    <?php if(have_rows('tags_postagem')): while(have_rows('tags_postagem')) : the_row(); ?>
                    <li class="tag"><?php the_sub_field('tags'); ?></li>
                    <?php endwhile; else : endif; ?>
                   </ul>
            </div>
        </div>
        
    </article>

<?php endwhile; ?>

    <div class="nav-blog grid-16">
        <?php next_posts_link( '← Posts Antigos' ); ?>
        <?php previous_posts_link( 'Posts Novos →' ); ?>
    </div>

<?php else: endif; ?>

</div>



<?php get_footer(); ?>