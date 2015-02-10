<?php
	get_header();
?>
<div id="home_header" class="cf">
	<div class="main_images">
    	<img src="<?php echo get_template_directory_uri(); ?>/images/home/main-image.jpg" width="780" height="300" alt="住んでいる人も、これから住む人も。シンガポールでの移住・赴任生活情報が盛りだくさんの情報ポータル・コミュティーメディアです。">
    </div>
    <div class="right_area">
        <div class="home_pickup_area cf">
            <h2 class="icon_check">ピックアップ</h2>
                <div class="pickup_left">
                <a href="<?php echo home_url(); ?>/forum_property/"><img src="<?php echo get_template_directory_uri(); ?>/images/home/pickup_01.jpg" width="198" height="136" alt="個人で貸したい!借りたい! お部屋・物件紹介掲示板"></a>
                <a href="<?php echo home_url(); ?>/forum_property/" class="link_right_arrow2"><span>個人で貸したい!借りたい!</span>お部屋・物件紹介掲示板</a>
                </div>
                <div class="pickup_right">
                <a href="<?php echo home_url(); ?>/forum_recruit/"><img src="<?php echo get_template_directory_uri(); ?>/images/home/pickup_02.jpg" width="198" height="136" alt="シンガポールで人材募集 求人募集掲示板"></a>
                <a href="<?php echo home_url(); ?>/forum_recruit/" class="link_right_arrow2"><span>シンガポールで人材募集</span>求人募集掲示板</a>
                </div>
            </div>
        
        <div class="search_area cf">
        <div class="search_title">サイト内<br>検　　索</div>
        <form method="get" action="<?php bloginfo('url'); ?>/">
            <input type="text" name="s" value="<?php echo $_GET['s']; ?>" />
            <input type="image" src="<?php echo get_template_directory_uri(); ?>/images/icon/icon_search.jpg" width="42" height="40">
        </form>
        </div>
    </div>
</div>
<div id="contents" class="home_area">
  <div id="main_contents" class="cf">
  

  <?php get_template_part( 'inc_topic' ); ?>
  <div class="life_area">
  	<a href="<?php echo home_url(); ?>/lifestyle/"><img src="<?php echo get_template_directory_uri(); ?>/images/home/life_iamge.jpg" width="500" height="201" alt="初心者向け! まずはここからシンガポール生活情報"></a>
    <p>シンガポールにまつわる様々な基本的な情報を掲載しております。シンガポールへの移住を検討されている方や赴任・駐在が決まった方など、まだ来星されていない方にはうってつけの情報です。もちろん既に在住されている方にも便利な情報を掲載しております。</p>
    <a href="<?php echo home_url(); ?>/lifestyle/" class="link_right_arrow">シンガポール生活情報を詳しく見る</a>
  </div>
  <div class="agent_condominium_area">
  	<div class="agent_area cf">
    	<a href="<?php echo home_url(); ?>/agent/"><img src="<?php echo get_template_directory_uri(); ?>/images/home/agent_image.jpg" width="161" height="135" alt="賃貸仲介エージェント"></a>
        <p class="read fs12">ややこしい契約はプロに<br>まかせて安心！日本語対応</p>
		<a href="<?php echo home_url(); ?>/agent/"><h3>賃貸エージェント紹介</h3></a>
		<p class="fs11">シンガポールでは賃貸契約の仲介を政府に定められたライセンスを保有したエージェントが行います。</p>
        <a href="<?php echo home_url(); ?>/agent/" class="link_right_arrow">エージェント一覧へ</a>
  	</div>
    <hr>
    <div class="condominium_area cf">
    	<a href="<?php echo home_url(); ?>/property/"><img src="<?php echo get_template_directory_uri(); ?>/images/home/condominium_image.jpg" width="161" height="135" alt="おすすめコンドミニアム"></a>
        <p class="read fs12">人気のコンドミニアム物件を紹介<br>物件選びのご参考に</p>
		<a href="<?php echo home_url(); ?>/property/"><h3>賃貸コンドミニアム紹介</h3></a>
		<p class="fs11">シンガポールでは賃貸契約の仲介を政府に定められたライセンスを保有したエージェントが行います。</p>
        <a href="<?php echo home_url(); ?>/property/" class="link_right_arrow">コンドミニアム一覧へ</a>
  	</div>
  </div>
  
  
  <div class="bbs2_area cf">
  <h2>移住生活NETシンガポール コミュニティー掲示板</h2>
  	<dl>
    	<dt>お部屋・物件紹介掲示板</dt>
        <dd>空いているお部屋・物件を貸します。借りたい。ルームレンタル・シェアメイトの募集に(個人用) <a href="<?php echo home_url(); ?>/forum_property/" class="btn_blue right_btn">掲示板を利用する</a></dd>
    	<dt>求人募集掲示板</dt>
        <dd>シンガポールで働いてくれる人材を募集する掲示板。業種職種別。掲載無料。<a href="<?php echo home_url(); ?>/forum_recruit/" class="btn_blue right_btn">掲示板を利用する</a></dd>
        <dt>総合掲示板</dt>
        <dd>在シンガポール日本人用の総合交流掲示板。売ります・あげます。友達募集。Q&amp;Aなど<a href="<?php echo home_url(); ?>/forum_community/" class="btn_blue right_btn">掲示板を利用する</a></dd>
    </dl>
    <p class="text_right fs11">これから随時掲示板を追加予定！リクエストがあれば<a href="<?php echo get_page_link(15); ?>">お問い合わせフォーム</a>へ</p>
  </div>
  
  
  <div class="book_area">
  <h2>出版関連情報</h2>
  
      <div class="book_box">
        <img src="<?php echo get_template_directory_uri(); ?>/images/home/book1.jpg" width="101" height="147" alt="アジアビジネスベストパートナー ASEAN編">
        <p class="book_title">アジアビジネスベストパートナー ASEAN編</p>
        <p class="book_auteur">ブレインワークス</p>
        <p class="book_discription">賃貸・移住生活NETシンガポールを運営しておりますセントレイジアパートナーズがシンガポール進出のベストパートナーとして掲載さてております。</p>
      </div>
      
      <div class="book_box">
        <img src="<?php echo get_template_directory_uri(); ?>/images/home/book2.jpg" width="95" height="149" alt="サラリーマンから富裕層まで「シンガポールから始まる投資の話」　~日本の常識はシンガポールの非常識~ [Kindle版]">
        <p class="book_title">サラリーマンから富裕層まで「シンガポールから始まる投資の話」　~日本の常識はシンガポールの非常識~ [Kindle版]</p>
        <p class="book_auteur">森山 イズミ</p>
        <p class="book_discription">代表の森山イズミが著した投資入門本です。Kindle版</p>
      </div>
  </div>

  </div>
  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>