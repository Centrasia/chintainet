<?php if(is_user_logged_in()): ?>
<?php

	$user_id = get_current_user_id();
	$post_user_id = get_the_author_meta( id );

if ($user_id == $post_user_id ):

	if (current_user_can('delete_posts',$post->ID)):
?>
<a onclick="return confirm('スレッドを削除します。※削除を行うと戻すことができません。宜しいですか？')" href="<?php echo get_delete_post_link( $post->ID); ?>">スレッドを削除する</a>
<?php /*
<a href="<?php echo $get_del_url; ?>">記事を削除</a>
*/
?>
	<?php endif; ?>
<?php endif; ?>
<?php endif; ?>