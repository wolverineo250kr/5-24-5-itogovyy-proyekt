<?php
require_once 'Application/Core/View.php';

class RulesView extends View {
    public function render($data) {
        $loader = new \Twig\Loader\FilesystemLoader('Application/Views/Templates');
        $twig = new \Twig\Environment($loader);

        echo $twig->render('rules.twig', [
            'title' => 'Правила приема',
            'data' => $data,
            'current_page' => 'rules'
        ]);
    }
}