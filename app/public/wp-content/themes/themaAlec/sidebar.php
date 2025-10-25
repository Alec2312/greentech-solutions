<section id="sidebar">
    <section id="intro">
        <header>
            <h2>GreenTech Solutions</h2>
            <p>Lorem ipsum</p>
        </header>
    </section>

    <section>
        <div class="mini-posts">
            <?php
            $recent_posts = new WP_Query([
                'posts_per_page' => 4,
                'post_status' => 'publish',
                // haalt posts op waarvan de status publish moet zijn en laad er 4 van zien
            ]);
            if ($recent_posts->have_posts()) : // checkt of er posts over zijn voorin de loop
                while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                    <!--herhaald dit stukje om alle posts te laten zien-->
                    <article class="mini-post">
                        <header>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <!--haalt de link voor de pagina van de post op en de titel van de post-->
                            <time class="published"
                                  datetime="<?php the_time('c'); ?>"><?php the_time('F j, Y'); ?></time>
                            <!--verandert de tijd notatie maar de maand, dag en jaartal-->
                        </header>
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>" class="image">
                                <?php the_post_thumbnail('thumbnail'); ?>
                            </a>
                            <!--checkt eerst of er een feature image is voor een post en laat hem daarna zien-->
                        <?php endif; ?>
                    </article>
                <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    </section>

    <section>
        <ul class="posts">
            <?php
            $all_posts = new WP_Query([
                'posts_per_page' => 3,
                'post_status' => 'publish',
                // haalt posts op waarvan de status publish moet zijn en laad er 3 van zien
            ]);
            if ($all_posts->have_posts()) :
                while ($all_posts->have_posts()) : $all_posts->the_post(); ?>
                    <li>
                        <article>
                            <header>
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <time class="published"
                                      datetime="<?php the_time('c'); ?>"><?php the_time('F j, Y'); ?></time>
                                <!--verandert de tijd notatie maar de maand, dag en jaartal-->
                            </header>
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>" class="image">
                                    <?php the_post_thumbnail('medium'); ?>
                                </a>
                                <!--checkt eerst of er een feature image is voor een post en laat hem daarna zien-->
                            <?php endif; ?>
                        </article>
                    </li>
                <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </ul>
    </section>
    <section class="blurb">
        <h2>About</h2>
        <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet
            placerat.</p>
        <ul class="actions">
            <li><a href="#" class="button">Learn More</a></li>
        </ul>
    </section>
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

</section>