<?php
/**
 * Correios SEDEX 10 shipping method.
 *
 * @package WooCommerce_Correios/Classes/Shipping
 * @since   3.0.0
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * SEDEX 10 shipping method class.
 */
class WC_Correios_Shipping_SEDEX_10 extends WC_Correios_Shipping {

	/**
	 * Initialize SEDEX 10.
	 *
	 * @param int $instance_id Shipping zone instance.
	 */
	public function __construct( $instance_id = 0 ) {
		$this->id           = 'correios-sedex10';
		$this->method_title = __( 'SEDEX 10', 'woocommerce-correios' );
		$this->more_link    = 'http://www.correios.com.br/para-voce/correios-de-a-a-z/sedex-10';

		parent::__construct( $instance_id );
	}

	/**
	 * Get Correios service code.
	 *
	 * 40215 - SEDEX 10 without contract.
	 *
	 * @return string
	 */
	public function get_code() {
		$code = '40215';

		return apply_filters( 'woocommerce_correios_shipping_method_code', $code, $this->id, $this->instance_id );
	}
}
