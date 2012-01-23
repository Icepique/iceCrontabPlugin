<?php

require_once dirname(__FILE__).'/../../../../test/bootstrap/unit.php';
require_once dirname(__FILE__).'/../../lib/IceCrontabParser.class.php';

$t = new lime_test(6, new lime_output_color());
$cron = new IceCronParser();

$t->diag('::calcLastRun()');

  $string = '0,12,30-51 3,21-23,10 1-25 9-12,1 0,3-7';
  $t->is($cron->calcLastRan($string), true);
  
  $string = "0,12,30-51 3,21-23,10 1-25 9-12,1 0,3-7";
  $t->is($cron->calcLastRan($string), true);

  $string = "0-60 10-12 * * *";
  $t->is($cron->calcLastRan($string), true);

  $string = "*/5 10-12 * * *";
  $t->is($cron->calcLastRan($string), true);
  
  $string = "17 15 * * * fuel_prices_leech";
  $t->is($cron->calcLastRan($string), true);
  
  $string = "17 15 B * * fuel_prices_leech";
  $t->is($cron->calcLastRan($string), false);
