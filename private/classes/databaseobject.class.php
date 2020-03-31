<?php

class DatabaseObject
{
    protected static $database;
    protected static $table_name;
    protected static $db_columns;
    public $errors = [];

    public static function set_database($database)
    {
        self::$database = $database;
    }

    public function create()
    {
        $attributes = $this->attributes();
        $sql = "INSERT INTO " . static::$table_name . " (";
        $sql .= join(',', array_keys($attributes));
        $sql .= ") VALUES ('";
        $sql .= join("','", array_values($attributes));
        $sql .= "')";

        $result = self::$database->query($sql);
        if ($result) {
            $this->id = self::$database->insert_id;
        }
        return $result;
    }

    protected function attributes()
    {
        $attributes = [];
        foreach (static::$db_columns as $column) {
            if ($column == 'id' || $column == "dated") {
                continue;
            } else {
                // performing sanization to prevent sql injunction
                $attributes[$column] = self::$database->escape_string($this->$column);
            }
        }
        return $attributes;
    }

    protected static function find_by_sql($sql)
    {
        $result = self::$database->query($sql);

        $obj_array = [];
        if ($result) {
            while ($record = $result->fetch_assoc()) {
                $obj_array[] = static::instantiate($record);
            }
        }
        return $obj_array;
    }

    public static function find_all()
    {
        $sql = "SELECT * FROM " . static::$table_name;
        return static::find_by_sql($sql);
    }

    protected static function instantiate($record)
    {
        $object = new static;
        foreach ($record as $key => $value) {
            if (property_exists($object, $key))
                $object->$key = $value;
        }
        return $object;
    }

}
