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

    <!-- Banner -->
    <?php
    $sliders = get_field("sliders");
    if (is_array($sliders) && ! empty($sliders)) {
    ?>
        <div class="flexslider">
            <ul class="slides">

            <?php
	    foreach ($sliders as $slide) {
	    
	        if ($slide["image"] == "") {
		    continue;
		}
		
                print "<li>\r\n";
		print "<img src=\"".$slide["image"]."\" />\r\n";
		
		$margin = "";
		if ($slide["top_margin"] != 0) {
		    $margin = " style=\"margin-top: ".$slide["top_margin"]."px;\" ";
		}
		
                print "<div class=\"copy\" ".$margin.">\r\n";
		
		    if ($slide["copy"] != "") {
		        print "<p>".$slide["copy"]."</p>\r\n";
		    }
		    
		    if ($slide["link"] != "") {
		        print "<p><a href=\"".$slide["link"]."\" class=\"btn\">".$slide["link_text"]."</a></p>\r\n";
		    }
		    
		print "</div>\r\n";
                print "</li>\r\n";
	    }
	    ?>
	    
            </ul>
        </div><!-- /flexslider -->
    <?php
    }
    ?>
	






	<!-- Highlights -->
	<section class="wrapper">
		<div class="inner">

            <?php
            while (have_posts()) : the_post();
                $title = get_the_title();
                $content = get_the_content();

                if ($content != "") {
                    
                    print "<header class=\"special\">\r\n";

                    if ($title != "") {
                        print "<h2>".$title."</h2>\r\n";
                    }
                    
                    print "<p>".the_content()."</p>\r\n";
                    print "</header>\r\n";
                }

            endwhile;



            $highlights = get_field("highlights");
            if (is_array($highlights) && !empty($highlights)) {
            
                print "<div class=\"highlights\">\r\n";
                
                foreach ($highlights as $highlight) {
                        
                    print "<section>\r\n";
                    print "<div class=\"content\">\r\n";
                    print "<header>\r\n";
                    print "<a href=\"".$highlight["link"]."\" class=\"icon ".$highlight["font_awesome_icon"]."\"><span class=\"label\">Icon</span></a>\r\n";
                    print "<h3>".$highlight["title"]."</h3>\r\n";
                    print "</header>\r\n";
                    print "<p>".$highlight["copy"]."</p>\r\n";
                    print "</div>\r\n";
                    print "</section>\r\n\r\n";
                    
                }

                print "</div>\r\n";
                
            }
            ?>

		</div>
	</section>

    <?php

    $callToActionTitle = get_field("call_to_action_title");
    $callToAction = get_field("call_to_action");
    
    if ($callToAction != "") {
        print "<!-- CTA -->\r\n";
        print "<section id=\"cta\" class=\"wrapper\">\r\n";
        print "<div class=\"inner\">\r\n";

        if ($callToActionTitle != "") {
            print "<h2>".$callToActionTitle."</h2>\r\n";
        }
        print "<p>".$callToAction."</p>\r\n";
        print "</div>\r\n";
        print "</section>\r\n";
    }



    $testimonialsTitle = get_field("testimonials_title");
    $testimonialsCopy = get_field("testimonials_copy");
    
    $testimonials = get_field("testimonials");

    if (is_array($testimonials) && !empty($testimonials)) {
        
        print "<!-- Testimonials -->\r\n";
        print "<section class=\"wrapper\">\r\n";
		print "<div class=\"inner\">\r\n";
        print "<header class=\"special\">\r\n";

        if ($testimonialsTitle != "") {
            print "<h2>".$testimonialsTitle."</h2>\r\n";
        }

        if ($testimonialsCopy != "") {
            print "<p>".$testimonialsCopy."</p>\r\n";
        }
        
        print "</header>\r\n";
        print "<div class=\"testimonials\">\r\n";
                
        foreach ($testimonials as $testimonial) {
            
            if ($testimonial["copy"] == "") {
                continue;
            }

            print "<section>\r\n";
            print "<div class=\"content\">\r\n";
            print "<blockquote>\r\n";
            print "<p>".$testimonial["copy"]."</p>\r\n";
            print "</blockquote>\r\n";
            print "<div class=\"author\">\r\n";
            print "<div class=\"image\">\r\n";
            print "<img src=\"".$testimonial["image"]."\" alt=\"".$testimonial["title"]."\" />\r\n";
            print "</div>\r\n";
            print "<p class=\"credit\">- <strong>".$testimonial["name"]."</strong> <span>".$testimonial["title"]."</span></p>\r\n";
            print "</div>\r\n";
            print "</div>\r\n";
            print "</section>\r\n";
                
        }

        print "</div>\r\n";
		print "</div>\r\n";
        print "</section>\r\n";

    }
    ?>

<?php 
get_footer(); 


