<?php
/**
 * The template for displaying search forms
 *
 * @package Grace_Mag
 */
?>
<form role="search" method="get" id="search-form" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'grace-mag' ); ?></span>
	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Type Something', 'placeholder', 'grace-mag' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<input type="submit" id="submit" value="<?php echo esc_attr_x( 'Search', 'value', 'grace-mag' ); ?>">
</form>
