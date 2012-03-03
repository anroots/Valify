<?php defined('SYSPATH') or die('No direct script access.');

/**
 * @since 0.1
 * @package Valify
 */
class Controller_Check extends Controller_Ajax
{

    public function action_index()
    {
        $c = ORM::factory('check')
            ->run();
        if (!$c) {
            $this->response->body(__('Error'));
        } else {
            if ($this->request->query('debug')) {
                $str = trim(implode(', ', $c), ', ');
                $this->response->body(__('Checked sites :sites.', array(':sites' => $str)));
            }
        }
    }

    public function action_graph()
    {

        $c = ORM::factory('check')
            ->where('site_id', '=', (int)$this->id)
            ->find_all();

        if (!$c->count()) {
            $this->respond(Controller_Ajax::STATUS_BAD_REQUEST);
        }

        $data = array();

        foreach ($c as $check) {
            $data[] = array(strtotime($check->date), (int)$check->errors);
        }

        $this->respond(Controller_Ajax::STATUS_OK, $data);
    }
} 
