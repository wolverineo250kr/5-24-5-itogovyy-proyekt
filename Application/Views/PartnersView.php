<?php

require_once 'vendor/autoload.php';
require_once 'Application/Core/View.php';

class PartnersView extends View
{
    public function render($data)
    {
        $loader = new \Twig\Loader\FilesystemLoader('Application/Views/Templates');
        $twig = new \Twig\Environment($loader);

        echo $twig->render('partners.twig', [
            'title' => 'Партнеры',
            'data' => $data,
            'current_page' => 'partners'
        ]);
    }
}
