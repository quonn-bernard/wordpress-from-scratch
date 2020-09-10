<?php
if (post_password_required()) {
 return;
}
?>
<div id="comments" class="comments-area">
                            <h2 class="comments-title headline"><?php comments_number(); ?></h2>
                            <ol class="comment-list">

                            <?php
foreach ($comments as $comment) {
 ?>

                                <li id="comment-1" class="comment even thread-even depth-1 parent">
                                <article class="comment-body">
                                    <div class="comment-author vcard">
                                        <?php echo get_avatar($comment, 60, '', '', ['class' => 'avatar photo']) ?>
                                   
                                    </div><!-- .comment-author -->
                                    <div class="comment-info">
                                        <div class="comment-info-inner">
                                            <b class="fn">
                                                <a href="<?php comment_author_link('comment_ID') ?>"><?php comment_author(); ?></a>
                                            </b>
                                            <div class="comment-meta">
                                                <div class="comment-metadata">
                                                    <a href="#">
                                                        <span><?php comment_date(); ?></span>
                                                    </a>
                                                </div><!-- .comment-metadata -->
                                                <div class="reply">
                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                </div>
                                            </div><!-- .comment-meta -->
                                        </div>
                                        <div class="comment-content">
                                            <p><?php comment_text(); ?></p>
                                        </div><!-- .comment-content -->
                                    </div>
                                </article><!-- .comment-body -->

                            </li><!-- #comment-## -->
                            <?php
}

the_comments_pagination()
?>

                            </ol>



                            <!-- Start Comment Respond area -->
                        <div id="respond" class="comment-respond">
                            <?php
comment_form([
 'comment_field' => '
                                <div class="col-md-12">
                                <p class="comment-form-comment">
                                    <textarea id="comment" name="comment" required="required" placeholder="Write you comment"></textarea>
                                </p>
                            </div>',
 'fields'        => [
  'author' => '<div class="col-md-6 col-sm-6">
                                <p class="comment-form-author">
                                    <input id="author" name="author" required="required" type="text" placeholder="Name *">
                                </p>
                            </div>',
  'email'  => '<div class="col-md-6 col-sm-6">
                                <p class="comment-form-author">
                                    <input id="email" name="email" required="required" type="text" placeholder="Email *">
                                </p>
                            </div>',
 ],
 'class_submit'  => 'submit',
 'label_submit'  => __('Submit Comment', 'yag'),
 'title_reply'   => __('Leave A Comment', 'yag'),
])
?>
                             </div>