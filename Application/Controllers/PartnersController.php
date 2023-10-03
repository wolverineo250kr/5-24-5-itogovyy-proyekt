<?php

require_once 'Application/Core/Controller.php';

class PartnersController extends Controller
{
    public function __construct($model, $view)
    {
        parent::__construct($model, $view);
    }

    public function index()
    {
        $data = $this->model->getData(); // Пример получения данных из модели

        $this->view->render($data);
    }
}
