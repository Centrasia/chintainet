<?php
	/* 
	template name: ユーザー投稿記事一覧
	*/
	get_header();
?>
<div id="contents" class="page_area post_list_page">
	<div id="main_contents" class="cf">
        <div class="breadcrumbs">
          <?php if(function_exists('bcn_display')){ bcn_display(); }?>
        </div>
        <div class="content_inner">
        
        
        
            <h2>投稿スレッド一覧</h2>
            
            
            <div class="post_contents">
            <?php if(is_user_logged_in()): /*ログイン確認*/ ?>
            <?php get_template_part( 'inc_register_check' ); ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content();?>
            <?php endwhile; // end of the loop. ?>
            	<p class="att">※スレッド削除後は元に戻すことができません。</p>
                    <?php $user_id = get_current_user_id();?>
                    <table>
                    	<tr>
                        	<th>投稿掲示板</th>
                    		<th>スレッド名</th>
                            <th>投稿日</th>
                        	<th>削除</th>
                        </tr>
                        <?php $args = array(
                            'numberposts' => -1,                //表示（取得）する記事の数
                            'post_type' => 'forum_property',   //投稿タイプの指定
							'author' => $user_id
                        );
                        $customPosts = get_posts($args);
                        if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post ); ?>
                            <tr>
                            	<td><a href="<?php echo home_url(); ?>/forum_property/">お部屋・物件掲示板</a></td>
                            	<td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
                                <td><?php the_time("Y/m/d H:i");?></td>
                                <td><?php get_template_part( 'inc_delete_check' ); ?></td>
                           	</tr>
                        <?php endforeach; ?>
                        <?php endif; wp_reset_postdata(); //クエリのリセット ?>
                        
                        
                        <?php $args = array(
                            'numberposts' => -1,
                            'post_type' => 'forum_recruit',
							'author' => $user_id
                        );
                        $customPosts = get_posts($args);
                        if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post ); ?>
                            <tr>
                            	<td><a href="<?php echo home_url(); ?>/forum_recruit/">求人募集掲示板</a></td>
                            	<td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
                                <td><?php the_time("Y/m/d H:i");?></td>
                                <td><?php get_template_part( 'inc_delete_check' ); ?></td>
                           	</tr>
                        <?php endforeach; ?>
                        <?php endif;  wp_reset_postdata(); //クエリのリセット ?>
                        
                        
                        <?php $args = array(
                            'numberposts' => -1,
                            'post_type' => 'forum_community',
							'author' => $user_id
                        );
                        $customPosts = get_posts($args);
                        if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post ); ?>
                            <tr>
                                <td><a href="<?php echo home_url(); ?>/forum_community/">総合掲示板</a></td>
                                <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
                                <td><?php the_time("Y/m/d H:i");?></td>
                                <td><?php get_template_part( 'inc_delete_check' ); ?></td>
                           	</tr>
                        <?php endforeach; ?>
                        <?php endif;  wp_reset_postdata(); //クエリのリセット ?>
                    </table>
               <?php else:?>
               <p class="clear" style="margin-bottom: 100px;">投稿スレッド一覧を表示するには<a href="<?php echo get_page_link(6); ?>" title="ログイン">ログイン</a>する必要があります。</p>
               <hr>
               <?php endif;?>
            </div>
        </div><!-- / .content_inner -->
        <?php get_template_part( 'inc_topic' ); ?>
    </div><!-- / #main_contents .cf -->

    <?php get_sidebar();?>
</div>
<!-- / #contents .page-area -->

<?php get_footer(); ?>