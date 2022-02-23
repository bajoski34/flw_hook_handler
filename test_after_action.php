<?php

   /*
    *Plugin Name: Flutterwave After hook
    *Plugin URI: https://app.flutterwave.com/
    *Description: Official WooCommerce payment gateway for Rave.
    *Version: 0.0.1
    *Author: Flutterwave Developers
    *Author URI: http://developer.flutterwave.com
    *License: MIT License
    */


	function flw_echo_hello_js()
	{
	     echo '<script> alert("you just recieved a webhook from Fluterwave!.");</script>';
	}

	add_action('flw_webhook_after_action', 'flw_echo_hello_js');

?>
