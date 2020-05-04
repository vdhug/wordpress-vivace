<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="container blog-post">
        <div class="post">
            <img class="post-image" src="<?php the_field('imagem_postagem'); ?>" alt="<?php the_title(); ?>">
            <div>
                <h1 class="post-title"><?php the_title(); ?></h1>
                <div class="post-description">
                    <p class="post-autor">Escrito por: <?php the_field('autor_postagem'); ?></p>
                    <ul class="tags post-tags">
                    	<?php if(have_rows('tags_postagem')): while(have_rows('tags_postagem')) : the_row(); ?>
                        <li class="tag post-tag"><?php the_sub_field('tags'); ?></li>
                        <?php endwhile; else : endif; ?>
                    </ul>
                </div>

                <div class="texto"> 
                    <?php the_field('texto_postagem'); ?>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; else: ?>
    <p><?php _e('Desculpa, nenhum post corresponde aos seus critérios.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>