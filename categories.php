<?php
/**
 * Created by PhpStorm.
 * User: gmanreviews
 * Date: 11/01/2015
 * Time: 05:49 PM
 */
?>

<div id="categories">

    <?php
        $args=array(
            'orderby' => 'name',
            'order' => 'ASC'
        );
        $categories=get_categories($args);
        foreach($categories as $category) :
    ?>

        <?php
                $args = array(
                    'posts_per_page'   => 1,
                    'category'         => $category->cat_ID,
                    'orderby'          => 'post_date',
                    'order'            => 'DESC',
                );

                $posts_array = get_posts( $args );
        ?>
                <div class="cube">
        <?php
                if ($posts_array) :
                    foreach ($posts_array as $post) :
        ?>
                        <div class="writing">
                            <?php echo '<h2 class="newsitem"><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </h2> '; ?>
                            <div class="category-title"><?php $category->name; ?></div>
                            <div class="category-slug"><?php $category->slug ?></div>
                        </div>
                        <div class="thumbnail"> <?php echo the_post_thumbnail(); ?> </div>
        <?php       endforeach;
                endif;
                /*
                $randpost = get_posts(
                array(
                    'numberposts' => 1,
                    'category' => $category->cat_ID
                ));
                $randpostid = ($randpost->ID);
                */
        ?>
                </div>



    <?php endforeach; ?>



</div>