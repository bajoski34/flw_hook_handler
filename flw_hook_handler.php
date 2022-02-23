<?php

   /*
    *Plugin Name: Flutterwave WooCommerce Hook Handler
    *Plugin URI: https://app.flutterwave.com/
    *Description: Official WooCommerce payment gateway for Rave.
    *Version: 0.0.1
    *Author: Flutterwave Developers
    *Author URI: http://developer.flutterwave.com
    *License: MIT License
    */


	function handle_success_hook( $response )
	{
	     // make a call to your server to update you transaction
	}

     function handle_failed_hook( $response )
     {
         // make a call to your server to update you transaction
     }

	add_action('flw_webhook_after_action', 'handle_success_hook');
     add_action('flw_webhook_transaction_failure_action', 'handle_failed_hook');

?>