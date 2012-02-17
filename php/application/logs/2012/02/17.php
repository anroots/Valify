<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-17 23:47:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL check/graph was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-02-17 23:47:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL check/graph was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /data/www/kohana/3.2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /data/www/kohana/3.2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /data/www/valify/index.php(106): Kohana_Request->execute()
#3 {main}
2012-02-17 23:47:45 --- ERROR: Kohana_Exception [ 0 ]: The created property does not exist in the Model_Check class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-02-17 23:47:45 --- STRACE: Kohana_Exception [ 0 ]: The created property does not exist in the Model_Check class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /data/www/valify/php/application/classes/controller/check.php(38): Kohana_ORM->__get('created')
#1 [internal function]: Controller_Check->action_graph()
#2 /data/www/kohana/3.2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Check))
#3 /data/www/kohana/3.2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /data/www/kohana/3.2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /data/www/valify/index.php(106): Kohana_Request->execute()
#6 {main}
2012-02-17 23:53:38 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Site class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-02-17 23:53:38 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Site class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /data/www/valify/php/application/views/dash/index.php(4): Kohana_ORM->__get('title')
#1 /data/www/kohana/3.2/system/classes/kohana/view.php(61): include('/data/www/valif...')
#2 /data/www/kohana/3.2/system/classes/kohana/view.php(343): Kohana_View::capture('/data/www/valif...', Array)
#3 /data/www/kohana/3.2/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /data/www/valify/php/application/views/templates/theme.php(34): Kohana_View->__toString()
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
2012-02-17 23:53:43 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Site class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-02-17 23:53:43 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Site class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /data/www/valify/php/application/views/dash/index.php(4): Kohana_ORM->__get('name')
#1 /data/www/kohana/3.2/system/classes/kohana/view.php(61): include('/data/www/valif...')
#2 /data/www/kohana/3.2/system/classes/kohana/view.php(343): Kohana_View::capture('/data/www/valif...', Array)
#3 /data/www/kohana/3.2/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /data/www/valify/php/application/views/templates/theme.php(34): Kohana_View->__toString()
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