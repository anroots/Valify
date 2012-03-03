<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Site model
 *
 * @since 0.1
 * @package Valify
 */
class Model_Site extends Commoneer_ORM
{
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


    /**
     * @return mixed
     */
    public function last_check()
    {
        return $this->checks
            ->order_by('date', 'DESC')
            ->find();
    }


    /**
     * @since 0.2
     * @static
     * @return mixed
     */
    public static function current()
    {
        if (Model_Site::$_current === NULL) {
            Model_Site::$_current = ORM::factory('site', Request::current()->query('site_id') ? Request::current()->query('site_id') : Model_Site::DEFAULT_SITE);
        }
        return Model_Site::$_current;
    }
}