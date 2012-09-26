<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Check model
 *
 * @since 0.1
 * @package Valify
 */
class Model_Check extends Commoneer_ORM {

	protected $_belongs_to = array(
		'site' => array()
	);

	public function __construct($id = NULL)
	{
		parent::__construct($id);
		require_once 'Services/W3C/HTMLValidator.php';
	}

	/**
	 * Run validation checks
	 *
	 * @since 0.1
	 * @return array
	 */
	public function run()
	{
		$sites = ORM::factory('site')
			->where('deleted', '=', 0)
			->find_all();

		foreach ($sites as $site) {

			$w3c = $this->_w3c($site->url);

			$c = ORM::factory('check');
			$c->site_id = $site->id;
			$c->errors = $w3c['errors'];
			$c->warnings = $w3c['warnings'];
			$c->save();
		}
		return $sites->as_array(NULL, 'id');
	}

	/**
	 * Query W3C API
	 *
	 * @since 0.1
	 * @param string $url
	 * @return array
	 */
	protected function _w3c($url)
	{
		if (empty($url)) {
			return NULL;
		}
		$v = new Services_W3C_HTMLValidator();
		$r = $v->validate($url);


		return array('errors' => count($r->errors), 'warnings' => count($r->warnings));
	}
}