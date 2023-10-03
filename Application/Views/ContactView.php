<?php
require_once 'Application/Core/View.php';

class ContactView extends View {
    public function render($data) {
        $loader = new \Twig\Loader\FilesystemLoader('Application/Views/Templates');
        $twig = new \Twig\Environment($loader);

        echo $twig->render('contact.twig', [
            'title' => 'Контакты',
            'data' => $data,
            'current_page' => 'contact'
        ]);
    }
}