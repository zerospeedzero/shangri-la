<?php get_header() ?>
    <div id="page">
        <?php 
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    the_title('<h1>','</h1>');
                    echo "<div class='main_container'>";
                    the_content();
                    echo "</div>";
                }
            }
        ?>
    </div>
<?php get_footer()?>
