<?php

namespace Lun324\TestComposer;

class Result
{

    public $result;
    public $message;

    public function __construct($result, $message)
    {
        $this->result = $result;
        $this->message = $message;
    }

    public function setResult($newResult)
    {
        $this->result = $newResult;
    }

    public function setMessage($newMessage)
    {
        $this->message = $newMessage;
    }

}