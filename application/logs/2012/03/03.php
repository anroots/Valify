<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-03 17:20:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/theme.php [ 19 ]
2012-03-03 17:20:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/theme.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-03 17:35:50 --- ERROR: Kohana_Exception [ 0 ]: The created property does not exist in the Model_Check class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-03-03 17:35:50 --- STRACE: Kohana_Exception [ 0 ]: The created property does not exist in the Model_Check class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /data/www/valify/application/views/dash/index.php(8): Kohana_ORM->__get('created')
#1 /data/www/kohana/3.2/system/classes/kohana/view.php(61): include('/data/www/valif...')
#2 /data/www/kohana/3.2/system/classes/kohana/view.php(343): Kohana_View::capture('/data/www/valif...', Array)
#3 /data/www/kohana/3.2/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /data/www/valify/application/views/templates/theme.php(38): Kohana_View->__toString()
#5 /data/www/kohana/3.2/system/classes/kohana/view.php(61): include('/data/www/valif...')
#6 /data/www/kohana/3.2/system/classes/kohana/view.php(343): Kohana_View::capture('/data/www/valif...', Array)
#7 /data/www/kohana/3.2/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /data/www/kohana/3.2/modules/commoneer-1.4/classes/commoneer/controller/template.php(155): Kohana_Controller_Template->after()
#9 [internal function]: Commoneer_Controller_Template->after()
#10 /data/www/kohana/3.2/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Dash))
#11 /data/www/kohana/3.2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /data/www/kohana/3.2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /data/www/valify/index.php(106): Kohana_Request->execute()
#14 {main}