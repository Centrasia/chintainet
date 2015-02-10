<?php get_header(); ?>
<div id="contents" class="page_area <?php echo $post->post_name;?>_page post_list_page">
	<div id="main_contents" class="cf">
        <div class="breadcrumbs">
          <?php if(function_exists('bcn_display')){ bcn_display(); }?>
        </div>
        <section>
	 	<h2>求人募集掲示板</h2>
        <?php get_template_part( 'inc_register_check' ); ?>
        <?php get_template_part( 'inc_search_forum_recruit' ); ?>
         <h3>スレッド一覧</h3>
			<?php get_template_part( 'inc_login_check_recruit' ); ?>
            <table width="100%" class="bbs_table">
                <tr>
                    <th width="">スレッド名</th>
                    <!-- <th width="">会社名</th> -->
                    <th width="150">業種</th>
                    <th width="150">職種</th>
                    <th width="100">雇用形態</th>
                    <th width="150">勤務エリア</th>
                    
                </tr>
            <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
                <tr>
                    <td><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title() ?></a></td>
                    <!-- <td><a href="<?php echo get_permalink($post->ID); ?>"><?php the_field('recruit_name',$post->ID);?></a></td> -->
                    <td><a href="<?php echo get_permalink($post->ID); ?>"><?php the_field('recruit_business',$post->ID);?></a></td>
                    <td><a href="<?php echo get_permalink($post->ID); ?>"><?php the_field('recruit_job',$post->ID);?></a></td>
                    <td><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_list_cf_checkbox($post->ID,'recruit_employment');?></a></td>
                    <td><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_list_cf_checkbox($post->ID,'recruit_area');?></a></td>
                    
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
