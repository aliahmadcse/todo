<?php

class User extends DatabaseObject
{
    protected static $table_name = "users";
    protected static $db_columns = ['id', 'username', 'email', 'hashed_password', 'dated'];

    protected $id;
    protected $username;
    protected $email;
    protected $password;
    protected $hashed_password;
    protected $dated;

    public function __construct($args = [])
    {
        foreach ($args as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    function get_dated()
    {
        return $this->dated ?? '';
    }

    public function get_id()
    {
        return $this->id ?? '';
    }

    public function get_username()
    {
        return $this->username ?? '';
    }

    public function get_email()
    {
        return $this->email ?? '';
    }

    public function get_password()
    {
        return $this->password ?? '';
    }

    private function set_hashed_password()
    {
        $this->hashed_password = password_hash($this->password, PASSWORD_BCRYPT);
    }

    public function verify_password($password)
    {
        return password_verify($password, $this->hashed_password);
    }

    private function has_unique_username()
    {
        $result = static::find_by_username($this->username);
        if (!$result) {
            return true;
        }
        return false;
    }

    private function validate()
    {
        $this->errors = [];
        if (!$this->has_unique_username()) {
            $this->errors['username'] = "Opp's, Username already exists";
        }
    }

    public function create()
    {
        $this->validate();
        if (!empty($this->errors)) {
            return false;
        }
        $this->set_hashed_password();
        return parent::create();
    }

    public static function find_by_username($username)
    {
        $sql = "SELECT * FROM " . static::$table_name . " ";
        $sql .= "WHERE username='" . self::$database->escape_string($username) . "'";

        $obj_array = static::find_by_sql($sql);
        if (!empty($obj_array)) {
            return array_shift($obj_array);
        }
        return false;
    }
}
