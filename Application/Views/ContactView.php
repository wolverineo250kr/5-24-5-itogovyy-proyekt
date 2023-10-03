<?php
// Подключение необходимых файлов
require_once 'Application/Core/View.php';

class ContactView extends View {
    public function render($data) {
        // Создание загрузчика для шаблонов Twig
        $loader = new \Twig\Loader\FilesystemLoader('Application/Views/Templates');
        
        // Создание экземпляра Twig
        $twig = new \Twig\Environment($loader);

         // Рендеринг шаблона с передачей данных
        echo $twig->render('contact.twig', [
            'title' => 'Контакты',
            'data' => $data,
            'current_page' => 'contact'
        ]);
    }
}
