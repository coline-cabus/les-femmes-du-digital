
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="manifest" href="<?php echo get_site_url(); ?>/manifest.json"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <?php wp_head(); ?>

    <style>
        .navbar.fixed-top {
            transition: background-color 0.3s ease-in-out;
        }

        .navbar.fixed-top.scrolled {
            background-color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            height: 100px;
        }

        @media (max-width: 768px) {
            .navbar.fixed-top {
                background-color: white;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                height: 100px;
            }
        }
    </style>

</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header id="header">

    <nav class="navbar navbar-expand-md bg-white fixed-top py-3" role="navigation">

        <div id="navbar" class="collapse navbar-collapse">
            <div class="container">
                <div class="row">
                    <div class="col-4 ms-3">
                        <a class="navbar-brand position-absolute top-50 " href="#">Les femmes du digital</a>
                    </div>
                    <div class="col-8 position-absolute top-50">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'depth' => 2,
                            'container' => 'div',
                            'container_class' => 'd-flex flex-grow-1 justify-content-end',
                            'container_id' => '',
                            'menu_class' => 'nav navbar-nav',
                            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                            'walker' => new WP_Bootstrap_Navwalker()
                        ));
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </nav>

</header>

<script>

    window.addEventListener('scroll', function () {
        let navbar = document.querySelector('.navbar.fixed-top');
        let scrollPosition = window.scrollY;
        if (scrollPosition > 0) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>

<?php wp_footer(); ?>

</body>
</html>