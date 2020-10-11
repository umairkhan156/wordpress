	</div><!-- .main -->


<footer>

	<div class="fatfooter">

		<?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) { ?>
			<div class="one-third left widget-area first">
				<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
			</div><!-- .first .widget-area -->
		<?php } ?>
	
		<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) { ?>
			<div class="one-third left widget-area second">
				<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
			</div><!-- .first .widget-area -->
		<?php } ?>
	
		<?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) { ?>
			<div class="one-third left widget-area third">
				<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
			</div><!-- .first .widget-area -->
		<?php } ?>

	</div>
	
		<div class="" style="
    color: #fff;
    text-align: center;
    background-color: #000;
    width: 100%;
    height: 43px;
    margin-top: 10px;
    padding-top: 13px;
    ">
		        <?php if ( is_active_sidebar( 'copyright-footer-widget-area' ) ) { ?>
		 
				<?php dynamic_sidebar( 'copyright-footer-widget-area' ); ?>
		 
		<?php } ?>
		    </div>

</footer>
	
	<?php wp_footer(); ?>

</body>
</html>

