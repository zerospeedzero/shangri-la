<?php get_header()?>
    <?php 
    if(have_posts()){
        the_archive_title('<h2>','</h2>');
        while(have_posts()){
            the_post();
            the_title('<h3>','</h3>');
            the_excerpt();
            echo '<a href="'.get_the_permalink().'">Read the full article</a>';
        }
    }
    ?>
<?php get_footer()?>
