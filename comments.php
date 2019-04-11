<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

<p class="nocomments">این مطلب با کلمه عبور محافظت می شود. برای ادامه میدانی که چه باید کرد!</p>

<?php
			return;
		}
	}
	/* This variable is for alternating comment background */
	$oddcomment = 'class="comments-alt" ';
?>

<!-- You can start editing here. -->
<section class="comments">
   <div class="container">
        <?php if ($comments) : ?>
        <h3></h3>
        <h2 id="comments">
            <?php comments_number( 'بدون دیدگاه', 'یک دیدگاه برای این نوشته گذاشته شده است', '% دیدگاه برای این نوشته گذاشته شده است.' );?>
        </h2>
</div>
        

        <ul class="commentlist">

            <?php foreach ($comments as $comment) : ?>
 <div class="container">
            <li class="row comment" <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>" >
                
                <div class="col-3 info">
                    <div class="avatar-holder rounded-circle">
                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 55 ); ?>   
                    </div>
                    <h4><?php comment_author_link() ?></h4>
                    <p><?php comment_date('F jS, Y') ?> at <?php comment_time() ?></p>
                </div>
           
                <?php if ($comment->comment_approved == '0') : ?>
                <em>دیدگاه شما ثبت شد و در انتظار تایید است.</em>
                <?php endif; ?>
                <div class="col-9">
                     <?php comment_text() ?>
                </div>
                 
            </li>
</div>
            <?php
		/* Changes every other comment to a different class */
		$oddcomment = ( empty( $oddcomment ) ) ? 'class="comments-alt" ' : '';
	?>

            <?php endforeach; /* end for each comment */ ?>

        </ul>


        <?php else : // this is displayed if there are no comments so far ?>

        <?php if ('open' == $post->comment_status) : ?>
        <!-- If comments are open, but there are no comments. -->

        <?php else : // comments are closed ?>
        <!-- If comments are closed. -->
        <p class="nocomments">دیدگاه ها این نوشته بسته شده است.</p>

        <?php endif; ?>
        <?php endif; ?>


        <?php if ('open' == $post->comment_status) : ?>
<div class="container">
        <h2 id="respond">دیدگاه خود را با ما در میان بگذارید.</h2>

        <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
        <p>برای ارسال دیدگاه شما باید <a
                href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">وارد شوید</a></p>
        <?php else : ?>
</div>

        <div class="container comment-form">
            <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
             <?php if ( $user_ID ) : ?>

            <p>وارد شده با نام <a
                    href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>.
                <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout"
                    title="Log out of this account">خروج &raquo;</a></p>

            <?php else : ?>
                <div class="form-row">
                    <div class="form-group col-md-4"><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" class="form-control"
                            placeholder="نام و نام خانوادگی"></div>
                    <div class="form-group col-md-4"><input name="email" id="email" value="<?php echo $comment_author_email; ?>" class="form-control" type="text" placeholder="ایمیل"></div>
                    <div class="form-group col-md-4"><input name="url" id="url" value="<?php echo $comment_author_url; ?>" class="form-control ltr" type="text" placeholder="http://">
                    </div>
                      <?php endif; // If registration required and not logged in ?>
                    <div class="form-group col-12"><textarea name="comment" id="comment"  tabindex="4" class="form-control" cols="30" rows="8"
                            placeholder="دیدگاه خود را با ما در میان بگذارید"></textarea></div>
                    <div class="form-group">


                        <button class="btn btn-warning rounded-pill px-5" type="submit">ارسال
                            دیدگاه</button></div>
                             <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
                </div>
                    
            </p>
                 <?php do_action('comment_form', $post->ID);?>
            </form>
        </div>


      

        <?php endif; // if you delete this the sky will fall on your head ?>
        <?php endif; // if you delete this the sky will fall on your head ?>
   
</section>