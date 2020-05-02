<?php
// Template Name: Contato
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>
    <section class="container blog-post">
        <div class="post">
            <img class="post-image" src="https://image.freepik.com/free-photo/business-executives-discussing-with-their-colleagues-on-whiteboa_1170-1837.jpg" alt="">
            <div>
                <h1 class="post-title">Quantifying the impact of the Twitter fake accounts purge - a technical analysis.</h1>
                <div class="post-description">
                    <p class="post-autor">Escrito por: Jose Lucas Nascimento</p>
                    <ul class="tags post-tags">
                        <li class="tag post-tag">Energia renovável</li>
                        <li class="tag post-tag">Painel solar</li>
                        <li class="tag post-tag">Economia de energia</li>
                        <li class="tag post-tag">Placa solar</li>
                        <li class="tag post-tag">Painel solar</li>
                        <li class="tag post-tag">Economia de energia</li>
                        <li class="tag post-tag">Placa solar</li>
                    </ul>
                </div>
                
                
            </div>
        </div>
    </section>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>

