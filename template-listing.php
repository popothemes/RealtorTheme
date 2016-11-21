<?php
/*
* Template Name: Property Listing
*
* Property Listing Template
*
*/
get_header();

?>



    <article>
        <div class="article">
            <?php get_template_part('template-parts/page-title'); ?>
            <div class="page-result">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <?php while ( have_posts() ) : the_post(); ?>
                                <h4><?php the_title(); ?></h4>
                                <p><?php the_content(); ?></p>
                            <?php endwhile; wp_reset_query();?>
                            <span class="line"></span>
                        </div>
                        <div class="col-sm-6 sort-item">
                            <a href="javascript:;" class="sort">Sort By: Default Order <i class="fa fa-angle-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <section class="section-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <?php dynamic_sidebar( 'Property Listing' );?>
                        </div>

                        <div class="col-sm-8">
                            <div class="row">

                                <?php

                                $regular_posts_args = array(

                                    'post_type'       =>  'property',
                                    'paged'         =>  get_query_var('paged'),

                                );
                                query_posts($regular_posts_args);
                                get_template_part("template-parts/properties-loop");

                                ?>




                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <h4 class="hidden">Realtor</h4>
    </article>
<?php get_footer(); ?>