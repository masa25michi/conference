<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

ERROR - 2017-04-16 04:26:13 --> Error - Call to undefined method Fuel\Core\Fieldset_Field::match_collection() in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php on line 454
ERROR - 2017-04-16 04:39:25 --> Error - syntax error, unexpected '$val' (T_VARIABLE) in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php on line 455
ERROR - 2017-04-16 05:04:08 --> 1146 - SQLSTATE[42S02]: Base table or view not found: 1146 Table 'conference.sser' doesn't exist with query: "SELECT `t0`.`tel` AS `t0_c0`, `t0`.`email` AS `t0_c1`, `t0`.`firstname` AS `t0_c2`, `t0`.`lastname` AS `t0_c3` FROM `sser` AS `t0` WHERE `t0`.`tel` = '1' AND `t0`.`email` = 'a' ORDER BY `t0`.`tel` ASC LIMIT 1" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-16 05:04:32 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '1' for key 'PRIMARY' with query: "INSERT INTO `user` (`firstname`, `lastname`, `email`, `tel`) VALUES ('Masa', 'Tanaka', 'a', '1')" in /Users/masamichi/work/web_v3/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-04-16 05:15:45 --> Error - Call to undefined method Fuel\Core\Fieldset_Field::add_rile() in /Users/masamichi/work/web_v3/fuel/app/classes/controller/main.php on line 467
