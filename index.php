<?php
/**
 * The main template file industrious
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

        <div id="heading" <?php print $backgroundImage; ?>>
            <h1><?php the_title(); ?></h1>
        </div>
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

                        the_content();

                        ?>
                    </div>
				</div>
			</section>
    <?php
    // End the loop.
    endwhile;
    ?>


<?php 
get_footer(); 

