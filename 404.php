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



        <div id="heading" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/not-found.jpg');">
            <h1>Page not found</h1>
        </div>
          <!-- Main -->
        <section id="main" class="wrapper">
                    <div class="inner">
                         <div class="content">

                 
                           We looked and we looked but we couldn't find that page anywhere... Please use the navigation menus to get to where you want to go.
                           <br />
                           
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/404.jpg" alt="Page not found">
                           
                    </div>
                    </div>
               </section>


<?php 
get_footer();