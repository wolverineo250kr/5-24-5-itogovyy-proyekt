<?php

require_once 'Application/Core/Model.php';

class PartnersModel extends Model
{
    public function getData()
    {
        $data = '<b>- apple</b><br><b>- audi</b><br><b>- NASA</b>';

        return $data;
    }
}