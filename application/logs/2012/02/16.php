<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-16 08:55:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL valify was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-02-16 08:55:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL valify was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /data/www/kohana/3.2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /data/www/kohana/3.2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /data/www/valify/index.php(106): Kohana_Request->execute()
#3 {main}
2012-02-16 08:55:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 11 ]
2012-02-16 08:55:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 11 ]
--
#0 /data/www/valify/application/views/template.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/data/www/valif...', 11, Array)
#1 /data/www/kohana/3.2/system/classes/kohana/view.php(61): include('/data/www/valif...')
#2 /data/www/kohana/3.2/system/classes/kohana/view.php(343): Kohana_View::capture('/data/www/valif...', Array)
#3 /data/www/kohana/3.2/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /data/www/kohana/3.2/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Dash))
#6 /data/www/kohana/3.2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /data/www/kohana/3.2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /data/www/valify/index.php(106): Kohana_Request->execute()
#9 {main}
2012-02-16 08:55:46 --- ERROR: View_Exception [ 0 ]: The requested view templates/theme could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-02-16 08:55:46 --- STRACE: View_Exception [ 0 ]: The requested view templates/theme could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /data/www/kohana/3.2/system/classes/kohana/view.php(137): Kohana_View->set_filename('templates/theme')
#1 /data/www/kohana/3.2/system/classes/kohana/view.php(30): Kohana_View->__construct('templates/theme', NULL)
#2 /data/www/kohana/3.2/system/classes/kohana/controller/template.php(33): Kohana_View::factory('templates/theme')
#3 /data/www/kohana/3.2/modules/commoneer-1.4/classes/commoneer/controller/template.php(110): Kohana_Controller_Template->before()
#4 /data/www/valify/application/classes/controller/main.php(10): Commoneer_Controller_Template->before()
#5 [internal function]: Controller_Main->before()
#6 /data/www/kohana/3.2/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Dash))
#7 /data/www/kohana/3.2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /data/www/kohana/3.2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /data/www/valify/index.php(106): Kohana_Request->execute()
#10 {main}
2012-02-16 08:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d/assets/shared/libs/bootstrap-2.0/js/bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-16 08:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d/assets/shared/libs/bootstrap-2.0/js/bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /data/www/valify/index.php(106): Kohana_Request->execute()
#1 {main}
2012-02-16 08:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d/assets/shared/libs/bootstrap-2.0/js/bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-16 08:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d/assets/shared/libs/bootstrap-2.0/js/bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /data/www/valify/index.php(106): Kohana_Request->execute()
#1 {main}
2012-02-16 09:05:28 --- ERROR: ErrorException [ 8 ]: Undefined index: development ~ APPPATH/config/database.php [ 67 ]
2012-02-16 09:05:28 --- STRACE: ErrorException [ 8 ]: Undefined index: development ~ APPPATH/config/database.php [ 67 ]
--
#0 /data/www/valify/application/config/database.php(67): Kohana_Core::error_handler(8, 'Undefined index...', '/data/www/valif...', 67, Array)
#1 /data/www/kohana/3.2/system/classes/kohana/core.php(792): include('/data/www/valif...')
#2 /data/www/kohana/3.2/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/data/www/valif...')
#3 /data/www/kohana/3.2/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('database')
#4 /data/www/kohana/3.2/modules/database/classes/kohana/database.php(65): Kohana_Config->load('database')
#5 /data/www/kohana/3.2/modules/orm/classes/kohana/orm.php(295): Kohana_Database::instance(NULL)
#6 /data/www/kohana/3.2/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#7 /data/www/kohana/3.2/modules/commoneer-1.4/classes/commoneer/orm.php(44): Kohana_ORM->__construct(NULL)
#8 /data/www/kohana/3.2/modules/orm/classes/kohana/orm.php(37): Commoneer_ORM->__construct(NULL)
#9 /data/www/valify/application/classes/controller/dash.php(12): Kohana_ORM::factory('site')
#10 [internal function]: Controller_Dash->action_index()
#11 /data/www/kohana/3.2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Dash))
#12 /data/www/kohana/3.2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /data/www/kohana/3.2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /data/www/valify/index.php(106): Kohana_Request->execute()
#15 {main}
2012-02-16 09:10:08 --- ERROR: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/controller/check.php [ 18 ]
2012-02-16 09:10:08 --- STRACE: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/controller/check.php [ 18 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/data/www/valif...', 18, Array)
#1 /data/www/valify/application/classes/controller/check.php(18): implode(', ', false)
#2 [internal function]: Controller_Check->action_index()
#3 /data/www/kohana/3.2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Check))
#4 /data/www/kohana/3.2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /data/www/kohana/3.2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /data/www/valify/index.php(106): Kohana_Request->execute()
#7 {main}
2012-02-16 09:10:20 --- ERROR: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/controller/check.php [ 18 ]
2012-02-16 09:10:20 --- STRACE: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/controller/check.php [ 18 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/data/www/valif...', 18, Array)
#1 /data/www/valify/application/classes/controller/check.php(18): implode(', ', false)
#2 [internal function]: Controller_Check->action_index()
#3 /data/www/kohana/3.2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Check))
#4 /data/www/kohana/3.2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /data/www/kohana/3.2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /data/www/valify/index.php(106): Kohana_Request->execute()
#7 {main}