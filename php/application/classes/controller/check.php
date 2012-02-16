<?php defined('SYSPATH') or die('No direct script access.');

/**
 * @since 0.1
 * @package Valify
 */
class Controller_Check extends Controller
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
} 
