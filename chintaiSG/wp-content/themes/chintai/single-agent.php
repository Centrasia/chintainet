<?php get_header(); ?>

<div id="contents" class="agent_area page_area">
  <div id="main_contents" class="cf">
     <div class="breadcrumbs">
     <?php if(function_exists('bcn_display')){ bcn_display(); }?>
     </div>
  <?php while ( have_posts() ) : the_post(); ?>

    <h2>賃貸仲介エージェントのご紹介</h2>
    <div class="agent_box_wrap cf">
    <div class="agent_box_left">
			 <?php
            $image = get_field("ag_image",$post->ID);
            if( !empty($image) ):
            // vars
            $title = $image['title'];
            $alt = $image['alt'];
            $caption = $image['caption'];
         
            // thumbnail
            $size = 'large';
            $thumb = $image['sizes'][ $size ];
            $width = $image['sizes'][ $size . '-width' ];
            $height = $image['sizes'][ $size . '-height' ];
            
        ?>
        <img src="<?php echo $thumb; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_title(); ?>">
        <?php endif;?>
    </div>
    <div class="agent_box_right">
        <h3 class="agent_name"><?php the_title(); ?></h3>
        <ul>
        	<li><img src="<?php echo get_template_directory_uri(); ?>/images/agent/agent_1.jpg" width="102" height="21" alt="所属"><?php the_field('ag_1');?></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/agent/agent_2.jpg" width="102" height="21" alt="ライセンスNo"><?php the_field('ag_2');?></li>
        </ul>
        <?php echo get_list_cf_checkbox($post->ID,'ag_3'); ?>
     <h3>連絡先</h3>
     <ul class="ag_add">
     	<li>お電話でのお問い合わせ・・・<?php the_field('ag_4');?></li>
     	<li>メールでのお問い合わせ・・・<?php the_field('ag_5');?></li>
     </ul>
     <p>URL:<?php the_field('ag_6');?><br />
     ADDRESS:<?php the_field('ag_7');?></p>
        <?php the_content();?>
        
       <div class="agent_border_box">
       	<h4><?php the_field('ag_8');?></h4>
        <p><?php the_field('ag_9');?></p>
       </div>
    </div>
  	</div>
  <?php endwhile; // end of the loop. ?>
   <hr>
   <a href="<?php echo home_url(); ?>/agent/" class="btn_blue right_btn">賃貸エージェント一覧に戻る</a>
<?php get_template_part( 'inc_banner' ); ?>
</div>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
