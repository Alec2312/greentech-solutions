<?php get_header(); ?>

<div id="wrapper">
    <div id="main">

        <h1>Zoekresultaten voor: "<?php echo esc_html(get_search_query()); ?>"</h1>
        <!--haalt de search-query op vanuit de header die in WordPress standaard s gebruikt-->

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <!--laadt verder alle posts weer in, maar dan gefilterd op de search query-->
                <article class="post">
                    <header>
                        <div class="title">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <!--dit laadt de link in om naar de post zelf te gaan en haalt de titel van de post op-->
                            <p><?php echo get_the_excerpt(); ?></p>
                            <!--laat de excerpt zien wat de tekst in de post is-->
                        </div>
                        <div class="meta">
                            <time class="published"
                                  datetime="<?php the_time('c'); ?>"><?php the_time('F j, Y'); ?></time>
                            <!--verandert de tijd notatie maar de maand, dag en jaartal-->
                            <a href="#" class="author">
                                <span class="name"><?php the_author(); ?></span>
                                <?php echo get_avatar(get_the_author_meta()); ?>
                            </a>
                            <!--haalt de naam en de avatar van de author op-->
                        </div>
                    </header>

                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>" class="image featured">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                        <!--checkt eerst of er een feature image is voor een post en laat hem daarna zien-->
                    <?php endif; ?>

                    <footer>
                        <ul class="actions">
                            <li><a href="<?php the_permalink(); ?>" class="button large">Lees verder</a></li>
                        </ul>
                        <!--haalt een link op om naar de pagina van de post zelf te gaan-->
                    </footer>
                </article>
            <?php endwhile; ?>

        <?php endif; ?>
    </div>

    <?php get_sidebar(); ?>
    <!--haalt de sidebar.php op-->
</div>

