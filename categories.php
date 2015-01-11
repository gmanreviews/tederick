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
    /*
        $category_ids = get_all_category_ids();
        foreach($category_ids as $cat_id) :

            $randpost = get_posts(
            array(
                'numberposts' => 1,
                'category' => array( get_query_var($category->id)),
            ));
            $randpostid = ($randpost->ID);



            $cat_name = get_cat_name($cat_id);
            echo $cat_id . ': ' . $cat_name;

    ?>
    <?php endforeach; */?>


    <?php
        $args=array(
            'orderby' => 'name',
            'order' => 'ASC'
        );
        $categories=get_categories($args);
        foreach($categories as $category) :
    ?>

    <?php $randpost = get_posts(
        array(
            'numberposts' => 1,
            'category' => $category->cat_ID
        ));
    $randpostid = ($randpost->ID);
    ?>

    <?php echo '<h2 class="newsitem"><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </h2> '; ?>
    <?php echo '<p>'. $category->count . ' nummer</p>'; ?>

    <strong>Stad:</strong>
    <?php $city = get_post_meta($randpostid, 'city', true); ?>
    <?php echo $city ?>

    <?php endforeach; ?>



</div>