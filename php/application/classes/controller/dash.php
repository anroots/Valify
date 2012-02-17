<?php defined('SYSPATH') or die('No direct script access.');

/**
 * @since 0.1
 * @package Valify
 */
class Controller_Dash extends Controller_Main
{

    public function action_index() {

        $site_id =1;

        $this->content->site = ORM::factory('site',$site_id);
        $this->content->last_check =$this->content->site->last_check();

    }
    public function action_stats()
    {
        $this->content->sites = ORM::factory('site')
            ->find_all();
        $this->content->checks = ORM::factory('check')
            ->order_by('date', 'desc')
            ->group_by('site_id')
            ->find_all();
    }
} 
