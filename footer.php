<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->
				<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="page-container footer-links lrg-padding-tb flex">
		<?php dynamic_sidebar('footer-sidebar'); ?>
				</div>
				<p>Copyright &copy; <?php echo date("Y"); ?> Inhabitent</p>
			</footer><!-- #colophon -->
		</div><!-- #page -->
		<?php wp_footer(); ?>
	</body>
</html>
