<?php get_header(); ?>

<div id="wrapper">


    <!-- Main -->
    <div id="main">

        <article class="post single">
            <header>
                <div class="title">
                    <h2><?php the_title(); ?></h2>
                    <p><?php echo get_the_excerpt(); ?></p>
                    <!--laat de titel van de post en de excerpt zien wat de tekst in de post is-->
                </div>
                <div class="meta">
                    <time class="published" datetime="<?php the_time('c'); ?>"><?php the_time('F j, Y'); ?></time>
                    <!--verandert de tijd notatie maar de maand, dag en jaartal-->
                    <a href="#" class="author">
                        <span class="name"><?php the_author(); ?></span>
                        <?php echo get_avatar(get_the_author_meta()); ?>
                        <!--haalt de naam en de avatar van de author op-->
                    </a>
                </div>
            </header>

            <?php if (has_post_thumbnail()) : ?>
                <span class="image featured">
                        <?php the_post_thumbnail('full', ['class' => 'image']); ?>
                    </span>
                <!--checkt eerst of er een feature image is voor een post en laat hem daarna zien-->
            <?php endif; ?>

            <p><?php the_content(); ?></p>
            <!--laat alles zien wat er in de post zit-->

            <footer>
                <ul class="stats">
                    <li><a href="#">General</a></li>
                    <li><a href="#" class="icon solid fa-heart">28</a></li>
                    <li><a href="#" class="icon solid fa-comment">128</a></li>
                </ul>
            </footer>
        </article>
    </div>

    <!-- Footer -->
    <section id="footer">
        <ul class="icons">
            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
            <li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
        </ul>
        <p class="copyright">&copy; Untitled.</p>
    </section>

</div>

<?php get_footer(); ?>
<!--laadt de wordpress footer in zodat dingen zoals de admin header werken-->