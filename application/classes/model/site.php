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
}