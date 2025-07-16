<?php
class Dados {
    private static $conn;

    public static function conectar() {
        if (!isset(self::$conn)) {
            $servername = "db";
            $username = "root";
            $password = "root";
            $dbname = "planilha_financeira";

            try {
                self::$conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Connection failed: " . $e->getMessage());
            }
        }
        return self::$conn;
    }
}
