<?php
require_once 'config/server_info.php';
require_once 'config/path.php';

require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';
require_once 'core/route.php';
require_once 'core/database.php';

Route::start(); // запускаем маршрутизатор
?>