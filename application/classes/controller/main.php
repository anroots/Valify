<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @since 0.1
 * @package Valify
 */
class Controller_Main extends Controller_Ajax {

	public function before()
	{
		parent::before();

		View::set_global('sites', ORM::factory('site')
			->get());
	}

}
