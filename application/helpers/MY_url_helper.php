<?php

/*
 * D13HT01 Website Project
 * 
 *  https://d13ht01.tk
 *  (c) 2015 D13HT01
 */

if (!function_exists('assets_url'))
{

	/**
	 * Assets URL
	 *
	 * Tạo link tới thư mục assets
	 *
	 * @param	string	$uri
	 * @param	string	$protocol
	 * @return	string
	 */
	function assets_url($uri = '', $protocol = NULL)
	{
		return base_url('assets/' . $uri, $protocol);
	}

}

// ------------------------------------------------------------------------

if (!function_exists('bower_url'))
{

	/**
	 * Bower Assets URL
	 *
	 * Tạo link tới thư mục bower
	 *
	 * @param	string	$uri
	 * @param	string	$protocol
	 * @return	string
	 */
	function bower_url($uri = '', $protocol = NULL)
	{
		return base_url('vendor/bower/' . $uri, $protocol);
	}

}

// ------------------------------------------------------------------------

