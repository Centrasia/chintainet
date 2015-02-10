<?php get_header(); ?>
<div id="contents" class="page_area <?php echo $post->post_name;?>_page post_list_page">
	<div id="main_contents" class="cf">
        <div class="breadcrumbs">
          <?php if(function_exists('bcn_display')){ bcn_display(); }?>
        </div>
        <section>
	 	<h2>総合掲示板</h2>
        <?php get_template_part( 'inc_register_check' ); ?>
        <?php get_template_part( 'inc_search_forum_community' ); ?>
         <h3>スレッド一覧</h3>
			<?php get_template_part( 'inc_login_check_community' ); ?>
			<table width="100%" class="bbs_table">
                <tr>
                    <!-- <th width="">タイトル</th> -->
                    <th>タイトル</th>
                    <th width="150">目的</th>
            <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
                <tr>
                    <td><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title() ?></a></td>
                    <td><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_list_cf_checkbox($post->ID,'community_cat');?></a></td>

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
