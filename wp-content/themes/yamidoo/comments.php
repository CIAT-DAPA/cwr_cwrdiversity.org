<?php 
global $options; foreach ($options as $value) { if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); } }
$dateformat = get_option('date_format');
$timeformat = get_option('time_format');
?>
<?php if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', 'wpzoom');?></p>
	<?php
		return;
	}
?>

	

<?php if ( have_comments() ) : ?>
<div id="commentspost"><a name="commentspost"></a>
<h3><?php comments_number(__('No Comments', 'wpzoom'), __('1 Comment', 'wpzoom'), __('% Comments', 'wpzoom')); ?></h3>
<ol class="normalComments"><?php wp_list_comments('type=comment&avatar_size=45');?></ol>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link( __('Previous Comments','wpzoom')); ?></div>
		<div class="alignright"><?php next_comments_link( __('Next Comments', 'wpzoom')); ?></div>	
	</div>
 </div>
	
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->
<div id="commentspost">
	<h3><?php _e('0 Comments', 'wpzoom'); ?></h3>
   <p><?php _e('You can be the first one to leave a comment.', 'wpzoom'); ?></p>
</div>
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments"><?php _e('Comments are closed.', 'wpzoom'); ?></p>

	<?php endif; ?>
<?php endif; ?>
 
	  
<?php if ('open' == $post->comment_status) : ?>
 
<div id="respond">

<h3><?php comment_form_title( __('Leave a Comment', 'wpzoom'), __('Leave a Reply','wpzoom')); ?></h3>
<div class="cancel-comment-reply"><p><?php cancel_comment_reply_link(); ?></p></div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php _e('You must be', 'wpzoom') ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"><?php _e('logged in', 'wpzoom') ?></a> <?php _e('to post a comment.', 'wpzoom') ?></p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p><?php _e('Logged in as', 'wpzoom') ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(); ?>" title="<?php _e('Log out of this account', 'wpzoom') ?>"><?php _e('Logout', 'wpzoom') ?> &raquo;</a></p>

<?php else : ?>
<div id="formLabels">
 
<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" /><label for="author"><?php _e('Name', 'wpzoom') ?> <?php if ($req) ?> (<?php _e('required', 'wpzoom'); ?>):</label></p>

 
<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" /><label for="email"><?php _e('Email', 'wpzoom') ?> <?php if ($req) ?> (<?php _e('required', 'wpzoom'); ?>):</label></p>

 
<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" /><label for="url"><?php _e('Website', 'wpzoom') ?>:</label></p>
</div>
<?php endif; ?>
<div id="formContent">
<textarea name="comment" id="comment" tabindex="4" cols="140" rows="8"></textarea><br />
<input name="submit" type="submit" id="submit" value="<?php _e('Add Comment', 'wpzoom') ?>" />
</div>
<?php comment_id_fields(); ?>
<?php do_action('comment_form', $post->ID); ?>
</form>
<?php endif; // If registration required and not logged in ?>
</div>

<?php if ($wpzoom_trackbacks == 'Show') { ?>
	<h3><span><?php _e('Trackbacks', 'wpzoom') ?></span></h3> 
		<ol>
		
		   <?php //Displays trackbacks only
			foreach ($comments as $comment) : ?>
				<?php $comment_type = get_comment_type(); ?>

				<?php if($comment_type != 'comment') { ?>
				<li><?php comment_author_link() ?></li>
			<?php }
			endforeach; ?>

		</ol>
	 
	
	<?php } ?>
<?php endif; // if you delete this the sky will fall on your head ?>