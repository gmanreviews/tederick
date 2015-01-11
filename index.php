<?php
/**
 * Created by PhpStorm.
 * User: gmanreviews
 * Date: 11/01/2015
 * Time: 04:54 PM
 */

?>

<!DOCTYPE html>

    <?php include('header.php'); ?>

    <body>
        <div id="content" class="clear">
            <div id="header" class="clear">
                <span>
                    tederick.com
                </span>
                <img src="<?php echo get_template_directory_uri(); ?>/img/tederick-header-big.png">
                <span>
                    archive
                </span>
            </div>
            <div id="main-content" class="clear">
                <?php include('categories.php'); ?>
            </div>
            <?php include('social.php'); ?>
        </div><!-- #wrap -->
    </body>

</html>
