<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


require_once dirname(__FILE__) . '/Mobile_Detect.php';
//require_once dirname(__FILE__) . '/fpdi/src/autoload.php';



class Mobile extends Mobile_Detect
{
    function __construct()
    {
        parent::__construct();
    }
}
?>