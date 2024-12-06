

<?php
defined('APPPATH') OR exit('Không được quyền truy cập phần này');

require CONFIGPATH . DIRECTORY_SEPARATOR . 'database.php';

require CONFIGPATH . DIRECTORY_SEPARATOR . 'config.php'; 
require CONFIGPATH . DIRECTORY_SEPARATOR . 'autoload.php';
require LIBPATH . DIRECTORY_SEPARATOR . 'database.php';
require COREPATH . DIRECTORY_SEPARATOR . 'base.php';

if (is_array($autoload)) {
    foreach ($autoload as $type => $list_auto) {
        if (!empty($list_auto)) {
            foreach ($list_auto as $name) {
                load($type, $name);
            }
        }
    }
}



//
//connect db
db_connect($db);

require COREPATH . DIRECTORY_SEPARATOR . 'router.php';
















