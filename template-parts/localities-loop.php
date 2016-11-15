<?php if (have_posts()) : $flip_counter = 1;
    $last_post = []; ?>

    <?php while (have_posts()): the_post();

        if ($flip_counter == 3) {
            ?>
            <div class=" col-lg-4 col-sm-6 hidden-md-col mobile-locality">
                <div class="localities-box wow fadeInDown" data-wow-delay="100ms">
                    <div class="row">
                        <div class="col-sm-6">
                            <?php
                            if (has_post_thumbnail()) {
                                echo the_post_thumbnail("realtor_localities_thumbnail", ['class' => 'img-responsive']);
                            } else { ?>
                                <img src="http://placehold.it/320x300" width="320" height="300" alt=""
                                     class="img-responsive"/>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="col-sm-6">
                            <div class="localities-text">
                                <h4><?php the_title();?></h4>
                                <span
                                    class="category"><?php echo get_post_meta(get_the_id(), 'address-locality')[0]; ?></span>

                                <p><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
                                <a href="<?php the_permalink(); ?>">More Details <i class="fa fa-long-arrow-right"
                                                                                    aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>



            <?php

            if (has_post_thumbnail()) {
                $last_post['image'] = get_the_post_thumbnail(get_the_id(),"realtor_localities_thumbnail", ['class' => 'img-responsive']);
            } else {
                $last_post['image'] = '<img src="http://placehold.it/320x300" width="320" height="300" alt="" class="img-responsive"/>';

            }
            $last_post['title'] = get_the_title();
            $last_post['address-locality'] = get_post_meta(get_the_id(), 'address-locality')[0];
            $last_post['excerpt'] = wp_trim_words(get_the_excerpt(), 10);
            $last_post['permalink'] = get_the_permalink();

            $flip_counter++;
            continue;


        }
        if($flip_counter == 4)
        { ?>
            <div class=" col-lg-4 col-sm-6 hidden-md-col">
                <div class="localities-box wow fadeInDown" data-wow-delay="100ms">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="localities-text">
                                <h4><?php the_title(); ?></h4>
                                <span
                                    class="category"><?php echo get_post_meta(get_the_id(), 'address-locality')[0]; ?></span>

                                <p><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
                                <a href="<?php the_permalink(); ?>">More Details <i class="fa fa-long-arrow-right"
                                                                                    aria-hidden="true"></i></a></div>
                        </div>
                        <div class="col-sm-6">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail("realtor_localities_thumbnail", ['class' => 'img-responsive']);
                            } else { ?>
                                <img src="http://placehold.it/320x300" width="320" height="300" alt=""
                                     class="img-responsive"/>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" col-lg-4 col-sm-6 hidden-localities">
                <div class="localities-box wow fadeInDown" data-wow-delay="100ms">
                    <div class="row">

                        <div class="col-sm-6">
                            <div class="localities-text">
                                <h4><?php echo $last_post['title']; ?></h4>
                                <span
                                    class="category"><?php echo $last_post['address-locality']; ?></span>
                                <p><?php echo $last_post['excerpt']; ?></p>
                                <a href="<?php echo $last_post['permalink']; ?>">More Details <i class="fa fa-long-arrow-right"
                                                                                    aria-hidden="true"></i></a></div>
                        </div>
                        <div class="col-sm-6">
                            <?php echo $last_post['image']; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-lg-4 col-sm-6 hidden-localities">
                <div class="localities-box wow fadeInDown" data-wow-delay="100ms">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="localities-text">
                                <h4><?php the_title();?></h4>
                                <span
                                    class="category"><?php echo get_post_meta(get_the_id(), 'address-locality')[0]; ?></span>

                                <p><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
                                <a href="<?php the_permalink(); ?>">More Details <i class="fa fa-long-arrow-right"
                                                                                    aria-hidden="true"></i></a></div>
                        </div>
                        <div class="col-sm-6">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail("realtor_localities_thumbnail", ['class' => 'img-responsive']);
                            } else { ?>
                                <img src="http://placehold.it/320x300" width="320" height="300" alt=""
                                     class="img-responsive"/>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-lg-4 col-sm-6 mobile-locality">
                <div class="localities-box wow fadeInDown" data-wow-delay="100ms">
                    <div class="row">
                        <div class="col-sm-6">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail("realtor_localities_thumbnail", ['class' => 'img-responsive']);
                            } else { ?>
                                <img src="http://placehold.it/320x300" width="320" height="300" alt=""
                                     class="img-responsive"/>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="col-sm-6">
                            <div class="localities-text">
                                <h4><?php the_title(); ?></h4>
                                <span
                                    class="category"><?php echo get_post_meta(get_the_id(), 'address-locality')[0]; ?></span>

                                <p><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
                                <a href="<?php the_permalink(); ?>">More Details <i class="fa fa-long-arrow-right"
                                                                                    aria-hidden="true"></i></a></div>
                        </div>

                    </div>
                </div>
            </div>


            <?php
            $flip_counter++;
            continue;

        }
        if($flip_counter == 5 || $flip_counter == 6) {
            ?>
            <div class=" col-lg-4 col-sm-6 hidden-md-col">
                <div class="localities-box wow fadeInDown" data-wow-delay="100ms">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="localities-text">
                                <h4><?php the_title();?></h4>
                                <span
                                    class="category"><?php echo get_post_meta(get_the_id(), 'address-locality')[0]; ?></span>

                                <p><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
                                <a href="<?php the_permalink(); ?>">More Details <i class="fa fa-long-arrow-right"
                                                                                    aria-hidden="true"></i></a></div>
                        </div>
                        <div class="col-sm-6">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail("realtor_localities_thumbnail", ['class' => 'img-responsive']);
                            } else { ?>
                                <img src="http://placehold.it/320x300" width="320" height="300" alt=""
                                     class="img-responsive"/>
                                <?php
                            }
                            ?>
                        </div>

                    </div>
                </div>
            </div>
            <div class=" col-lg-4 col-sm-6 hidden-localities">
                <div class="localities-box wow fadeInDown" data-wow-delay="100ms">
                    <div class="row">
                        <div class="col-sm-6">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail("realtor_localities_thumbnail", ['class' => 'img-responsive']);
                            } else { ?>
                                <img src="http://placehold.it/320x300" width="320" height="300" alt=""
                                     class="img-responsive"/>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="col-sm-6">
                            <div class="localities-text">
                                <h4><?php the_title();?></h4>
                                <span
                                    class="category"><?php echo get_post_meta(get_the_id(), 'address-locality')[0]; ?></span>

                                <p><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
                                <a href="<?php the_permalink(); ?>">More Details <i class="fa fa-long-arrow-right"
                                                                                    aria-hidden="true"></i></a></div>
                        </div>


                    </div>
                </div>
            </div>
            <div class=" col-lg-4 col-sm-6 mobile-locality">
                <div class="localities-box wow fadeInDown" data-wow-delay="100ms">
                    <div class="row">
                        <div class="col-sm-6">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail("realtor_localities_thumbnail", ['class' => 'img-responsive']);
                            } else { ?>
                                <img src="http://placehold.it/320x300" width="320" height="300" alt=""
                                     class="img-responsive"/>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="col-sm-6">
                            <div class="localities-text">
                                <h4><?php the_title(); ?></h4>
                                <span
                                    class="category"><?php echo get_post_meta(get_the_id(), 'address-locality')[0]; ?></span>

                                <p><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
                                <a href="<?php the_permalink(); ?>">More Details <i class="fa fa-long-arrow-right"
                                                                                    aria-hidden="true"></i></a></div>
                        </div>

                    </div>
                </div>
            </div>

            <?php
            if($flip_counter == 6)
            {
                $flip_counter =0;

            }
            else{
                $flip_counter++;

            }

            continue;
        }

            ?>

        <div class=" col-lg-4 col-sm-6">
            <div class="localities-box wow fadeInDown" data-wow-delay="100ms">
                <div class="row">
                    <div class="col-sm-6">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail("realtor_localities_thumbnail", ['class' => 'img-responsive']);
                        } else { ?>
                            <img src="http://placehold.it/320x300" width="320" height="300" alt=""
                                 class="img-responsive"/>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="col-sm-6">
                        <div class="localities-text">
                            <h4><?php the_title();?></h4>
                                <span
                                    class="category"><?php echo get_post_meta(get_the_id(), 'address-locality')[0]; ?></span>

                            <p><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
                            <a href="<?php the_permalink(); ?>">More Details <i class="fa fa-long-arrow-right"
                                                                                aria-hidden="true"></i></a></div>
                    </div>
                </div>
            </div>
        </div>



        <?php
        $flip_counter++;
        ?>

    <?php endwhile; ?>

<?php else: ?>
    <div class="not-found">
        <h2><?php _e("No Localities found", "realtor"); ?></h2>
        <span><?php _e("No posts were found", "realtor"); ?> </span>
    </div>


<?php endif;
wp_reset_query(); ?>