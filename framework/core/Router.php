<?php

namespace fw\core;

/**
 * класс Route анализирует запрос, 
 * сверяет с базой маршрутов и
 * запускает методы контроллеров
 */
class Router
{
    protected static $routes = array(); //все маршруты
    protected static $route = array();  //текущий маршрут
    
    /**
     * Добавить маршрут
     * 
     * @param string $regexp Регулярное выражения
     * @param array $route   [controller, action]
     */
    public static function add($regexp, $route = []){
        self::$routes[$regexp] = $route;
    }
    
    /**
     * Поиск совпадений запроса с базой маршрутов
     * @param string $url запрос пользователя
     * @return boolean найдено ли совпадение
     */
    private static function matchRoute($url){
        foreach (self::$routes as $pattern => $route) {
            if (preg_match("#$pattern#i", $url, $matches)){ 
                foreach ($matches as $key => $value) {
                    if (is_string($key)){
                        $route[$key] = $value;
                    }
                }
                if (!isset($route['action'])){
                    $route['action'] = 'index';
                }
                //$route['module'] = self::upperCamelCase($route['module']);
                self::$route = $route;
                return TRUE;
            }
        }
        return FALSE;
    }
    /**
     * перенаправляет url на контроллер и индекс
     * @param string $url ыходящий гкд
     * @return void
     */
    public static function dispatch() 
    { 
        // обработка запроса клиента
        $url = trim($_SERVER['REQUEST_URI'], '/');
        $url = self::removeQueryString($url);
        
        // поиск совпадений с базой маршрутов.
        if (self::matchRoute($url)){
            $controller = '\app\modules\\' . self::$route['module'] . '\Controller';
            if (class_exists($controller)){
                $cObj = new $controller(self::$route);
                $action = self::lowerCamelCase(self::$route['action']) . 'Action';
                if (method_exists($cObj, $action)){
                    if (isset(self::$route['alias'])){
                        $cObj->$action(self::$route['alias']);
                    } else {
                        $cObj->$action();
                        $cObj->render();
                    } 
                } else {
                    echo $action . ' не найден';
                }
            }else{
                echo $controller . ' не найден';
            }
        }else{
            http_response_code(404);
            echo '404';
        }
    }
    
    private static function upperCamelCase($name){
        $name = str_replace('-', ' ', $name);
        $name = ucwords($name);
        $name = str_replace(' ', '', $name);
        return $name;
    }
    
    private static function lowerCamelCase($name) {
        return lcfirst(self::upperCamelCase($name));
    }
    
    private static function removeQueryString($url) {
        if ($url){
            $params = explode('?', $url);
            if (FALSE === strpos($params[0], '=')){
                return trim($params[0], '/');
            }else{
                return '';
            }
        }
        return $url;
    }
}
