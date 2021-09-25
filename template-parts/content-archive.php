

                        <article class="brick entry" data-animate-el>
        
                            <div class="entry__thumb">
                                <a href="<?php the_permalink(); ?>" class="thumb-link">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                </a>
                            </div> <!-- end entry__thumb -->
        
                            <div class="entry__text">
                                <div class="entry__header">
                                    <div class="entry__meta">
                                        <span class="cat-links">
                                            <a href="#"><?php echo get_the_category_list(' ' ); ?></a> 
                                        </span>
                                        <span class="byline">
                                            By:
                                            <?php the_author_posts_link(); ?> 
                                        </span>
                                    </div>
                                    <h1 class="entry__title"><a href=" <?php the_permalink(); ?>"> <?php the_title(); ?></a></h1>
                                </div>
                                <div class="entry__excerpt">
                                    <p>
                                    <?php the_excerpt(); ?>
                                    </p>
                                </div>
                                <a class="entry__more-link" href="<?php the_permalink(); ?>">Read More</a>
                            </div> <!-- end entry__text -->
                        
                        </article> <!-- end article -->


                



