<?php defined('SYSPATH') or die('No direct script access.');

/**
 * @since 0.1
 * @package Valify
 */
class Controller_Dash extends Controller_Main {

	public function action_index()
	{

		$site_id = $this->request->query('site_id') ? $this->request->query('site_id') : 1;

		$this->content->site = ORM::factory('site', $site_id);
		$this->content->last_check = $this->content->site->last_check();

	}

	public function action_graph()
	{

		$c = ORM::factory('check')
			->where('site_id', '=', (int) $this->id)
			->find_all();

		if (! $c->count()) {
			$this->respond(Controller_Ajax::STATUS_BAD_REQUEST);
		}

		$data = array();

		foreach ($c as $check) {
			$data[] = array(strtotime($check->date), (int) $check->errors);
		}

		$this->respond(Controller_Ajax::STATUS_OK, $data);
	}
} 
