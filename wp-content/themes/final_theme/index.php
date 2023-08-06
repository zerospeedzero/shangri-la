<?php get_header() ?>
    <?php 
    echo "<h1>Shangri-La News</h1>";
    echo "<div class='head_filter'>";
    echo "<div class='month_filter'>";
    echo "<h3>Posts by month</h3><ul>";
    wp_get_archives(['show_post_count' => true]);
    echo "</ul></div>";
    echo "<div class='author_filter'>";
    echo "<h3>Posts by category</h3><ul>";
    wp_list_categories(['show_count' => true, 'title_li' => '']);
    echo "</ul></div>";
    echo "</div>";
    echo "<div class='news'>";
    if(have_posts()){
        while(have_posts()){
            the_post();
            the_title('<a href="'.get_the_permalink().'"><h2>','</h2></a>');
            echo '<a href="'.get_the_permalink(). '">';
            the_post_thumbnail('thumbnail');
            echo '</a>';
            the_excerpt();
            echo '<div class="author">';
            echo get_avatar( get_the_author_meta( 'ID' ), 48 );
            echo "<div class='author_post'>";
            echo '<a href="./../?author=' . get_the_author_meta( 'ID' ), '">By ';
            the_author();
            echo "</a>";
            echo the_date();
            echo "</div>";
            echo "</div>";
        }
    }
    echo "</div>";
    ?>
<?php get_footer()?>
