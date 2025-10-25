<!DOCTYPE html>
<head>
    <?php wp_head(); ?>
    <title>GreenTech Solutions</title>
</head>
<body <?php body_class(); ?> >


<header id="header">
    <?php
    $logo = get_custom_logo();
    // dit is zodat het logo wordt geplaatst binnen de juiste class logo en daardoor dus de goede styling heeft
    $logo = str_replace('<img', '<img class="logo"', $logo);
    echo $logo;
    ?>

    <nav class="links">
        <ul>
            <?php
            // dit laadt alle pagina's in als een link om naar de pagina te gaan
            $pages = get_pages();
            foreach ($pages as $page) {
                $link = get_page_link($page);
                echo '<li><a href="' . ($link) . '">' . ($page->post_title) . '</a></li>';
            }
            ?>
        </ul>
    </nav>

    <nav class="main">
        <ul>
            <li class="search">
                <form class="search" method="get">
                    <!--wordpress zelf gebruikt s automatisch om te zoeken naar posts/pagina's-->
                    <input type="text" name="s" placeholder="Search"/>
                </form>
            </li>

            <li class="menu">
                <!--gebruikt de javascript die meekwam met de standaard html website-->
                <a class="fa-bars" href="#menu">Menu</a>
            </li>
        </ul>
    </nav>
</header>

<nav id="menu">

    <section>
        <form class="search" method="get">
            <input type="text" name="s" placeholder="Search"/>
        </form>
    </section>

    <section>
        <ul class="links">
            <!--haalt het menu op dia via de customizer is opgezet-->
            <?php wp_nav_menu(); ?>
        </ul>
    </section>

    <section>
        <!--voert opnieuw de link #menu uit waardoor hij weer afsluit-->
        <ul class="actions stacked">
            <li><a href="#menu" class="button large fit">Sluiten</a></li>
        </ul>
    </section>

</nav>
</body>