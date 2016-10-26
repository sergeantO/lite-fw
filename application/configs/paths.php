<?php

use fw\core\Router;

/* 
 * База возможных маршрутов приложения
 */

// user paths
Router::add('^news/(?P<alias>[a-z 0-9 -]+)$', ['controller' => 'news', 'action' => 'get-one']);
Router::add('^(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)/(?P<alias>[a-z 0-9 -]+)$');

// default paths
Router::add('^$', ['controller' => 'main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');