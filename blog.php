<?php
// Template Name: Contato
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>
    <section class="container blog">
        <div class="blog-list">
            <img src="https://image.freepik.com/free-photo/business-executives-discussing-with-their-colleagues-on-whiteboa_1170-1837.jpg" alt="" class="img-responsive">        
            <div class="blog-list-content">
                <div class="title">
                    <a href="#">
                        Quantifying the impact of the Twitter fake accounts purge - a technical analysis
                    </a>
                </div>
                <div class="blog-footer">
                    <b> Blog post</b><span>Aug 2018</span>
                </div>
                <label for="" class="tag-title">Tags</label>
                <ul class="tags">
                    <li class="tag">Energia renovável</li>
                    <li class="tag">Painel solar</li>
                    <li class="tag">Economia de energia</li>
                    <li class="tag">Placa solar</li>
                </ul>
            </div>
        </div>

        <div class="blog-list">
            <img src="https://image.freepik.com/free-photo/business-executives-discussing-with-their-colleagues-on-whiteboa_1170-1837.jpg" alt="" class="img-responsive">        
            <div class="blog-list-content">
                <div class="title">
                    <a href="#">
                        Um estudo de caso, manutencao de bla bla bla
                    </a>
                </div>
                <div class="blog-footer">
                    <b> Blog post</b><span>Aug 2018</span>
                </div>
                <label for="" class="tag-title">Tags</label>
                <ul class="tags">
                    <li class="tag">Energia renovável</li>
                    <li class="tag">Painel solar</li>
                    <li class="tag">Economia de energia</li>
                    <li class="tag">Placa solar</li>
                    <li class="tag">Painel solar</li>
                    <li class="tag">Economia de energia</li>
                    <li class="tag">Placa solar</li>
                </ul>
            </div>
        </div>

        <div class="blog-list">
            <img src="https://image.freepik.com/free-photo/business-executives-discussing-with-their-colleagues-on-whiteboa_1170-1837.jpg" alt="" class="img-responsive">        
            <div class="blog-list-content">
                <div class="title">
                    <a href="#">
                        Analise tecnica
                    </a>
                </div>
                <div class="blog-footer">
                    <b> Blog post</b><span>Aug 2018</span>
                </div>
                <label for="" class="tag-title">Tags</label>
                <ul class="tags">
                    <li class="tag">Energia renovável</li>
                    <li class="tag">Painel solar</li>
                </ul>
            </div>
        </div>
    </section>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>

