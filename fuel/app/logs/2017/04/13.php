<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

ERROR - 2017-04-13 02:28:31 --> Error - Call to a member function run() on array in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php on line 309
ERROR - 2017-04-13 02:32:10 --> Fatal Error - Uncaught Fuel\Core\PhpErrorException: Array to string conversion in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php:312
Stack trace:
#0 /Users/masamichi/work/web_v3/fuel/core/bootstrap.php(103): Fuel\Core\Errorhandler::error_handler(8, 'Array to string...', '/Users/masamich...', 312)
#1 /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php(312): {closure}(8, 'Array to string...', '/Users/masamich...', 312, Array)
#2 [internal function]: Controller_Main->action_aftersurvey()
#3 /Users/masamichi/work/web_v3/fuel/core/classes/request.php(454): ReflectionMethod->invokeArgs(Object(Controller_Main), Array)
#4 /Users/masamichi/work/web_v3/public/index.php(71): Fuel\Core\Request->execute()
#5 /Users/masamichi/work/web_v3/public/index.php(92): {closure}()
#6 {main}
  thrown in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php on line 312
ERROR - 2017-04-13 02:32:28 --> Fatal Error - Uncaught Fuel\Core\PhpErrorException: Array to string conversion in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php:312
Stack trace:
#0 /Users/masamichi/work/web_v3/fuel/core/bootstrap.php(103): Fuel\Core\Errorhandler::error_handler(8, 'Array to string...', '/Users/masamich...', 312)
#1 /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php(312): {closure}(8, 'Array to string...', '/Users/masamich...', 312, Array)
#2 [internal function]: Controller_Main->action_aftersurvey()
#3 /Users/masamichi/work/web_v3/fuel/core/classes/request.php(454): ReflectionMethod->invokeArgs(Object(Controller_Main), Array)
#4 /Users/masamichi/work/web_v3/public/index.php(71): Fuel\Core\Request->execute()
#5 /Users/masamichi/work/web_v3/public/index.php(92): {closure}()
#6 {main}
  thrown in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php on line 312
ERROR - 2017-04-13 03:15:28 --> Error - Call to undefined method Fuel\Core\Validation::validation() in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php on line 341
ERROR - 2017-04-13 09:05:54 --> Error - syntax error, unexpected 'return' (T_RETURN) in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php on line 359
