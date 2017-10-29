<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>


<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
		<input type="search" name="s" placeholder="type to search...">


		<button type="submit" class="biss-btn biss-btn-primary"><i class="fa fa-search"></i></button>
</form>
