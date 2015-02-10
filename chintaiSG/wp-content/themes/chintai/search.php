<?php
//スラッグを取得
	get_header();
	$post = get_page($page_id);
?>
<div id="contents" class="page_area search_page">
	<div id="main_contents" class="cf">
    <?php // お部屋・賃貸掲示板検索結果;?>
    <?php if ( '/forum_property/' == ($_GET['_wp_http_referer']) ):?>

		<div class="breadcrumbs">
		<span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Go to 在シンガポール日本人を応援する情報コミュニティーサイト." href="http://local.chintainet" class="home">トップ</a></span> &gt;&gt; 
        <a href="<?php echo home_url(); ?>/forum_property/" title="お部屋・物件紹介掲示板">お部屋・物件紹介掲示板</a> &gt;&gt; 検索結果</div>
        
        <div class="content_inner search_property">
            <h2>検索結果</h2>
            <?php //値受け取り
            $s = $_GET['s'];
            $property_cat = $_GET['property_cat'];
            $property_area = $_GET['property_area'];
            $property_type = $_GET['property_type'];
            $property_madori = $_GET['property_madori'];
			$property_pay = $_GET['property_pay'];
            ?>
             
            <h3>検索条件</h3>
            <p>
             <?php  //検索条件表示・metaquery生成
            //目的
            if ($property_cat) { ?>目的：<?php
                    echo $property_cat;
                }
            ;?>
            <?php
            //エリア
            if (is_array($property_area)) { ?>エリア：<?php
                $val_area = "\"";
                foreach($property_area as $val){
                    
                    if ($val === end($property_area)) {
                        echo $val;
                        $val_area .= $val."\"";
                    }else{
                        echo $val.", ";
                        $val_area .= $val."\",\"";
                        }
                    }
                }
            ;?>
            <?php
            //タイプ
            if (is_array($property_type)) { ?>物件タイプ：<?php
                $val_type = "\"";
                foreach($property_type as $val){
                    
                    if ($val === end($property_type)) {
                        echo $val."\n";
                        $val_type .= $val."\"";
                    }else{
                        echo $val.", ";
                        $val_type .= $val."\",\"";
                        }
                    }
                }
            ;?>
            <?php
            //間取り
            if (is_array($property_madori)) { ?>間取りタイプ：<?php
                $val_madori = "\"";
                foreach($property_madori as $val){
                    
                    if ($val === end($property_madori)) {
                        echo $val;
                        $val_madori .= $val."\"";
                    }else{
                        echo $val.", ";
                        $val_madori .= $val."\",\"";
                        }
                    }
                }
            ;?>
            <?php /*
            //家賃
			if ($property_pay) { ?>家賃：<?php
                    echo esc_html($property_pay);
                }
            */;?>
            <?php 
			if ($s) { ?>キーワード：<?php
                    echo $s;
                }
            ;?>
            </p>
            <h3>検索結果</h3>
                <?php 
                  query_posts( array(
                  'post_type' => 'forum_property' ,
                  'posts_per_page' => 30 ,
                  'order' => ASC,
                  'orderby' => date ,
                  'paged' => get_query_var( 'paged' ),
                  'meta_query' => 
                  array(
                   array( 'key'=>'property_cat',
                    'value'=>$property_cat,
                    'compare'=>'LIKE',
                    ),
                   array( 'key'=>'property_area',
                    'value'=>$val_area,
                    'compare'=>'LIKE',
                    ),
                   array(
                    'key'=>'property_type',
                    'value'=>$val_type,
                    'compare'=>'LIKE'
                    ),
                   array(
                    'key'=>'property_madori',
                    'value'=>$val_madori,
                    'compare'=>'LIKE',
                    ),
					/* array(
                    'key'=>'property_pay',
                    'value'=> $property_pay,
                    'compare'=>'>=',
                    ),*/
                   'relation'=>'AND'
                  )
                 )
                );?>
        	


            <?php if ( have_posts() ) :?>
            <table width="100%" class="bbs_table">
                <tr>
                    <th width="400">タイトル</th>
                    <th width="85">目的</th>
                    <th width="100">エリア</th>
                    <th width="130">物件タイプ</th>
                    <th width="115">間取りタイプ</th>
                </tr>
            <?php while ( have_posts() ) : the_post(); ?>
        
                <tr>
                    <td><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title() ?></a></td>
                    <td><?php the_field('property_cat',$post->ID);?></td>
                    <td><?php the_field('property_area',$post->ID);?></td>
                    <td><?php the_field('property_type',$post->ID);?></td>
                    <td><?php the_field('property_madori',$post->ID);?></td>
                </tr>
                
            <?php endwhile;?>
            </table>
            <?php wp_pagenavi(); ?>
            <a href="<?php echo home_url(); ?>/forum_property/" class="btn_blue right_btn">スレッド一覧に戻る</a>
            <?php else : ?>
            
             <p>該当なし</p>
        
            <?php 
			endif; wp_reset_query();?>
            
           
           <?php // 求人募集掲示板検索結果;?>
           <?php elseif ( '/forum_recruit/' == ($_GET['_wp_http_referer'])):?>
           <div class="breadcrumbs">
			<span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Go to 在シンガポール日本人を応援する情報コミュニティーサイト." href="http://local.chintainet" class="home">トップ</a></span> &gt;&gt; 
        	<a href="<?php echo home_url(); ?>/forum_recruit/" title="求人募集掲示板">求人募集掲示板</a> &gt;&gt; 検索結果</div>
        
       		<div class="content_inner search_recruit">
            <h2>検索結果</h2>
            <?php //値受け取り
            $s = $_GET['s'];
            $recruit_type = $_GET['recruit_type'];
            $recruit_employment = $_GET['recruit_employment'];
            $recruit_visa = $_GET['recruit_visa'];
            $recruit_area = $_GET['recruit_area'];
			$recruit_en = $_GET['recruit_en'];
            ?>
             
            <h3>検索条件</h3>
            <p>
             <?php  //検索条件表示・metaquery生成
            //求人種別
            if ($recruit_type) { ?>求人種別：<?php
                    echo $recruit_type;
                }
            ;?>
            <?php
            //雇用形態
            if (is_array($recruit_employment)) { ?>雇用形態：<?php
                $val_employment = "\"";
                foreach($recruit_employment as $val){
                    
                    if ($val === end($recruit_employment)) {
                        echo $val;
                        $val_employment .= $val."\"";
                    }else{
                        echo $val.", ";
                        $val_employment .= $val."\",\"";
                        }
                    }
                }
            ;?>
            <?php
            //ワーキングホリデービザの可否"
             if ($recruit_visa) { ?>ワーキングホリデービザの可否：<?php
                    echo $recruit_visa;
                }
            ;?>
             <?php
            //エリア
            if (is_array($recruit_area)) { ?>勤務エリア：<?php
                $val_area = "\"";
                foreach($recruit_area as $val){
                    
                    if ($val === end($recruit_area)) {
                        echo $val;
                        $val_area .= $val."\"";
                    }else{
                        echo $val.", ";
                        $val_area .= $val."\",\"";
                        }
                    }
                }
            ;?>
             <?php
            //英語力
             if ($recruit_en) { ?>英語力：<?php
                    echo $recruit_en;
                }
            ;?>
            <?php 
			if ($s) { ?>キーワード：<?php
                    echo $s;
                }
            ;?>
            </p>
            <h3>検索結果</h3>
                <?php 
                  query_posts( array(
                  'post_type' => 'forum_recruit' ,
                  'posts_per_page' => 30 ,
                  'order' => ASC,
                  'orderby' => date ,
                  'paged' => get_query_var( 'paged' ),
                  'meta_query' => 
                  array(
                   array(
				    'key'=>'recruit_type',
                    'value'=> $recruit_type,
                    'compare'=>'LIKE',
                    ),
                   array(
				    'key'=>'recruit_employment',
                    'value'=>$val_employment,
                    'compare'=>'LIKE',
                    ),
                   array(
                    'key'=>'recruit_visa',
                    'value'=>$recruit_visa,
                    'compare'=>'LIKE'
                    ),
                   array(
                    'key'=>'recruit_en',
                    'value'=>$recruit_en,
                    'compare'=>'LIKE',
                    ),
					array(
                    'key'=>'recruit_area',
                    'value'=>$val_area,
                    'compare'=>'LIKE',
                    ),
                   'relation'=>'AND'
                  )
                 )
                );?>
        	


            <?php if ( have_posts() ) :?>
            <table width="100%" class="bbs_table">
                <tr>
                    <th width="">スレッド名</th>
                    <!-- <th width="">会社名</th> -->
                    <th width="150">業種</th>
                    <th width="150">職種</th>
                    <th width="100">雇用形態</th>
                    <th width="150">勤務エリア</th>
                    
                </tr>
            <?php while ( have_posts() ) : the_post(); ?>
        
                <tr>
                    <td><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title() ?></a></td>
                    <!-- <td><a href="<?php echo get_permalink($post->ID); ?>"><?php the_field('recruit_name',$post->ID);?></a></td> -->
                    <td><a href="<?php echo get_permalink($post->ID); ?>"><?php the_field('recruit_business',$post->ID);?></a></td>
                    <td><a href="<?php echo get_permalink($post->ID); ?>"><?php the_field('recruit_job',$post->ID);?></a></td>
                    <td><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_list_cf_checkbox($post->ID,'recruit_employment');?></a></td>
                    <td><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_list_cf_checkbox($post->ID,'recruit_area');?></a></td>
                    
                </tr>
                
            <?php endwhile;?>
            </table>
            <?php wp_pagenavi(); ?>
            <a href="<?php echo home_url(); ?>/forum_recruit/" class="btn_blue right_btn">スレッド一覧に戻る</a>
            <?php else : ?>
            
             <p>該当なし</p>
        
            <?php 
			endif; wp_reset_query();?>
           
           <?php // 総合掲示板検索結果;?>
           <?php elseif ( '/forum_community/' == ($_GET['_wp_http_referer'])):?>
           <div class="breadcrumbs">
			<span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Go to 在シンガポール日本人を応援する情報コミュニティーサイト." href="http://local.chintainet" class="home">トップ</a></span> &gt;&gt; 
        	<a href="<?php echo home_url(); ?>/forum_community/" title="総合掲示板">総合掲示板</a> &gt;&gt; 検索結果</div>
        
       		<div class="content_inner search_recruit">
            <h2>検索結果</h2>
            <?php //値受け取り
            $s = $_GET['s'];
            $community_cat = $_GET['community_cat'];
            ?>
             
            <h3>検索条件</h3>
            <p>
             <?php  //検索条件表示・metaquery生成

            //目的
            if (is_array($community_cat)) { ?>目的：<?php
                $val_cat = "\"";
                foreach($community_cat as $val){
                    
                    if ($val === end($community_cat)) {
                        echo $val;
                        $val_cat .= $val."\"";
                    }else{
                        echo $val.", ";
                        $val_cat .= $val."\",\"";
                        }
                    }
                }
            ;?>
            
            </p>
            <h3>検索結果</h3>
                <?php 
                  query_posts( array(
                  'post_type' => 'forum_community' ,
                  'posts_per_page' => 30 ,
                  'order' => ASC,
                  'orderby' => date ,
                  'paged' => get_query_var( 'paged' ),
                  'meta_query' => 
                  array(
					array(
                    'key'=>'community_cat',
                    'value'=>$val_cat,
                    'compare'=>'LIKE',
                    ),
                   'relation'=>'AND'
                  )
                 )
                );?>
        	


            <?php if ( have_posts() ) :?>
            <table width="100%" class="bbs_table">
                <tr>
                    <th width="">スレッド名</th>
                    <th width="150">目的</th>
                </tr>
            <?php while ( have_posts() ) : the_post(); ?>
        
                <tr>
                    <td><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title() ?></a></td>
                    <td><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_list_cf_checkbox($post->ID,'community_cat');?></a></td>
                    
                </tr>
                
            <?php endwhile;?>
            </table>
            <?php wp_pagenavi(); ?>
            <a href="<?php echo home_url(); ?>/forum_community/" class="btn_blue right_btn">スレッド一覧に戻る</a>
            <?php else : ?>
            
             <p>該当なし</p>
        
            <?php 
			endif; wp_reset_query();?>
           
           <?php else:?>
                <div class="breadcrumbs">
                  <?php if(function_exists('bcn_display')){ bcn_display(); }?>
                </div>
                
                <div class="content_inner">
            <h2>検索結果</h2>
                <?php while ( have_posts() ) : the_post(); ?>
                 
                    <article class="cf">
                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                        <p><?php echo mb_substr(strip_tags($post-> post_content),0,240).'...'; ?></p>
                        <a href="<?php echo home_url(); ?>/agent/" class="btn_blue right_btn">詳しく見る</a>
                   </article>
                    <?php endwhile; // end of the loop. ?>
                <?php wp_pagenavi(); ?>
                <?php endif;?>
          </div><!-- / .content_inner -->
    </div><!-- / #main_contents .cf -->
    <?php get_sidebar();?>
</div>
<!-- / #contents .page-area -->

<?php get_footer(); ?>