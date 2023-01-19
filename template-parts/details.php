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
        $mainPrice = get_sub_field('price');
        $vendor = get_sub_field('vendor');
        $brand = get_sub_field('brand');
        $slogan = get_sub_field('slogan');
        $offer = get_sub_field('offer');
        $purchased_link = get_sub_field('purchased_link');
        //$pros = get_sub_field('pros');
        //$cons = get_sub_field('cons');
        $descriptions = get_sub_field('descriptions');
        //$specifications = get_sub_field('specifications');
        // Do something...
        ?>
          <div id="<?php echo 'content_of_' . $counter; ?>" class="product-content-wrapper">
            <div class="product-content-highlight">
                <div class="product-content-highlight-img">
                    <img src="<?php echo $img;?>" alt="<?php echo $title; ?>">
                </div>
                <div class="product-content-highlight-details">
                    <div class="product-content-number">
                      <span class="detils-number">
                        <?php echo $counter?>
                      </span>
                    </div>
                    <div class="product-content-highlight-slogan">
                      <span class="details-slogan"><?php echo $slogan?></span>
                    </div>
                    <div class="product-content-highlight-brand">
                        <span class="details-brand">
                          <?php echo $brand;?>
                        </span>
                    </div>
                    <div class="product-content-highlight-title">
                        <h2 class="details-title">
                          <?php echo $title; ?>
                        </h2>
                    </div>
                    <div class="product-content-highlight-offer">
                      <span class="details-offer">
                          <?php echo $offer;?>
                      </span>
                    </div>
                    <div class="product-content-highlight-button">
                        <div class="multi-affi-link">
                          <a href="<?php echo $purchased_link;?>" target="_blank" class="details-purchased-link"><?php echo '$' . $mainPrice . ' at ' . $vendor?></a>
                        </div>
                          <?php
                          if( have_rows('affiliate_links_multiple') ):
                              while( have_rows('affiliate_links_multiple') ) : the_row();
                                  // Get sub value.
                                  $price = get_sub_field('price');
                                  $vendor = get_sub_field('vendor');
                                  $url = get_sub_field('url');
                                  ?>
                                  <div class="multi-affi-link">
                                  <a href="<?php echo $url;?>" target="_blank" class="details-purchased-link"><?php echo '$' . $price . ' at ' . $vendor?></a>
                                  </div>
                                  <?php
                              endwhile;
                          endif;
                          ?>
                    </div>
                </div>
            </div>
            <div class="product-content-review">
                <div class="product-content-review-wrapper">
                  <div class="review-pros">
                      <h4 class="review_title">PROS</h4>
                        <ul class="product-review-pros-list">
                        <?php
                        if( have_rows('pros') ):
                            while( have_rows('pros') ) : the_row();
                                // Get sub value.
                                $positive = get_sub_field('positive');
                                echo '<li class="product-review-pros-item"><i class="fa-solid fa-circle-check"></i>' . $positive . '</li>';
                            endwhile;
                        endif;
                        ?>
                        </ul>
                  </div>
                  <div class="review-cons">
                  <h4 class="review_title">
                        CONS
                      </h4>
                      <ul class="product-review-cons-list">
                        <?php
                        if( have_rows('cons') ):
                            while( have_rows('cons') ) : the_row();
                                // Get sub value.
                                $negetive = get_sub_field('negetive');
                                echo '<li  class="product-review-cons-item"><i class="fa-sharp fa-solid fa-circle-xmark"></i>' . $negetive . '</li>';
                            endwhile;
                        endif;
                        ?>
                        </ul>
                  </div>
                </div>
            </div>
            <?php
                  if( get_sub_field('descriptions') ) {
                    ?>
                      <div class="product-content-details">
                      <div class="product-content-details-wrapper">
                          <?php echo $descriptions; ?>
                      </div>
                    </div>
                    <?php
                  }
                ?>           
            <div class="product-content-specifications">
              <div class="product-content-specifications-wrapper">
                <?php
                  if( have_rows('specifications') ) {
                    ?>
                      <h2 class="spec-title">
                        Product Specs
                      </h2>
                    <?php
                  }
                ?>
                <table class="product-feature-specs-table">
                    <tbody>
                    <?php
                        if( have_rows('specifications') ):
                            while( have_rows('specifications') ) : the_row();
                                // Get sub value.
                                $specTitle = get_sub_field('title');
                                $specValue = get_sub_field('value');
                                ?>
                                  <tr>
                                    <th><?php echo $specTitle; ?></th>
                                    <td><?php echo $specValue; ?></td>
                                  </tr>
                                <?php
                            endwhile;
                        endif;
                        ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        <?php
    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;



