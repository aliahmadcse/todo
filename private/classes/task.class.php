<?php
class Task extends DatabaseObject
{
    protected static $table_name = "tasks";
    protected static $db_columns = ["id", "user_id", "task_detail", "is_important", "is_completed", "dated"];

    protected $id;
    protected $user_id;
    protected $task_detail;
    protected $is_important;
    protected $is_completed;
    protected $dated;

    public function __construct($args = [])
    {
        foreach ($args as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    public function get_task_id()
    {
        return $this->id;
    }

    public function get_task_detail()
    {
        return $this->task_detail;
    }

    public function get_is_completed()
    {
        return $this->is_completed;
    }

    public function get_is_important()
    {
        return $this->is_important;
    }

    public static function find_by_user_id($user_id)
    {
        $sql = "SELECT * FROM " . static::$table_name . " ";
        $sql .= "WHERE user_id=" . self::$database->escape_string($user_id) . " ";
        $sql .= "AND is_completed=0" . " ";
        $sql .= "AND is_important=0" . " ";
        $sql .= "ORDER BY dated DESC";
        return static::find_by_sql($sql);
    }

    public static function mark_complete($task_id)
    {
        $sql = "UPDATE " . static::$table_name . " ";
        $sql .= "SET is_completed=1" . " ";
        $sql .= "WHERE id=" . self::$database->escape_string($task_id) . " ";
        $sql .= "LIMIT 1";
        return self::$database->query($sql);
    }

    public static function mark_important($task_id)
    {
        $sql = "UPDATE " . static::$table_name . " ";
        $sql .= "SET is_important=1" . " ";
        $sql .= "WHERE id=" . self::$database->escape_string($task_id) . " ";
        $sql .= "LIMIT 1";
        return self::$database->query($sql);
    }
}
