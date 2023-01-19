<?php
// Check rows existexists.
if( have_rows('products') ):

    $counter = 0;
    // Loop through rows.
    while( have_rows('products') ) : the_row();
    $counter++;

        // Load sub field value.
        $img = get_sub_field('image');
        $title = get_sub_field('title');
        $price = get_sub_field('price');
        $vendor = get_sub_field('vendor');
        $brand = get_sub_field('brand');
        $slogan = get_sub_field('slogan');
        $offer = get_sub_field('offer');
        $purchased_link = get_sub_field('purchased_link');
        $pros = get_sub_field('pros');
        $cons = get_sub_field('cons');
        $descriptions = get_sub_field('descriptions');
        $specifications = get_sub_field('specifications');
        // Do something...
        ?>
                <li class="product-summary-item">
                        <div class="counter">
                            <h2 class="product-summary-item-number ">
                                <?php echo $counter; ?>
                            </h2>
                        </div>
                        <div class="product-summary-item-img">
                            <img src="<?php echo $img;?>" alt="<?php echo $title; ?>">
                        </div>
                        <div class="product-summary-item-data">
                            <div class="slogan">
                                <h4 class="slogan_title"><?php echo $slogan; ?></h4>
                            </div>
                            <div class="name">
                                <h2 class="product_name">
                                <?php echo $title; ?>
                                </h2>
                            </div>
                            <div class="brand">
                                <h6 class="product_brand">
                                <?php echo $brand; ?>
                                </h6>
                            </div>
                            <div class="read_more">
                                <a href="<?php echo '#content_of_' . $counter; ?>" class="read_more_btn">Read More</a>
                            </div>
                        </div>
                        <div class="product-summary-item-button">
                            <a href="<?php $purchased_link;?>" target="_blank" class="purchased_btn">
                                <?php echo '$' .$price . ' at ' . $vendor;?>
                            </a>
                        </div>
                </li>

        <?php
    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;



