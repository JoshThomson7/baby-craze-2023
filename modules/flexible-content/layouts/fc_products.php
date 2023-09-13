<?php
/*
    Grid Links
*/
$prod_box_num = get_sub_field('boxes_per_row');



// $alt_title = get_sub_field('override_page_title');
?>

<div class="grid">
    <?php
        $product_links = get_sub_field('product_links');

        foreach($product_links as $product_link):

        $attachment_id = get_field('product_image', $product_link->ID);
        $product_link_img = vt_resize( $attachment_id, '', 800, 800, true);

        $product_title = get_field('product_title', $product_link->ID);
        $product_description = get_field('product_description', $product_link->ID);
        $product_price = get_field('product_price', $product_link->ID);
        $product_button_text = get_field('product_button_text', $product_link->ID);
        $product_button_link = get_field('product_button_link', $product_link->ID);
    ?>
            <article class="<?php echo $prod_box_num; ?>">
                <div class="padder">
                    
                    <figure style="background-image:url(<?php echo $product_link_img['url']; ?>);"></figure>

                    <div class="grid-box-content ">
                        <h3>Title: <?php echo $product_title; ?></h3>
                        <p>Description: <?php echo $product_description; ?></p>
                        <p>Price: <?php echo $product_price; ?></p>
                        <a href="<?php echo $product_button_link; ?>" class="button secondary"><?php echo $product_button_text; ?></a>
                    </div><!-- grid__box__content -->
                </div><!-- padder -->
            </article>
    <?php endforeach; ?>
</div><!-- grid -->
