<?php

class DatabaseObject
{
    protected static $database;
    protected static $table_name;
    protected static $db_columns;

    public static function set_database($database)
    {
        self::$database = $database;
    }
}
