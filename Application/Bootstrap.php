<?php

require_once 'Application/Controllers/AboutController.php';
require_once 'Application/Controllers/PartnersController.php';
require_once 'Application/Controllers/ContactController.php';
require_once 'Application/Controllers/FaqController.php';
require_once 'Application/Controllers/RulesController.php';
require_once 'Application/Controllers/PartnersController.php';
require_once 'Application/Models/AboutModel.php';
require_once 'Application/Models/ContactModel.php';
require_once 'Application/Models/FaqModel.php';
require_once 'Application/Models/RulesModel.php';
require_once 'Application/Models/PartnersModel.php';
require_once 'Application/Views/ContactView.php';
require_once 'Application/Views/FaqView.php';
require_once 'Application/Views/AboutView.php';
require_once 'Application/Views/RulesView.php';
require_once 'Application/Views/PartnersView.php';

class Bootstrap
{
    public function __construct()
    {
        $requestUri = $_SERVER["REQUEST_URI"]; // Например, "/contact"
        $pathParts = explode("/", $requestUri);
        $controllerName = $pathParts[1] ? $pathParts[1] : 'about'; // Имя контроллера, по умолчанию 'about'

        $controllerName = filter_var($controllerName, FILTER_SANITIZE_STRING);

        // Определение классов контроллеров, моделей и представлений
        $controllerClass = ucfirst($controllerName) . 'Controller';
        $modelClass = ucfirst($controllerName) . 'Model';
        $viewClass = ucfirst($controllerName) . 'View';

        // Проверка наличия классов
        if (class_exists($controllerClass) && class_exists($modelClass) && class_exists($viewClass)) {
            // Создание экземпляров контроллера, модели и представления
            $controller = new $controllerClass(new $modelClass(), new $viewClass());
            $controller->index();
        } else {
            // Отображение страницы 404
            echo 'Страница не найдена';
        }
    }
}