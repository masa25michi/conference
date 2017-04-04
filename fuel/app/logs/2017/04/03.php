<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

ERROR - 2017-04-03 00:12:24 --> Error - The requested view could not be found: template.php in /Users/masamichi/work/web_v3/fuel/core/classes/view.php on line 440
ERROR - 2017-04-03 00:13:39 --> Notice - Undefined variable: data in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php on line 9
ERROR - 2017-04-03 00:14:23 --> Notice - Undefined variable: data in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php on line 9
ERROR - 2017-04-03 00:14:24 --> Notice - Undefined variable: data in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php on line 9
ERROR - 2017-04-03 06:14:53 --> Error - Could not find asset: Hong_Kong_2017_Logo.png in /Users/masamichi/work/web_v3/fuel/core/classes/asset/instance.php on line 413
ERROR - 2017-04-03 06:20:21 --> Notice - Undefined variable: banner_title in /Users/masamichi/work/web_v3/fuel/app/views/layout/banner.php on line 9
ERROR - 2017-04-03 06:22:40 --> Error - Could not find asset: Hong_Kong_2017_Logo.png in /Users/masamichi/work/web_v3/fuel/core/classes/asset/instance.php on line 413
ERROR - 2017-04-03 06:30:37 --> Error - Could not find asset: Hong_Kong_2017_Logo.jpg in /Users/masamichi/work/web_v3/fuel/core/classes/asset/instance.php on line 413
ERROR - 2017-04-03 06:36:23 --> Notice - Undefined variable: images in /Users/masamichi/work/web_v3/fuel/app/views/layout/banner.php on line 5
ERROR - 2017-04-03 06:38:11 --> Notice - Undefined variable: images in /Users/masamichi/work/web_v3/fuel/app/views/layout/banner.php on line 5
ERROR - 2017-04-03 09:32:05 --> Notice - Undefined variable: banner in /Users/masamichi/work/web_v3/fuel/app/views/template.php on line 20
ERROR - 2017-04-03 09:32:19 --> Notice - Undefined variable: content in /Users/masamichi/work/web_v3/fuel/app/views/template.php on line 22
ERROR - 2017-04-03 04:40:44 --> Error - Controller_Main::action_index() or the controller after() method must return a Response object. in /Users/masamichi/work/web_v3/fuel/core/classes/request.php on line 487
ERROR - 2017-04-03 04:46:28 --> Fatal Error - Class 'Controlelr_Template' not found in /Users/masamichi/work/web_v3/fuel/app/classes/controller/base.php on line 9
ERROR - 2017-04-03 04:46:29 --> Fatal Error - Class 'Controlelr_Template' not found in /Users/masamichi/work/web_v3/fuel/app/classes/controller/base.php on line 9
ERROR - 2017-04-03 04:46:42 --> Error - Controller_Main::action_index() or the controller after() method must return a Response object. in /Users/masamichi/work/web_v3/fuel/core/classes/request.php on line 487
ERROR - 2017-04-03 04:47:38 --> Warning - Creating default object from empty value in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php on line 10
ERROR - 2017-04-03 04:49:39 --> Error - Controller_Main::action_index() or the controller after() method must return a Response object. in /Users/masamichi/work/web_v3/fuel/core/classes/request.php on line 487
ERROR - 2017-04-03 04:49:40 --> Error - Controller_Main::action_index() or the controller after() method must return a Response object. in /Users/masamichi/work/web_v3/fuel/core/classes/request.php on line 487
ERROR - 2017-04-03 10:51:40 --> Notice - Undefined variable: defaultCss in /Users/masamichi/work/web_v3/fuel/app/views/template.php on line 16
ERROR - 2017-04-03 10:53:23 --> Notice - Undefined variable: defaultCss in /Users/masamichi/work/web_v3/fuel/app/views/template.php on line 16
ERROR - 2017-04-03 10:57:55 --> Notice - Undefined variable: defaultCss in /Users/masamichi/work/web_v3/fuel/app/views/template.php on line 16
ERROR - 2017-04-03 10:57:56 --> Notice - Undefined variable: defaultCss in /Users/masamichi/work/web_v3/fuel/app/views/template.php on line 16
ERROR - 2017-04-03 10:58:19 --> Notice - Undefined variable: defaultCss in /Users/masamichi/work/web_v3/fuel/app/views/template.php on line 16
ERROR - 2017-04-03 10:58:20 --> Notice - Undefined variable: defaultCss in /Users/masamichi/work/web_v3/fuel/app/views/template.php on line 16
ERROR - 2017-04-03 10:58:49 --> Notice - Undefined variable: css in /Users/masamichi/work/web_v3/fuel/app/views/template.php on line 17
ERROR - 2017-04-03 10:58:53 --> Notice - Undefined variable: header in /Users/masamichi/work/web_v3/fuel/app/views/template.php on line 21
ERROR - 2017-04-03 10:59:00 --> Notice - Undefined variable: banner in /Users/masamichi/work/web_v3/fuel/app/views/template.php on line 22
ERROR - 2017-04-03 11:00:40 --> Notice - Undefined variable: defaultCss in /Users/masamichi/work/web_v3/fuel/app/views/template.php on line 16
ERROR - 2017-04-03 11:03:45 --> Notice - Undefined variable: header in /Users/masamichi/work/web_v3/fuel/app/views/template.php on line 19
ERROR - 2017-04-03 18:52:05 --> Fatal Error - Uncaught Fuel\Core\PhpErrorException: Object of class Fuel\Core\Validation could not be converted to string in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php:45
Stack trace:
#0 /Users/masamichi/work/web_v3/fuel/core/bootstrap.php(103): Fuel\Core\Errorhandler::error_handler(4096, 'Object of class...', '/Users/masamich...', 45)
#1 /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php(45): {closure}(4096, 'Object of class...', '/Users/masamich...', 45, Array)
#2 [internal function]: Controller_Main->action_userpage()
#3 /Users/masamichi/work/web_v3/fuel/core/classes/request.php(454): ReflectionMethod->invokeArgs(Object(Controller_Main), Array)
#4 /Users/masamichi/work/web_v3/public/index.php(71): Fuel\Core\Request->execute()
#5 /Users/masamichi/work/web_v3/public/index.php(92): {closure}()
#6 {main}
  thrown in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php on line 45
ERROR - 2017-04-03 18:55:58 --> Fatal Error - Uncaught Fuel\Core\PhpErrorException: Array to string conversion in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php:44
Stack trace:
#0 /Users/masamichi/work/web_v3/fuel/core/bootstrap.php(103): Fuel\Core\Errorhandler::error_handler(8, 'Array to string...', '/Users/masamich...', 44)
#1 /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php(44): {closure}(8, 'Array to string...', '/Users/masamich...', 44, Array)
#2 [internal function]: Controller_Main->action_userpage()
#3 /Users/masamichi/work/web_v3/fuel/core/classes/request.php(454): ReflectionMethod->invokeArgs(Object(Controller_Main), Array)
#4 /Users/masamichi/work/web_v3/public/index.php(71): Fuel\Core\Request->execute()
#5 /Users/masamichi/work/web_v3/public/index.php(92): {closure}()
#6 {main}
  thrown in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php on line 44
ERROR - 2017-04-03 18:55:59 --> Fatal Error - Uncaught Fuel\Core\PhpErrorException: Array to string conversion in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php:44
Stack trace:
#0 /Users/masamichi/work/web_v3/fuel/core/bootstrap.php(103): Fuel\Core\Errorhandler::error_handler(8, 'Array to string...', '/Users/masamich...', 44)
#1 /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php(44): {closure}(8, 'Array to string...', '/Users/masamich...', 44, Array)
#2 [internal function]: Controller_Main->action_userpage()
#3 /Users/masamichi/work/web_v3/fuel/core/classes/request.php(454): ReflectionMethod->invokeArgs(Object(Controller_Main), Array)
#4 /Users/masamichi/work/web_v3/public/index.php(71): Fuel\Core\Request->execute()
#5 /Users/masamichi/work/web_v3/public/index.php(92): {closure}()
#6 {main}
  thrown in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php on line 44
ERROR - 2017-04-03 18:56:19 --> Fatal Error - Uncaught Fuel\Core\PhpErrorException: Array to string conversion in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php:45
Stack trace:
#0 /Users/masamichi/work/web_v3/fuel/core/bootstrap.php(103): Fuel\Core\Errorhandler::error_handler(8, 'Array to string...', '/Users/masamich...', 45)
#1 /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php(45): {closure}(8, 'Array to string...', '/Users/masamich...', 45, Array)
#2 [internal function]: Controller_Main->action_userpage()
#3 /Users/masamichi/work/web_v3/fuel/core/classes/request.php(454): ReflectionMethod->invokeArgs(Object(Controller_Main), Array)
#4 /Users/masamichi/work/web_v3/public/index.php(71): Fuel\Core\Request->execute()
#5 /Users/masamichi/work/web_v3/public/index.php(92): {closure}()
#6 {main}
  thrown in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php on line 45
ERROR - 2017-04-03 18:56:20 --> Fatal Error - Uncaught Fuel\Core\PhpErrorException: Array to string conversion in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php:45
Stack trace:
#0 /Users/masamichi/work/web_v3/fuel/core/bootstrap.php(103): Fuel\Core\Errorhandler::error_handler(8, 'Array to string...', '/Users/masamich...', 45)
#1 /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php(45): {closure}(8, 'Array to string...', '/Users/masamich...', 45, Array)
#2 [internal function]: Controller_Main->action_userpage()
#3 /Users/masamichi/work/web_v3/fuel/core/classes/request.php(454): ReflectionMethod->invokeArgs(Object(Controller_Main), Array)
#4 /Users/masamichi/work/web_v3/public/index.php(71): Fuel\Core\Request->execute()
#5 /Users/masamichi/work/web_v3/public/index.php(92): {closure}()
#6 {main}
  thrown in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php on line 45
ERROR - 2017-04-03 18:56:41 --> Notice - Array to string conversion in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php on line 45
ERROR - 2017-04-03 20:15:37 --> Error - View variable is not set: content in /Users/masamichi/work/web_v3/fuel/core/classes/view.php on line 492
ERROR - 2017-04-03 20:15:59 --> Error - View variable is not set: content in /Users/masamichi/work/web_v3/fuel/core/classes/view.php on line 492
ERROR - 2017-04-03 20:16:00 --> Error - View variable is not set: content in /Users/masamichi/work/web_v3/fuel/core/classes/view.php on line 492
ERROR - 2017-04-03 20:16:05 --> Error - View variable is not set: content in /Users/masamichi/work/web_v3/fuel/core/classes/view.php on line 492
ERROR - 2017-04-03 21:30:05 --> 1146 - SQLSTATE[42S02]: Base table or view not found: 1146 Table 'conference.usermodels' doesn't exist with query: "SELECT `t0`.`tel` AS `t0_c0`, `t0`.`email` AS `t0_c1`, `t0`.`name` AS `t0_c2`, `t0`.`id` AS `t0_c3` FROM `usermodels` AS `t0` WHERE `t0`.`tel` = '1' ORDER BY `t0`.`id` ASC LIMIT 1" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-03 21:31:41 --> Error - Class 'Model_Usermodel' not found in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php on line 43
ERROR - 2017-04-03 21:31:51 --> 1146 - SQLSTATE[42S02]: Base table or view not found: 1146 Table 'conference.users' doesn't exist with query: "SELECT `t0`.`tel` AS `t0_c0`, `t0`.`email` AS `t0_c1`, `t0`.`name` AS `t0_c2`, `t0`.`id` AS `t0_c3` FROM `users` AS `t0` WHERE `t0`.`tel` = '1' ORDER BY `t0`.`id` ASC LIMIT 1" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-03 21:33:11 --> 1146 - SQLSTATE[42S02]: Base table or view not found: 1146 Table 'conference.users' doesn't exist with query: "SELECT `t0`.`tel` AS `t0_c0`, `t0`.`email` AS `t0_c1`, `t0`.`name` AS `t0_c2`, `t0`.`id` AS `t0_c3` FROM `users` AS `t0` WHERE `t0`.`tel` = '1' ORDER BY `t0`.`id` ASC LIMIT 1" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-03 21:35:32 --> 1146 - SQLSTATE[42S02]: Base table or view not found: 1146 Table 'conference.users' doesn't exist with query: "SELECT `t0`.`tel` AS `t0_c0`, `t0`.`email` AS `t0_c1`, `t0`.`name` AS `t0_c2`, `t0`.`id` AS `t0_c3` FROM `users` AS `t0` WHERE `t0`.`tel` = '1' ORDER BY `t0`.`id` ASC LIMIT 1" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-03 21:35:33 --> 1146 - SQLSTATE[42S02]: Base table or view not found: 1146 Table 'conference.users' doesn't exist with query: "SELECT `t0`.`tel` AS `t0_c0`, `t0`.`email` AS `t0_c1`, `t0`.`name` AS `t0_c2`, `t0`.`id` AS `t0_c3` FROM `users` AS `t0` WHERE `t0`.`tel` = '1' ORDER BY `t0`.`id` ASC LIMIT 1" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-03 21:35:43 --> 1146 - SQLSTATE[42S02]: Base table or view not found: 1146 Table 'conference.users' doesn't exist with query: "SELECT `t0`.`tel` AS `t0_c0`, `t0`.`email` AS `t0_c1`, `t0`.`name` AS `t0_c2`, `t0`.`id` AS `t0_c3` FROM `users` AS `t0` WHERE `t0`.`tel` = '1' ORDER BY `t0`.`id` ASC LIMIT 1" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-03 21:37:38 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 't0.id' in 'field list' with query: "SELECT `t0`.`tel` AS `t0_c0`, `t0`.`email` AS `t0_c1`, `t0`.`name` AS `t0_c2`, `t0`.`id` AS `t0_c3` FROM `users` AS `t0` WHERE `t0`.`tel` = '1' ORDER BY `t0`.`id` ASC LIMIT 1" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-03 21:37:40 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 't0.id' in 'field list' with query: "SELECT `t0`.`tel` AS `t0_c0`, `t0`.`email` AS `t0_c1`, `t0`.`name` AS `t0_c2`, `t0`.`id` AS `t0_c3` FROM `users` AS `t0` WHERE `t0`.`tel` = '1' ORDER BY `t0`.`id` ASC LIMIT 1" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-03 21:37:40 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 't0.id' in 'field list' with query: "SELECT `t0`.`tel` AS `t0_c0`, `t0`.`email` AS `t0_c1`, `t0`.`name` AS `t0_c2`, `t0`.`id` AS `t0_c3` FROM `users` AS `t0` WHERE `t0`.`tel` = '1' ORDER BY `t0`.`id` ASC LIMIT 1" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-03 21:37:50 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 't0.id' in 'field list' with query: "SELECT `t0`.`tel` AS `t0_c0`, `t0`.`email` AS `t0_c1`, `t0`.`name` AS `t0_c2`, `t0`.`id` AS `t0_c3` FROM `users` AS `t0` WHERE `t0`.`tel` = '1' ORDER BY `t0`.`id` ASC LIMIT 1" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-03 21:40:05 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 't0.id' in 'field list' with query: "SELECT `t0`.`tel` AS `t0_c0`, `t0`.`email` AS `t0_c1`, `t0`.`name` AS `t0_c2`, `t0`.`id` AS `t0_c3` FROM `users` AS `t0`" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-03 21:41:57 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 't0.id' in 'field list' with query: "SELECT `t0`.`tel` AS `t0_c0`, `t0`.`email` AS `t0_c1`, `t0`.`name` AS `t0_c2`, `t0`.`id` AS `t0_c3` FROM `users` AS `t0`" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-03 21:41:58 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 't0.id' in 'field list' with query: "SELECT `t0`.`tel` AS `t0_c0`, `t0`.`email` AS `t0_c1`, `t0`.`name` AS `t0_c2`, `t0`.`id` AS `t0_c3` FROM `users` AS `t0`" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-03 21:41:58 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 't0.id' in 'field list' with query: "SELECT `t0`.`tel` AS `t0_c0`, `t0`.`email` AS `t0_c1`, `t0`.`name` AS `t0_c2`, `t0`.`id` AS `t0_c3` FROM `users` AS `t0`" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-03 21:42:58 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 't0.id' in 'field list' with query: "SELECT `t0`.`tel` AS `t0_c0`, `t0`.`email` AS `t0_c1`, `t0`.`name` AS `t0_c2`, `t0`.`id` AS `t0_c3` FROM `users` AS `t0`" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-03 21:47:57 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 't0.id' in 'field list' with query: "SELECT `t0`.`tel` AS `t0_c0`, `t0`.`email` AS `t0_c1`, `t0`.`name` AS `t0_c2`, `t0`.`id` AS `t0_c3` FROM `users` AS `t0`" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-03 21:49:22 --> 1146 - SQLSTATE[42S02]: Base table or view not found: 1146 Table 'conference.user' doesn't exist with query: "SELECT `t0`.`tel` AS `t0_c0`, `t0`.`email` AS `t0_c1`, `t0`.`name` AS `t0_c2`, `t0`.`id` AS `t0_c3` FROM `user` AS `t0`" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-03 21:49:23 --> 1146 - SQLSTATE[42S02]: Base table or view not found: 1146 Table 'conference.user' doesn't exist with query: "SELECT `t0`.`tel` AS `t0_c0`, `t0`.`email` AS `t0_c1`, `t0`.`name` AS `t0_c2`, `t0`.`id` AS `t0_c3` FROM `user` AS `t0`" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-03 21:49:29 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 't0.id' in 'field list' with query: "SELECT `t0`.`tel` AS `t0_c0`, `t0`.`email` AS `t0_c1`, `t0`.`name` AS `t0_c2`, `t0`.`id` AS `t0_c3` FROM `users` AS `t0`" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-03 21:52:30 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 't0.id' in 'field list' with query: "SELECT `t0`.`tel` AS `t0_c0`, `t0`.`email` AS `t0_c1`, `t0`.`name` AS `t0_c2`, `t0`.`id` AS `t0_c3` FROM `users` AS `t0`" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-03 21:54:54 --> Error - invalid data source name in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 112
ERROR - 2017-04-03 21:55:35 --> 1146 - Table 'conference.cf_users' doesn't exist [ SELECT `cf_users`.* FROM `cf_users` ] in /Users/masamichi/work/web_v3/fuel/core/classes/database/mysqli/connection.php on line 292
ERROR - 2017-04-03 21:58:56 --> Error - invalid data source name in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 112
ERROR - 2017-04-03 21:59:02 --> 1146 - Table 'conference.cf_users' doesn't exist [ SELECT `cf_users`.* FROM `cf_users` ] in /Users/masamichi/work/web_v3/fuel/core/classes/database/mysqli/connection.php on line 292
ERROR - 2017-04-03 22:04:47 --> 1046 - No database selected [ SELECT `t0`.`tel` AS `t0_c0`, `t0`.`email` AS `t0_c1`, `t0`.`name` AS `t0_c2`, `t0`.`id` AS `t0_c3` FROM `users` AS `t0` ] in /Users/masamichi/work/web_v3/fuel/core/classes/database/mysqli/connection.php on line 292
ERROR - 2017-04-03 22:05:01 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 't0.id' in 'field list' with query: "SELECT `t0`.`tel` AS `t0_c0`, `t0`.`email` AS `t0_c1`, `t0`.`name` AS `t0_c2`, `t0`.`id` AS `t0_c3` FROM `users` AS `t0`" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-03 22:05:07 --> 1046 - No database selected [ SELECT `t0`.`tel` AS `t0_c0`, `t0`.`email` AS `t0_c1`, `t0`.`name` AS `t0_c2`, `t0`.`id` AS `t0_c3` FROM `users` AS `t0` ] in /Users/masamichi/work/web_v3/fuel/core/classes/database/mysqli/connection.php on line 292
ERROR - 2017-04-03 22:05:12 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 't0.id' in 'field list' with query: "SELECT `t0`.`tel` AS `t0_c0`, `t0`.`email` AS `t0_c1`, `t0`.`name` AS `t0_c2`, `t0`.`id` AS `t0_c3` FROM `users` AS `t0`" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
