<?php get_header() ?>
<div id="single">
    <article>
        <?php 
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    the_title('<h2>','</h2>');
                    echo "<div class='post_authoring'>";
                    echo "<figure class='post_image'>" . get_the_post_thumbnail(get_the_ID(), 'thumbnail') . "</figure>";
                    echo "<div>";
                    echo '<span class="post_author" >Posted by <strong>' . get_the_author() . '</strong> on ' .  '</span>';
                    the_date();
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='post_content'>";
                    the_content();
                    echo "</div>";
                }
            }
            comments_template();
        ?>
    </article>
</div>
<?php get_footer()?>
