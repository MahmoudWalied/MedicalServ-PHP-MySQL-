<?php

session_start();

define("BURL", "http://localhost:63343/Medical Project (PHP,MySQL,Ajax)/");
define("BURLA", "http://localhost:63343/Medical Project (PHP,MySQL,Ajax)/admin/");
define("ASSETS", "http://localhost:63343/Medical Project (PHP,MySQL,Ajax)/assets/");

define("BL", __DIR__ . '/');
define("BLA", __DIR__ . '/admin/');


define("BU", "http://localhost:63343/Medical Project (PHP,MySQL,Ajax)/");
define("BUA", "http://localhost:63343/Medical Project (PHP,MySQL,Ajax)/admin/");

// connect to database
require_once(BL . 'functions/db.php');