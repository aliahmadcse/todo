<?php

class Session
{
    private $id;
    private $username;
    private $last_signin;
    private const MAX_LOGIN_AGE = 10; //1 day


    public function __construct()
    {
        $this->check_stored_signin();
        if (!$this->is_last_signin_recent()) {
            $this->signout();
        }
    }

    private function check_stored_signin()
    {
        if (isset($_SESSION['id'])) {
            $this->id = $_SESSION["id"];
            $this->last_signin = $_SESSION["last_signin"];
            $this->username = $_SESSION["username"];
        }
    }

    public function set_signin($user)
    {
        $this->id = $_SESSION['id'] = $user->get_id();
        $this->username = $_SESSION['username'] = $user->get_username();
        $this->last_signin = $_SESSION['last_signin'] = time();
    }

    public function is_signed_in()
    {
        return isset($this->id) && isset($this->username);
    }

    public function get_username()
    {
        return $_SESSION['username'] ?? '';
    }

    public function get_user_id()
    {
        return $_SESSION['id'] ?? '';
    }

    private function is_last_signin_recent()
    {
        if (!isset($this->last_signin)) {
            return false;
        } elseif (($this->last_signin + self::MAX_LOGIN_AGE) < time()) {
            return false;
        }
        return true;
    }

    public function signout()
    {
        unset($_SESSION['id']);
        unset($_SESSION['username']);
        unset($_SESSION['last_signin']);
        unset($this->id);
        unset($this->username);
        unset($this->last_signin);
    }

    // handling message
    public function set_message($msg)
    {
        $_SESSION['message'] = $msg;
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
