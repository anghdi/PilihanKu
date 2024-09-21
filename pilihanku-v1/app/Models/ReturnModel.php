<?php

namespace App\Models;

use CodeIgniter\Model;

class ReturnModel extends Model
{
    protected $number = 0;
    protected $message = "";
    protected $data = null;

    function setNumber($number)
    {
        $this->number = $number;
    }

    function setMessage($message)
    {
        $this->message = $message;
    }

    function setData($data)
    {
        $this->data = $data;
    }

    function getNumber()
    {
        return $this->number;
    }

    function getMessage()
    {
        return $this->message;
    }

    function getData()
    {
        return $this->data;
    }
}
