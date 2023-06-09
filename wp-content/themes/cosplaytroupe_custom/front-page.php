<?php get_header() ?>

<?php if (get_field("banner_show")) { ?>
    <header class="advert-banner" style="background-image: <?php echo get_field("banner_background-image"); ?>">
        <h1><?php echo get_field("banner_heading"); ?></h1>
        <p><?php echo get_field("banner_body"); ?></p>
    </header>
<?php } ?>

<main>
    <div class="recent-posts">
        <?php 
            $homepagePostList = new WP_Query(array(
                'posts_per_page' => 5,
                'post_type' => 'post'
            ));
            while($homepagePostList->have_posts()) {
                $homepagePostList->the_post();
        ?>
        
        <?php } ?>
    </div>
    <div class="important-links">

    </div>
</main>