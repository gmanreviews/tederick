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
                $randpost = get_posts(
                array(
                    'numberposts' => 1,
                    'category' => $category->cat_ID
                ));
                $randpostid = ($randpost->ID);
        ?>

        <?php echo '<h2 class="newsitem"><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </h2> '; ?>

    <?php endforeach; ?>



</div>