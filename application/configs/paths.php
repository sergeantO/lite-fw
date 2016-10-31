<?php

use fw\core\Router;

/* 
 * База возможных маршрутов приложения
 */

// user paths
Router::add('^news/(?P<alias>[a-z 0-9 -]+)$', ['module' => 'news', 'action' => 'get-one']);

// default paths
Router::add('^$', ['module' => 'page', 'action' => 'index']);
Router::add('^(?P<module>[a-z-]+)/?(?P<action>[a-z-]+)?$');