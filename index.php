<?php
global $conn;

header('Content-Type: text/html; charset=utf-8');
define("ABSPATH",dirname(__FILE__)."/");// absolute path

define("PARTS",ABSPATH."parts/");// parts
define("FUNCS",ABSPATH."include/");// include functions

// connection
require_once(FUNCS."conn.php");

// include
include(FUNCS."edit-cog.php");
include(FUNCS."db_load.php");
include(FUNCS."utils.php");

$edit = isset($_GET['edit']) ? $_GET['edit'] : NULL;

if ($edit == NULL)
{
  include_once(PARTS."main.php");
  exit();
}

include_once(PARTS."edit.html");