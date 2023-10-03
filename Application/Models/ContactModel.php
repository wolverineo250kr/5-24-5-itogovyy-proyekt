<?php

require_once 'Application/Core/Model.php';

class ContactModel extends Model
{
    public function getData()
    {
        $data = '+971 4 264 15 15, Район Al Muhaisnah 4, Дубай, Объединенные Арабские Эмираты';
        return $data;
    }
}
