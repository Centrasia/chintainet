<?php get_header(); ?>
<div id="contents" class="property_area page_area forum_single">
  <div id="main_contents" class="cf">
     <div class="breadcrumbs">
     <?php if(function_exists('bcn_display')){ bcn_display(); }?>
     </div>
     <?php while ( have_posts() ) : the_post(); ?>
	<div class="content_inner">
    <h2>お部屋・物件紹介掲示板</h2>
    <?php if(is_user_logged_in()): ?>
    	<?php get_template_part( 'inc_register_check' ); ?>
    <?php endif;?>
    <h3><?php the_title();?></h3>
    <p class="post_time">投稿日時: <time><?php the_time("Y/m/d H:i");?></time></p>
    <dl class="cf">
		<dt><img src="<?php echo get_template_directory_uri(); ?>/images/single/label_name.jpg" width="102" height="21" alt="投稿者名"></dt>
		<dd><?php the_author_meta( nickname ); ?></dd>
        
<!-- 		<dt><img src="<?php echo get_template_directory_uri(); ?>/images/single/label_email.jpg" width="102" height="21" alt="連絡先名"></dt>
        <dd><?php //the_author_meta( email ); ?></dd>
 -->    </dl>

    <table width="100%" class="fourm_single_table">
    	<tr>
        	<th>目的</th>
            <td><?php the_field('property_cat');?></td>
        </tr>
        <tr>
        	<th>エリア</th>
            <td><?php the_field('property_area');?></td>
        </tr>
        <tr>
        	<th>物件タイプ</th>
            <td><?php the_field('property_type');?></td>
        </tr>
        <tr>
        	<th>間取りタイプ</th>
            <td><?php the_field('property_madori');?></td>
        </tr>
        <tr>
        	<th>家賃</th>
            <td><?php the_field('property_pay');?></td>
        </tr>
        <tr>
            <th>お部屋写真</th>
            <td>
                <?php for($i=1;$i<5;$i++){?>
                <?php $a = get_field('propety_image0'.$i);
                $b = wp_get_attachment_image_src($a,"full");
                if(get_field('propety_image0'.$i)){?><a href="<?php echo $b[0];?>"><img class="img<?php echo $i;?>" style="width:150px;height:150px;" src="<?php echo $b[0];?>" ></a><?php }?>
                <?php }?>
            </td>
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
   <a href="<?php echo home_url(); ?>/forum_property/" class="btn_blue right_btn">お部屋・物件紹介掲示板スレッド一覧に戻る</a>
   </div>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

