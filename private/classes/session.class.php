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

    public function set_signin($id, $username)
    {
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $username;
    }

    public function is_signed_in()
    {
        return isset($_SESSION['id']) && isset($_SESSION['username']);
    }

    public function get_username()
    {
        return $_SESSION['username'];
    }

    public function get_user_id()
    {
        return $_SESSION['id'];
    }

    public function signout()
    {
        unset($_SESSION['id']);
        unset($_SESSION['username']);
    }
}
