<?php
class Database
{
    private static $instance = null;

    public function __construct()
    {
        
    }
    public static function connect()
    {
        if (!self::$instance) {
            try {
                self::$instance = new PDO(
                    'mysql:dbname=evalphp;host=localhost;charset=utf8',
                    'root',
                    '',
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                    ]
                );
            } catch (PDOException $e) {
                die("Erreur de connexion à la base de données : " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}
?>