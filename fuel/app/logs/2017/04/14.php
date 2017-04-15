<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

ERROR - 2017-04-14 02:45:01 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY ev.BegTime ASC' at line 1 with query: "SELECT ev.EventId as eventId, ev.BegTime, ev.EndTime, ev.Title, ev.Venue, ev.Date FROM Event AS ev LEFT JOIN UserEvent AS ue ON ev.EventId = ue.EventId WHERE ue.UserTel =  ORDER BY ev.BegTime ASC;" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-14 02:47:59 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY ev.BegTime ASC' at line 1 with query: "SELECT ev.EventId as eventId, ev.BegTime, ev.EndTime, ev.Title, ev.Venue, ev.Date FROM Event AS ev LEFT JOIN UserEvent AS ue ON ev.EventId = ue.EventId WHERE ue.UserTel =  ORDER BY ev.BegTime ASC;" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-14 02:48:11 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY ev.BegTime ASC' at line 1 with query: "SELECT ev.EventId as eventId, ev.BegTime, ev.EndTime, ev.Title, ev.Venue, ev.Date FROM Event AS ev LEFT JOIN UserEvent AS ue ON ev.EventId = ue.EventId WHERE ue.UserTel =  ORDER BY ev.BegTime ASC;" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-14 02:55:33 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY ev.BegTime ASC' at line 1 with query: "SELECT ev.EventId as eventId, ev.BegTime, ev.EndTime, ev.Title, ev.Venue, ev.Date FROM Event AS ev LEFT JOIN UserEvent AS ue ON ev.EventId = ue.EventId WHERE ue.UserTel =  ORDER BY ev.BegTime ASC;" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-14 02:59:38 --> Fatal Error - Uncaught Fuel\Core\PhpErrorException: Array to string conversion in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php:100
Stack trace:
#0 /Users/masamichi/work/web_v3/fuel/core/bootstrap.php(103): Fuel\Core\Errorhandler::error_handler(8, 'Array to string...', '/Users/masamich...', 100)
#1 /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php(100): {closure}(8, 'Array to string...', '/Users/masamich...', 100, Array)
#2 [internal function]: Controller_Main->action_userpage()
#3 /Users/masamichi/work/web_v3/fuel/core/classes/request.php(454): ReflectionMethod->invokeArgs(Object(Controller_Main), Array)
#4 /Users/masamichi/work/web_v3/public/index.php(71): Fuel\Core\Request->execute()
#5 /Users/masamichi/work/web_v3/public/index.php(92): {closure}()
#6 {main}
  thrown in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php on line 100
ERROR - 2017-04-14 02:59:41 --> Fatal Error - Uncaught Fuel\Core\PhpErrorException: Array to string conversion in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php:100
Stack trace:
#0 /Users/masamichi/work/web_v3/fuel/core/bootstrap.php(103): Fuel\Core\Errorhandler::error_handler(8, 'Array to string...', '/Users/masamich...', 100)
#1 /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php(100): {closure}(8, 'Array to string...', '/Users/masamich...', 100, Array)
#2 [internal function]: Controller_Main->action_userpage()
#3 /Users/masamichi/work/web_v3/fuel/core/classes/request.php(454): ReflectionMethod->invokeArgs(Object(Controller_Main), Array)
#4 /Users/masamichi/work/web_v3/public/index.php(71): Fuel\Core\Request->execute()
#5 /Users/masamichi/work/web_v3/public/index.php(92): {closure}()
#6 {main}
  thrown in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php on line 100
ERROR - 2017-04-14 03:02:39 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY ev.BegTime ASC' at line 1 with query: "SELECT ev.EventId as eventId, ev.BegTime, ev.EndTime, ev.Title, ev.Venue, ev.Date FROM Event AS ev LEFT JOIN UserEvent AS ue ON ev.EventId = ue.EventId WHERE ue.UserTel =  ORDER BY ev.BegTime ASC;" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-14 03:07:17 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY ev.BegTime ASC' at line 1 with query: "SELECT ev.EventId as eventId, ev.BegTime, ev.EndTime, ev.Title, ev.Venue, ev.Date FROM Event AS ev LEFT JOIN UserEvent AS ue ON ev.EventId = ue.EventId WHERE ue.UserTel =  ORDER BY ev.BegTime ASC;" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
