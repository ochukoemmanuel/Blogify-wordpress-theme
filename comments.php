
    <?php 
    if(! have_comments()){
        // comments_number(); 
        ?> <h3>Leave a comment</h3><?php
    } else {
        echo get_comments_number() . "comments";
    }
    ?>

<!-- START commentlist -->
<ol class="commentlist">

<li class="depth-1 comment">

    <div class="comment__avatar">
        <img class="avatar" src="images/avatars/user-01.jpg" alt="" width="50" height="50">
    </div>

    <div class="comment__content">

        <?php 
            wp_list_comments(
                array(
                    'avatar_size' => 120,
                    'style' => 'div'
                )
            );
        ?>

        <div class="comment__info">
            <div class="comment__author">Itachi Uchiha</div>

            <div class="comment__meta">
                <div class="comment__time">Aug 15, 2021</div>
                <div class="comment__reply">
                    <a class="comment-reply-link" href="#0">Reply</a>
                </div>
            </div>
        </div>

        <div class="comment__text">
        <p>Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate,
        facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.</p>
        </div>

    </div>

</li> <!-- end comment level 1 -->

<li class="thread-alt depth-1 comment">

    <div class="comment__avatar">
        <img class="avatar" src="images/avatars/user-04.jpg" alt="" width="50" height="50">
    </div>

    <div class="comment__content">

        <div class="comment__info">
            <div class="comment__author">John Doe</div>

            <div class="comment__meta">
                <div class="comment__time">Aug 14, 2021</div>
                <div class="comment__reply">
                    <a class="comment-reply-link" href="#0">Reply</a>
                </div>
            </div>
        </div>

        <div class="comment__text">
        <p>Sumo euismod dissentiunt ne sit, ad eos iudico qualisque adversarium, tota falli et mei. Esse euismod
        urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus contentiones nec ad, nec et
        tantas semper delicatissimi.</p>
        </div>

    </div>

    <ul class="children">

        <li class="depth-2 comment">

            <div class="comment__avatar">
                <img class="avatar" src="images/avatars/user-03.jpg" alt="" width="50" height="50">
            </div>

            <div class="comment__content">

                <div class="comment__info">
                    <div class="comment__author">Kakashi Hatake</div>

                    <div class="comment__meta">
                        <div class="comment__time">Aug 14, 2021</div>
                        <div class="comment__reply">
                            <a class="comment-reply-link" href="#0">Reply</a>
                        </div>
                    </div>
                </div>

                <div class="comment__text">
                    <p>Duis sed odio sit amet nibh vulputate
                    cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate
                    cursus a sit amet mauris</p>
                </div>

            </div>

            <ul class="children">

                <li class="depth-3 comment">

                    <div class="comment__avatar">
                        <img class="avatar" src="images/avatars/user-04.jpg" alt="" width="50" height="50">
                    </div>

                    <div class="comment__content">

                        <div class="comment__info">
                            <div class="comment__author">John Doe</div>

                            <div class="comment__meta">
                                <div class="comment__time">Aug 14, 2021</div>
                                <div class="comment__reply">
                                    <a class="comment-reply-link" href="#0">Reply</a>
                                </div>
                            </div>
                        </div>

                        <div class="comment__text">
                        <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
                        etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                        </div>

                    </div>

                </li>

            </ul>

        </li>

    </ul>

</li> <!-- end comment level 1 -->

<li class="depth-1 comment">

    <div class="comment__avatar">
        <img class="avatar" src="images/avatars/user-02.jpg" alt="" width="50" height="50">
    </div>

    <div class="comment__content">

        <div class="comment__info">
            <div class="comment__author">Shikamaru Nara</div>

            <div class="comment__meta">
                <div class="comment__time">Aug 13, 2021</div>
                <div class="comment__reply">
                    <a class="comment-reply-link" href="#0">Reply</a>
                </div>
            </div>
        </div>

        <div class="comment__text">
        <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
        </div>

    </div>

</li>  <!-- end comment level 1 -->

</ol>
<!-- END commentlist -->



</div> <!-- end col-full -->
</div> <!-- end comments -->

<div class="comment-respond">

    <!-- START respond -->
    <div id="respond">

        <h3>
        Add Comment 
        <span>Your email address will not be published.</span>
        </h3>

        <?php
            if(comments_open()){
                comment_form(
                    array(
                        'author' => '<div class="column lg-6 tab-12 form-field"></div>',
                        'class_form' => 'comment-form',
                        'title_reply_before' => '<div class="column lg-6 tab-12 form-field">',
                        'title_reply_after' => '</div>'
                    )
                );
            }
            ?>

    </div>
    <!-- END respond-->

</div> <!-- end comment-respond -->

</div> <!-- end comments-wrap -->

</article> <!-- end entry -->

</div>
</div> <!-- end entry-wrap -->
</section> <!-- end s-content -->
