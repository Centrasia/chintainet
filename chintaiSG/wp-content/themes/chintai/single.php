<?php get_header(); ?>
<?php
	$cat = get_the_category();
	$cat = $cat[0];

	$cat_ID = $cat->cat_ID; // カテゴリーID
	$cat_name = $cat->cat_name; // カテゴリー名
 	$cat_nicename = $cat->category_nicename; // カテゴリースラッグ
	$cat_description = $cat->category_description; // カテゴリー説明文
	$cat_parent = $cat->category_parent; // 親カテゴリーのカテゴリーID
	//親カテゴリーがない場合は「0」を返す
	$cat_count = $cat->category_count; // カテゴリーが使われている回数
?>

<div id="contents" class="single_area page_area">
  <div id="main_contents" class="cf">
     <div class="breadcrumbs">
     <?php if(function_exists('bcn_display')){ bcn_display(); }?>
     </div>
  <?php while ( have_posts() ) : the_post(); ?>
	<div class="content_inner">
    <h2><?php echo $cat_name;?></h2>
    <h3><?php the_title(); ?></h3>
    <p class="post-time"><?php the_time('Y年m月d日(D)');?></p>
    <div class="post_contents cf">
    <?php the_content();?>
	</div>
  <?php endwhile; // end of the loop. ?>
  </div>
</div>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
