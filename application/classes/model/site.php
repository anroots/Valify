<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Site model
 *
 * @since 0.1
 * @package Valify
 */
class Model_Site extends Commoneer_ORM {

	protected $_has_many = array(
		'checks' => array()
	);

	/**
	 * @since 0.2
	 */
	const DEFAULT_SITE = 1;

	/**
	 * @since 0.2
	 * @var
	 */
	protected static $_current;

	public function get($id = NULL, $execute = TRUE)
	{
		$this->where('deleted', '=', 0);
		return parent::get($id, $execute);
	}

	/**
	 * @return mixed
	 */
	public function last_check()
	{
		return $this->checks
			->order_by('date', 'DESC')
			->find();
	}

	public function name()
	{
		return trim(str_replace('http://', NULL, $this->url), ' /');
	}

	/**
	 * @since 0.2
	 * @static
	 * @return mixed
	 */
	public static function current()
	{
		if (Model_Site::$_current === NULL) {
			Model_Site::$_current = ORM::factory('site', Request::current()->query('site_id') ?
				Request::current()->query('site_id') : Model_Site::DEFAULT_SITE);
		}
		return Model_Site::$_current;
	}
}