<?php get_header(); ?>

<div id="wrapper">

    <div id="main">
        <?php
        $all_posts = new WP_Query([
            'posts_per_page' => 3,
            'post_status' => 'publish',
        ]);
        // haalt posts op waarvan de status publish moet zijn en laad er 3 van zien

        if ($all_posts->have_posts()) : // checkt of er posts over zijn voorin de loop
            while ($all_posts->have_posts()) : $all_posts->the_post(); ?>
                <!--herhaald dit stukje om alle posts te laten zien-->
                <article class="post">
                    <header>
                        <div class="title">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <!--haalt de link voor de pagina van de post op en de titel van de post-->
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
                            <?php the_post_thumbnail('large', ['class' => 'image']); ?>
                        </a>
                        <!--checkt eerst of er een feature image is voor een post en laat hem daarna zien-->
                    <?php endif; ?>
                    <p><?php the_content(); ?></p>
                    <!--laat alles zien wat er in de post zit-->
                    <footer>
                        <ul class="actions">
                            <li><a href="<?php the_permalink(); ?>" class="button large">Continue Reading</a></li>
                        </ul>
                        <!--haalt een link op om naar de pagina van de post zelf te gaan-->
                        <ul class="stats">
                            <?php if (has_category()) : ?>
                                <li><?php the_category(', '); ?></li>
                            <?php endif; ?>
                            <!--haalt de categories op van de post en als er meerdere zijn worden ze gescheiden met een komma-->
                            <li><a href="#" class="icon solid fa-heart">28</a></li>
                            <li><a href="#" class="icon solid fa-comment">128</a></li>
                        </ul>
                    </footer>
                </article>
            <?php endwhile;
            wp_reset_postdata();
        endif; ?>

        <ul class="actions pagination">
            <li>
                <?php
                $prev_link = get_previous_posts_link('Previous Page');
                // haalt de link op naar de vorige pagina met posts


                echo $prev_link
                    ? str_replace('<a', '<a class="button large previous"', $prev_link)
                    : '<span class="disabled button large previous">Previous Page</span>';
                ?>
                <!--checkt of er een vorige pagina bestaat als er een bestaat, wordt de knop klikbaar gemaakt-->
                <!--anders wordt een uitgeschakelde knop zichtbaar gemaakt-->
            </li>
            <li>
                <?php
                $next_link = get_next_posts_link('Next Page', $all_posts->max_num_pages);
                // haalt de link op naar de volgende pagina met posts


                echo $next_link
                    ? str_replace('<a', '<a class="button large next"', $next_link)
                    : '<span class="disabled button large next">Next Page</span>';
                ?>
                <!--checkt of er een volgende pagina bestaat; als dat zo is wordt de knop klikbaar gemaakt-->
                <!--anders wordt een uitgeschakelde (disabled) knop getoond-->
            </li>
        </ul>

    </div>

    <?php get_sidebar(); ?>
    <?php wp_footer(); ?>
    <!--haalt de sidebar.php op en laadt de wordpress footer in zodat dingen zoals de admin header werken-->
</div>