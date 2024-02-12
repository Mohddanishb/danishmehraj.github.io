<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<!DOCTYPE html>
<html lang="en">
<body>


	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			&copy; <?php 
  $fromYear = 2012; 
  $thisYear = (int)date('Y'); 
  echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> | Danish Mehraj
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

<?php wp_footer(); ?>

</body>
</html>
