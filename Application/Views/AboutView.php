<?php

require_once 'vendor/autoload.php';
require_once 'Application/Core/View.php';

class AboutView extends View
{
    public function render($data)
    {
        $loader = new \Twig\Loader\FilesystemLoader('Application/Views/Templates');
        $twig = new \Twig\Environment($loader);

        echo $twig->render('about.twig', [
            'title' => 'О нас',
            'data' => $data,
            'current_page' => 'about'
        ]);
    }
}
