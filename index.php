<?php
use app\router\router;

require_once __DIR__.'/autoload.php';


try {
    $rout = new router();
    $rout->redirect();
}catch(Exception $e){
    $data = $e->getMessage();
        require_once 'views/404.php';
}
