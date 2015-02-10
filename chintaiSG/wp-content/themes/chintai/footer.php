	</div>
</div>
<div id="footer_area">
	<div class="footer_top_area cf">
		<div class="footer_inner">
        	<a href="#header_area" id="pageTop"><img src="<?php echo get_template_directory_uri(); ?>/images/common/pagetop.png" width="62" height="43" alt="ページトップへ"></a>
            <div class="footer_banner_area">
            	<ul>
                <?php if ( ! dynamic_sidebar('footer-banner') ) : ?>
                <?php endif; // end sidebar widget area ?>
                </ul>
            </div>
    	</div>
   	</div>
    <div class="footer_bottom_area">
    	<div class="footer_inner">

            <div id="footer-navi-wrap">
                 <nav id="footer-navi">
                   <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
                </nav>
            </div><!-- / #footer-navi-wrap -->
            
        </div>
    </div>
    <div class="copyright_area">
    	<div class="footer_inner">
        	<p class="copyright">Copyright&copy; 2014 賃貸・移住生活NETシンガポール All Rights Reserved.</p>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>