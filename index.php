<?php 
    get_header();
    ?>

    <!-- # site-content
        ================================================== -->
        <section id="content" class="s-content">


            <!-- pageheader -->
            <div class="s-pageheader">
                <div class="row">
                    <div class="column large-12">
                        <h1 class="page-title">
                            <span class="page-title__small-type">Category:</span>
                            Inspiration
                        </h1>
                    </div>
                </div>
            </div> <!-- end s-pageheader-->

            

            <!--  masonry -->
            <div id="bricks" class="bricks">

                <div class="masonry">

                    <div class="bricks-wrapper" data-animate-block>

                        <div class="grid-sizer"></div>

    <?php
    
    if(have_posts()){
        while(have_posts()){
            the_post();

            get_template_part('template-parts/content', 'archive');
        }
    }

    ?>

    </div> <!-- end bricks-wrapper -->

</div> <!-- end masonry-->

<!-- pagination -->
<div class="row pagination">
                    <div class="column lg-12">
                        <nav class="pgn">
                            <ul>
                                <li>
                                    <a class="pgn__prev" href="#0">
                                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.25 6.75L4.75 12L10.25 17.25"></path>
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 12H5"></path>
                                        </svg>
                                    </a>
                                </li><?php echo paginate_links('<li><a class="pgn__num" href="#0">', '</a></li>'); ?>
                                <!-- <li><a class="pgn__num" href="#0">1</a></li>
                                <li><span class="pgn__num current">2</span></li>
                                <li><a class="pgn__num" href="#0">3</a></li>
                                <li><a class="pgn__num" href="#0">4</a></li>
                                <li><a class="pgn__num" href="#0">5</a></li>
                                <li><span class="pgn__num dots">…</span></li>
                                <li><a class="pgn__num" href="#0">8</a></li> -->
                                <li>
                                    <a class="pgn__next" href="#0">
                                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 12H4.75"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </nav> <!-- end pgn -->
                    </div> <!-- end column -->
                </div> <!-- end pagination -->

            </div> <!-- end bricks -->

        </section> <!-- end s-content -->
                

<?php 
    get_footer();
    ?>