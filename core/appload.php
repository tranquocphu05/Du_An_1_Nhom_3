<?php
defined('APPPATH') OR exit('Không được quyền truy cập phần này');
// Include core database
require LIBPATH . DIRECTORY_SEPARATOR . 'database.php';
// Include core base
require COREPATH . DIRECTORY_SEPARATOR . 'base.php';
if (is_array($autoload)) {
    foreach ($autoload as $type => $list_auto) {
        if (!empty($list_auto)) {
            foreach ($list_auto as $name) {
   
            }
        }
    }
}
db_connect($db);
require COREPATH . DIRECTORY_SEPARATOR . 'router.php';
















