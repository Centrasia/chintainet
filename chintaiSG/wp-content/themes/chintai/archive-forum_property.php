<?php get_header(); ?>
<div id="contents" class="page_area <?php echo $post->post_name;?>_page post_list_page">
	<div id="main_contents" class="cf">
        <div class="breadcrumbs">
          <?php if(function_exists('bcn_display')){ bcn_display(); }?>
        </div>
        <section>
	 	<h2>お部屋・物件掲示板</h2>
        <?php get_template_part( 'inc_register_check' ); ?>
        <?php get_template_part( 'inc_search_forum_property' ); ?>
         <h3>投稿一覧</h3>
			<?php get_template_part( 'inc_login_check_property' ); ?>
			<table width="100%" class="bbs_table">
                <tr>
                    <!-- <th width="">タイトル</th> -->
                    <th width="">タイトル</th>
                    <th width="150">目的</th>
                    <th width="150">エリア</th>
                    <th width="100">物件タイプ</th>
                    <th width="150">間取り</th>
                    <th width="150">写真</th>
            <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
                <tr>
                    <td><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title() ?></a></td>
                    <td><a href="<?php echo get_permalink($post->ID); ?>"><?php the_field('property_cat',$post->ID);?></a></td>
                    <td><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_list_cf_checkbox($post->ID,'property_area');?></a></td>
                    <td><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_list_cf_checkbox($post->ID,'property_type');?></a></td>
                    <td><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_list_cf_checkbox($post->ID,'property_madori');?></a></td>
                    <td>
                    <?php 
                    if($a = get_field('propety_image01')){
                    $b = wp_get_attachment_image_src($a,"thumbnail");
                    ?>
                    <a href="<?php echo get_permalink($post->ID); ?>"><img src=<?php echo $b[0];?> /></a>
                    <?php }else{?>
                    no photo
                    <?php }?>
                    </td>
                </tr>
             <?php endforeach; endif;?>
            </table>
        <?php wp_pagenavi(); ?>
        </section>
        <?php get_template_part( 'inc_banner' ); ?>
      </div>
    <?php get_sidebar();?>
</div>
<!-- / #contents .page-area -->
<?php get_footer(); ?>
