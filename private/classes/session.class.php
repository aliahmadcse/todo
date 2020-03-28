<?php

class Session
{
    // public $message;

    public function set_message($msg)
    {
        $_SESSION['message'] = $msg;
        // $this->message = $msg;
    }

    public function get_message()
    {
        return $_SESSION['message'];
    }

    public function isset_message()
    {
        return isset($_SESSION['message']);
    }

    public function unset_message()
    {
        unset($_SESSION['message']);
    }
}
