<?php
/**
 * Credit Card - Payment instructions.
 *
 * @author  Claudio_Sanches
 * @package WC_MundiPagg/Templates
 * @version 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<div class="woocommerce-message">
	<span><?php printf( __( 'Payment successfully made with %s in %sx.', 'woocommerce-mundipagg' ), '<strong>' . $brand . '</strong>', '<strong>' . $installments . '</strong>' ); ?></span>
</div>
