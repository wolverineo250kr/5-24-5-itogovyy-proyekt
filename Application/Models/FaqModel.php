<?php

require_once 'Application/Core/Model.php';

class FaqModel extends Model
{
    public function getData()
    {
        $data = 'Часто задаваемые вопросы';
        // Ваш код для получения данных
        return $data;
    }
}