<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-27 17:38:13 --- ERROR: Kohana_Exception [ 0 ]: The na,e property does not exist in the Model_Site class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-02-27 17:38:13 --- STRACE: Kohana_Exception [ 0 ]: The na,e property does not exist in the Model_Site class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /data/www/kohana/3.2/modules/database/classes/kohana/database/result.php(155): Kohana_ORM->__get('na,e')
#1 /data/www/valify/php/application/views/templates/theme.php(30): Kohana_Database_Result->as_array('id', 'na,e')
#2 /data/www/kohana/3.2/system/classes/kohana/view.php(61): include('/data/www/valif...')
#3 /data/www/kohana/3.2/system/classes/kohana/view.php(343): Kohana_View::capture('/data/www/valif...', Array)
#4 /data/www/kohana/3.2/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 /data/www/kohana/3.2/modules/commoneer-1.4/classes/commoneer/controller/template.php(155): Kohana_Controller_Template->after()
#6 [internal function]: Commoneer_Controller_Template->after()
#7 /data/www/kohana/3.2/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Dash))
#8 /data/www/kohana/3.2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /data/www/kohana/3.2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /data/www/valify/index.php(106): Kohana_Request->execute()
#11 {main}
2012-02-27 17:38:19 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Site class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-02-27 17:38:19 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Site class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /data/www/kohana/3.2/modules/database/classes/kohana/database/result.php(155): Kohana_ORM->__get('name')
#1 /data/www/valify/php/application/views/templates/theme.php(30): Kohana_Database_Result->as_array('id', 'name')
#2 /data/www/kohana/3.2/system/classes/kohana/view.php(61): include('/data/www/valif...')
#3 /data/www/kohana/3.2/system/classes/kohana/view.php(343): Kohana_View::capture('/data/www/valif...', Array)
#4 /data/www/kohana/3.2/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 /data/www/kohana/3.2/modules/commoneer-1.4/classes/commoneer/controller/template.php(155): Kohana_Controller_Template->after()
#6 [internal function]: Commoneer_Controller_Template->after()
#7 /data/www/kohana/3.2/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Dash))
#8 /data/www/kohana/3.2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /data/www/kohana/3.2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /data/www/valify/index.php(106): Kohana_Request->execute()
#11 {main}
2012-02-27 17:38:24 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Site class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-02-27 17:38:24 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Site class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /data/www/kohana/3.2/modules/database/classes/kohana/database/result.php(155): Kohana_ORM->__get('title')
#1 /data/www/valify/php/application/views/templates/theme.php(30): Kohana_Database_Result->as_array('id', 'title')
#2 /data/www/kohana/3.2/system/classes/kohana/view.php(61): include('/data/www/valif...')
#3 /data/www/kohana/3.2/system/classes/kohana/view.php(343): Kohana_View::capture('/data/www/valif...', Array)
#4 /data/www/kohana/3.2/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 /data/www/kohana/3.2/modules/commoneer-1.4/classes/commoneer/controller/template.php(155): Kohana_Controller_Template->after()
#6 [internal function]: Commoneer_Controller_Template->after()
#7 /data/www/kohana/3.2/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Dash))
#8 /data/www/kohana/3.2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /data/www/kohana/3.2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /data/www/valify/index.php(106): Kohana_Request->execute()
#11 {main}
2012-02-27 17:38:25 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Site class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-02-27 17:38:25 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Site class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /data/www/kohana/3.2/modules/database/classes/kohana/database/result.php(155): Kohana_ORM->__get('title')
#1 /data/www/valify/php/application/views/templates/theme.php(30): Kohana_Database_Result->as_array('id', 'title')
#2 /data/www/kohana/3.2/system/classes/kohana/view.php(61): include('/data/www/valif...')
#3 /data/www/kohana/3.2/system/classes/kohana/view.php(343): Kohana_View::capture('/data/www/valif...', Array)
#4 /data/www/kohana/3.2/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 /data/www/kohana/3.2/modules/commoneer-1.4/classes/commoneer/controller/template.php(155): Kohana_Controller_Template->after()
#6 [internal function]: Commoneer_Controller_Template->after()
#7 /data/www/kohana/3.2/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Dash))
#8 /data/www/kohana/3.2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /data/www/kohana/3.2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /data/www/valify/index.php(106): Kohana_Request->execute()
#11 {main}