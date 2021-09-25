<?php 
    get_header();
    ?>

<?php
                if(have_posts()){
                    while(have_posts()){
                        the_post();
                        ?> <h1><?php the_title(); ?></h2>
                        <h3><?php the_content(); ?></h3>
                        <?php
                    }
                }
                ?>

<?php 
    get_footer();
    ?>