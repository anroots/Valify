<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @since 0.1
 * @package Valify
 */
class Controller_Main extends Commoneer_Controller_Template
{

    public function before()
    {
        parent::before();
        View::set_global('sites', ORM::factory('site')->get()->as_array('id', 'url'));
    }

}
