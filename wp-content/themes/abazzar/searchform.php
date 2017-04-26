<?php
/**
 * The template for displaying search forms in Underscores.me
 *
 * @package ajkerbazzar
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<div class="input-group">
			<input type="text" class="field form-control" name="s" id="s" placeholder="<?php esc_attr_e( 'কী খুঁজতে চান? &hellip;', 'ajkerbazzar' ); ?>" />
			<span class="input-group-btn">
                            <button type="submit" class="submit btn btn-primary" name="submit" id="searchsubmit"><span aria-hidden="true" class="fa fa-search"></span> <?php esc_attr_e( 'অনুসন্ধান', 'ajkerbazzar' ); ?></button>
			</span>
		</div>
	</form>
