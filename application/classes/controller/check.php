<?php defined('SYSPATH') or die('No direct script access.');

/**
 * @since 0.1
 * @package Valify
 */
class Controller_Check extends Controller {

	public function action_index()
	{
		if (! Kohana::$is_cli) {
			throw new HTTP_Exception_403;
		}

		ORM::factory('check')
			->run();
		exit(0);
	}
}
