<?php
/**
 * Authenticator loader.
 *
 * @package APIAPIAuthenticatorXAccount
 * @since 1.0.0
 */

if ( ! function_exists( 'apiapi_register_authenticator_x_account' ) ) {

	/**
	 * Registers the authenticator for X header tokens in combination with an account identifier in the base URI.
	 *
	 * It is stored in a global if the API-API has not yet been loaded.
	 *
	 * @since 1.0.0
	 */
	function apiapi_register_authenticator_x_account() {
		if ( function_exists( 'apiapi_manager' ) ) {
			apiapi_manager()->authenticators()->register( 'x-account', 'APIAPI\Authenticator_X\Authenticator_X' );
		} else {
			if ( ! isset( $GLOBALS['_apiapi_authenticators_loader'] ) ) {
				$GLOBALS['_apiapi_authenticators_loader'] = array();
			}

			$GLOBALS['_apiapi_authenticators_loader']['x-account'] = 'APIAPI\Authenticator_X\Authenticator_X';
		}
	}

	apiapi_register_authenticator_x_account();

}
