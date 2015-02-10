<?php
//スラッグを取得
	get_header();
?>
<div id="contents" class="page_area 404_page">
	<div id="main_contents" class="cf">
        <div class="breadcrumbs">
          <?php if(function_exists('bcn_display')){ bcn_display(); }?>
        </div>
	<div class="content_inner">
     
		<h2>404 Not Found</h2>
        <div class="post_contents">   
            <p>指定のページまたはスレッドは存在しません。</p>
        </div>
        </div>
    </div>

    <?php get_sidebar();?>
</div>
<!-- / #contents .page-area -->

<?php get_footer(); ?>