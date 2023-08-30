<?php
/*
    Grid Links
*/
$prod_box_num = get_sub_field('boxes_per_row');

$product_title = get_sub_field('product_title');
$product_description = get_sub_field('product_description');
$product_price = get_sub_field('product_price');
$product_button_text = get_sub_field('product_button_text');
$product_button_link = get_sub_field('product_button_link');

// $alt_title = get_sub_field('override_page_title');
?>

<div class="grid">
    <?php
        $product_links = get_sub_field('product_links');

        foreach($product_links as $product_link):

        $attachment_id = get_field('product_image', $product_link->ID);
        $product_link_img = vt_resize( $attachment_id, '', 800, 800, true);
    ?>
        <article class="<?php echo $prod_box_num; ?>">
            <a href="<?php echo get_permalink($product_link->ID); ?>" style="background-image:url(<?php echo $product_link_img['url']; ?>);">

                <div class="grid__link__content">
                    <h3 class="ts"><?php echo get_the_title($product_link->ID); ?><i class="fa fa-arrow-right"></i></h3>
                    <a href="" class="button primary"><?php echo $product_button_text; ?></a>
                </div><!-- grid__link__content -->
            </a>
        </article>
    <?php endforeach; ?>
</div><!-- grid -->
