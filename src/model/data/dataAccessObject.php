<?php 
class dataAccessObject {
    private static $instance;
    private $pdo;
    private function __construct()
    {}
    public static function getInstance()
    {
        if (!isset(self::$instance))
        {
            global $host, $dbname, $user, $pass;
            $dsn = "mysql:host=$host;port=3306;dbname=$dbname";
            self::$instance = new dataAccessObject();
            self::$instance->pdo = new PDO($dsn, $user, $pass);
        }
        return self::$instance;
    }
    public function getPdo()
    {
        return $this->pdo;
    }
}
?>