<?php

require_once 'vendor/autoload.php';
require_once 'Application/Core/View.php';

class FaqView extends View
{
    public function render($data)
    {
        $loader = new \Twig\Loader\FilesystemLoader('Application/Views/Templates');
        $twig = new \Twig\Environment($loader);

        echo $twig->render('faq.twig', [
            'title' => 'Faq',
            'data' => $data,
            'current_page' => 'faq'
        ]);
    }
}
