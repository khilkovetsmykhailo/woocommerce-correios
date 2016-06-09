<?php
/**
 * Correios Registered Letter shipping method.
 *
 * @package WooCommerce_Correios/Classes/Shipping
 * @since   3.0.0
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Registered Letter shipping method class.
 */
class WC_Correios_Shipping_Registered_Letter extends WC_Correios_Shipping {

	/**
	 * Initialize Registered Letter.
	 *
	 * @param int $instance_id Shipping zone instance.
	 */
	public function __construct( $instance_id = 0 ) {
		parent::__construct( $instance_id );

		$this->id           = 'correios-registered-letter';
		$this->method_title = __( 'Registered Letter', 'woocommerce-correios' );
		$this->more_link    = 'http://www.correios.com.br/para-voce/correios-de-a-a-z/carta-comercial';

		/**
		 * 10014 - Registered Letter.
		 */
		$this->code = '10014';
	}

	/**
	 * Get behavior options.
	 * Include extra options.
	 *
	 * @return array
	 */
	protected function get_behavior_options() {
		return array(
			'price_table' => array(
				'title'       => __( 'Price table', 'woocommerce-correios' ),
				'type'        => 'select',
				'description' => __( 'Allow you to select between Commercial and Non-Commercial price table.', 'woocommerce-correios' ),
				'desc_tip'    => true,
				'default'     => 'commercial',
				'class'       => 'wc-enhanced-select',
				'options'     => array(
					'commercial'    => __( 'Commercial', 'woocommerce-correios' ),
					'noncommercial' => __( 'Non-Commercial', 'woocommerce-correios' ),
				),
			),
		);
	}
}
