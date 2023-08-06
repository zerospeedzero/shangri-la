<?php get_header() ?>
    <h1>Search results for &ldquo;<?php echo $_GET['s']?>&rdquo; </h1>
    <?php 
        if(have_posts()){
            while(have_posts()){
                the_post();
                the_title('<h2>','</h2>');
                the_excerpt();
                echo '<a href="'.get_the_permalink().'">Read the full article</a>';
            }
        }else{
            echo "<p>No results found for the above search query</p>";
        }
    ?>
<?php get_footer()?>