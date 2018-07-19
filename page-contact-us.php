<?php
/**
 * The contact template file industrious
 *
 * @link https://www.softsmart.co.za/industrious-wordpress-template
 *
 * @package Industrious
 * @version 1.0
 */

get_header(); ?>

    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();


    $backgroundImage = "";
    $image = "";
    if (has_post_thumbnail(get_the_ID())) {
        $attachement = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full');
        $image = $attachement[0];

        $backgroundImage = " style=\"background-image: url('".$image."');\"";
    }

    ?>

    <?php
    if (get_field("map_address") != "") {
    
        $mapAddress = trim(get_field("map_address"));
        $mapAddress = str_replace("<br />", ",", $mapAddress);
        $mapAddress = str_replace("<br>", ",", $mapAddress);
        $mapAddress = str_replace("<p>", ",", $mapAddress);
        $mapAddress = str_replace("</p>", ",", $mapAddress);
        
    ?>
    
<div class="map">
<iframe style="border: 0;" src="https://maps.google.com/maps?q=<?php print $mapAddress; ?>&amp;output=embed" width="100%" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe>

<h1><?php the_title(); ?></h1>
</div>
    
 
    <?php    
    } else {
    ?>
    
        <div id="heading" <?php print $backgroundImage; ?>>
        <h1><?php the_title(); ?></h1>
        </div>
        
    <?php
    }
    ?>
          <!-- Main -->
        <section id="main" class="wrapper">
                    <div class="inner">
                         <div class="content">

                        <?php

                        $titleTwo = get_field("title_two");
                        if ($titleTwo != "") {
                                  print "<header>\r\n";
                                   print "<h2>".$titleTwo."</h2>\r\n";
                            print "</header>\r\n";
                        }

                        $content_left = get_field("contact_page_left");
                        $content_right = get_field("contact_page_right");
                        
                        ?>
                        <div class="row">
                                   <div class="col-8 col-12-medium">
                                <?php 
                                print $content_left;
                                ?>
                            </div>
                                   <div class="col-4 col-12-medium">
                                <?php 
                                print $content_right;
                                ?>
                            </div>
                        </div>

                    </div>
                    </div>
               </section>
    <?php
    // End the loop.
    endwhile;
    ?>


<?php 
get_footer();