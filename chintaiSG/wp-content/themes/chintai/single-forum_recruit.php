<?php get_header(); ?>

<div id="contents" class="recruit_area page_area forum_single">
  <div id="main_contents" class="cf">
     <div class="breadcrumbs">
     <?php if(function_exists('bcn_display')){ bcn_display(); }?>
     </div>
     <?php while ( have_posts() ) : the_post(); ?>
	<div class="content_inner">
    <h2>求人募集掲示板</h2>
    <?php if(is_user_logged_in()): ?>
    	<?php get_template_part( 'inc_register_check' ); ?>
    <?php endif;?>
    <h3><?php the_title();?></h3>
    <p class="post_time">投稿日時: <time><?php the_time("Y/m/d H:i");?></time></p>
    <dl class="cf">
		<dt><img src="<?php echo get_template_directory_uri(); ?>/images/single/label_name.jpg" width="102" height="21" alt="投稿者名"></dt>
		<dd><?php the_author_meta( nickname ); ?></dd>
		<dt><img src="<?php echo get_template_directory_uri(); ?>/images/single/label_email.jpg" width="102" height="21" alt="連絡先名"></dt>
        <dd><?php the_author_meta( email ); ?></dd>
    </dl>

    <table width="100%" class="fourm_single_table">
    	<tr>
        	<th>求人種別</th>
            <td><?php the_field('recruit_type');?></td>
        </tr>
        <tr>
        	<th>企業種別</th>
            <td><?php the_field('recruit_compnay');?></td>
        </tr>
        <tr>
        	<th>業種</th>
            <td><?php the_field('recruit_business');?></td>
        </tr>
        <tr>
        	<th>職種</th>
            <td><?php the_field('recruit_job');?></td>
        </tr>
        <tr>
        	<th>雇用形態</th>
            <td><?php the_field('recruit_employment');?></td>
        </tr>
        <tr>
        	<th>勤務エリア</th>
            <td><?php the_field('recruit_area');?></td>
        </tr>
        <tr>
        	<th>ワーキングホリデービザの可否</th>
            <td><?php the_field('recruit_visa');?></td>
        </tr>
        <tr>
        	<th>英語力</th>
            <td><?php the_field('recruit_en');?></td>
        </tr>
        <tr>
        	<th>会社名</th>
            <td><?php the_field('recruit_name');?></td>
        </tr>
        <tr>
        	<th>連絡先電話番号</th>
            <td><?php the_field('recruit_tel');?></td>
        </tr>
        <tr>
        	<th>企業ホームページ</th>
            <td><?php the_field('recruit_hp');?></td>
        </tr>
        <tr>
        	<th>内容詳細</th>
            <td><?php echo nl2br(apply_filters('the_content', $post->post_content));?></td>
        </tr>
        
    </table>
	<div class="delete_btn_area">
    	<?php get_template_part( 'inc_delete_check' ); ?><br>
   	</div>
    <?php comments_template('',true); ?>

  <?php endwhile; // end of the loop. ?>
   <a href="<?php echo home_url(); ?>/forum_recruit/" class="btn_blue right_btn">求人募集掲示板スレッド一覧に戻る</a>
   </div>
</div>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
