<footer>
    <div id="footer-1">

        <?php
        if(is_active_sidebar('footer-1')){
            dynamic_sidebar('footer-1');
        }
        ?>
    </div>

    <div id="footer-2">

        <?php
        if(is_active_sidebar('footer-2')){
            dynamic_sidebar('footer-2');
        }
        ?>
    </div>

    <div id="footer-3">

        <?php
        if(is_active_sidebar('footer-3')){
            dynamic_sidebar('footer-3');
        }
        ?>

    </div>

    <div id="footer-4">

        <?php
        if(is_active_sidebar('footer-4')){
            dynamic_sidebar('footer-4');
        }
        ?>


    </div>

</footer>

<?php wp_footer()?>