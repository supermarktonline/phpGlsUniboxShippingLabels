<?php
/**
 * Created by IntelliJ IDEA.
 * User: david
 * Date: 10/2/15
 * Time: 3:51 PM
 */

global $errors;
$errors = array();

global $output_json;
$output_json = "";

define('SERVER_BASE',dirname(__FILE__));

require('bootstrap.php');

require('controller/controller.php');
