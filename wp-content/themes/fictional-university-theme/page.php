<?php

while(have_posts(  )){
    the_post(  ); ?>
    this is page
    <h2><?php the_title();?></h2>
    <?php the_content(); ?>
<?php
}
?>