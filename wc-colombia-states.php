<?php
/*
Plugin Name: WC Colombia States
Plugin URI:
Description: Add Colombian states to WooCommerce
Version: 1.0
Author: @hachesilva
Author URI: http://hachesilva.com
License: GPL2
*/

/*
 * Die if the file is accessed directly
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*
 * Check if WooCommerce is active
 */
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	add_filter( 'woocommerce_states', 'wc_colombia_states' );

	/**
	 * Ensure that what is going to happen as a parameter is an "Array" so that it does notthrow an error, or even we could not pass anything as a parameter because the states are already defined.
	 *
	 * @param $states
	 *
	 * @return array
	*/

	function wc_colombia_states( array $states = null ) {
		$states['CO'] = array(
			'AMA' => 'Amazonas',
			'ANT' => 'Antioquia',
			'ARA' => 'Arauca',
			'ATL' => 'Atlántico',
			'BOL' => 'Bolívar',
			'BOY' => 'Boyacá',
			'CAL' => 'Caldas',
			'CAQ' => 'Caquetá',
			'CAS' => 'Casanare',
			'CAU' => 'Cauca',
			'CES' => 'Cesar',
			'CHO' => 'Chocó',
			'COR' => 'Córdoba',
			'CUN' => 'Cundinamarca',
			'GUA' => 'Guainía',
			'GUV' => 'Guaviare',
			'HUI' => 'Huila',
			'LAG' => 'La Guajira',
			'MAG' => 'Magdalena',
			'MET' => 'Meta',
			'NAR' => 'Nariño',
			'NSA' => 'Norte de Santander',
			'PUT' => 'Putumayo',
			'QUI' => 'Quindio',
			'RIS' => 'Risaralda',
			'SAP' => 'San Andrés y Providencia',
			'SAN' => 'Santander',
			'SUC' => 'Sucre',
			'TOL' => 'Tolima',
			'VAC' => 'Valle del Cauca',
			'VAU' => 'Vaupés',
			'VID' => 'Vichada'
		);

		return $states;
	}
}
