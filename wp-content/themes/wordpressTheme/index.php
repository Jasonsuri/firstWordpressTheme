<?php include('header.php'); ?>

<body>
<div class="container">

    <header>
<h1><i class="fas fa-video"></i> De nieuwste films van nu.</h1>
    </header>
    <nav>
        <li><?php wp_nav_menu(); ?> <!--Hier moet het menu inkomen in WP--></li>
    </nav>
    <div class="container2">
        <main>
            <?php $the_query = new WP_Query('posts_per_page=5'); ?>



            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>








                <?php

            endwhile;

            wp_reset_postdata();

            ?>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_title( '<h2>', '</h2>' );// puts the title in h3 tags

                the_content(); // adds the content
            endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
        </main>
<?php include ('aside.php'); ?>
<!--        --><?php /*include('aside.php'); */?>
    <?php include('footer.php'); ?>

    <?php wp_head(); ?>

</div>
    <div class="login">
        <p><i class="fas fa-power-off"></i> <?php wp_loginout(); ?></p>
    </div>

</body>
</html>