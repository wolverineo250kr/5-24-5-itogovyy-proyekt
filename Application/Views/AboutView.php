<?php
// Подключение необходимых файлов
require_once 'vendor/autoload.php';
require_once 'Application/Core/View.php';

class AboutView extends View
{
    public function render($data)
    {
       // Создание загрузчика для шаблонов Twig
        $loader = new \Twig\Loader\FilesystemLoader('Application/Views/Templates');

       // Создание экземпляра Twig
        $twig = new \Twig\Environment($loader);

      // Рендеринг шаблона с передачей данных
        echo $twig->render('about.twig', [
            'title' => 'О нас',
            'data' => $data,
            'current_page' => 'about'
        ]);
    }
}
