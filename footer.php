<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fromscratch
 */

?>


	<footer id="colophon" class="site-footer py-5">
		<div class="site-info align-self-center px-3">
		<?php echo "<a href='https://creativecommons.org/licenses/by-sa/4.0/'>Algunos Derechos Reservados</a> || <a href='#'>Aviso Legal</a> || " ?>
							<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( '%1$s by %2$s.', 'fromscratch' ), 'fromscratch', '<a href="https://marcosmarti.org">Marcos Martí</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
</div> <!-- container -->
</div>
<?php wp_footer(); ?>

</body>
</html>