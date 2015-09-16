<?php
/**
 * The footer sidebar
 *
 */

// Is sidebar-2 NOT active?	If true, then return will terminate the script, go back to where it was called, and not display footer widget area.	
if ( ! is_active_sidebar( 'sidebar-2' ) ) {		
	return;
}
?>

<!-- Basically, if you add widgets to the footer sidebar, this code will display. -->
<div id="supplementary">
	<div id="footer-widgets" class="footer-widgets widget-area clear" role="complementary">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div><!-- #footer-sidebar -->
</div><!-- #supplementary -->