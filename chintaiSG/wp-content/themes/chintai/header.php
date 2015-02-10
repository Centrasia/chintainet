<?php 
if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
    header('X-UA-Compatible: IE=edge,chrome=1');
?>
<!doctype html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title('&lt;&lt;', true, 'right'); bloginfo('name');?></title>
<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" />
<?php wp_enqueue_script('common_ch',get_template_directory_uri() . '/js/common.js', array('jquery'), '1.1');?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv-printshiv.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<div id="header_area" class="cf">

	<div class="header_inner">
    	<h1 class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.jpg" width="357" height="128" alt="NET賃貸・移住生活 シンガポール LIFESTYLE MEDIA SINGAPORE FOR JAPANESE"></a></h1>
        <div class="site-description"><?php bloginfo( 'description' )?></div>
        <aside>
        	<ul>
            	<li class="header_top_navi01"><a href="<?php echo get_page_link(13); ?>">運営元概要</a></li>
                <li class="header_top_navi02"><a href="<?php echo get_page_link(14); ?>">広告掲載について</a></li>
            </ul>
        </aside>
<!--        <div class="header-navi_area">
        	<nav>
            	<ul>
                	<li><a href="<?php echo home_url(); ?>/lifestyle_cat/area/">地域情報</a></li>
                    <li><a href="<?php echo home_url(); ?>/lifestyle_cat/situation/">賃貸情報</a></li>
                    <li><a href="<?php echo home_url(); ?>/lifestyle/">生活情報</a></li>
                    <li><a href="<?php echo home_url(); ?>">観光情報</a></li>
                    <li><a href="<?php echo home_url(); ?>/forum/recruit/">求人情報</a></li>
                    <li><a href="<?php echo home_url(); ?>/forum/">掲示板</a></li>
                </ul>
            </nav>
        </div>
-->
        <div class="header_banner">
        	<a href="http://singaportal.net" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/header_bigbnr01.png" width="728" height="90" alt="シンガポールでの法人設立ならシンガポータル"></a>
        </div>
    </div>
</div>
<!-- / #header_area .cf -->
<div id="main-navi_area">
	<div class="main-navi_inner">
    	<nav>
        	<ul class="cf">
            	<li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/menu_home.jpg" width="113" height="53" alt="ホーム"></a></li>
                <li><a href="<?php echo home_url(); ?>/lifestyle/"><img src="<?php echo get_template_directory_uri(); ?>/images/common/menu_2.jpg" width="204" height="53" alt="初心者向け！まずはここから シンガポール生活情報"></a></li>
                <li><a href="<?php echo home_url(); ?>/forum_property/"><img src="<?php echo get_template_directory_uri(); ?>/images/common/menu_3.jpg" width="290" height="53" alt="個人で貸したい！借りたい！ お部屋・物件紹介掲示板"></a></li>
                <li class="ml0"><a href="<?php echo home_url(); ?>/agent/"><img src="<?php echo get_template_directory_uri(); ?>/images/common/menu_4.jpg" width="167" height="53" alt="賃貸物件探しをプロに相談 賃貸エージェント紹介"></a></li>
                <li class="ml0"><a href="<?php echo home_url(); ?>/property/"><img src="<?php echo get_template_directory_uri(); ?>/images/common/menu_5.jpg" width="209" height="53" alt="キレイなコンドミニアム物件 人気賃貸コンドミニアム紹介"></a></li>
                <li><a href="<?php echo home_url(); ?>/forum_recruit/"><img src="<?php echo get_template_directory_uri(); ?>/images/common/menu_6.jpg" width="256" height="53" alt="シンガポールで人材募集 求人募集掲示板"></a></li>
            </ul>
        </nav>
    </div>
</div><!-- / #main-navi_area -->


<div id="contants-wrap" class="cf">
	<div class="container">
    
  