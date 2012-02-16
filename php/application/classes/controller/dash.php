<?php defined('SYSPATH') or die('No direct script access.');

/**
 * @since 0.1
 * @package Valify
 */
class Controller_Dash extends Controller_Main
{

    public function action_index()
    {
        $this->content->sites = ORM::factory('site')
            ->find_all();
        $this->content->checks = ORM::factory('check')
            ->order_by('date', 'desc')
            ->group_by('site_id')
            ->find_all();
    }
} 
