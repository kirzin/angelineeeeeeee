<?php
include_once('config1.php');
  include_once('Database.php');
  define('SS_DB_NAME', 'web2');
  define('SS_DB_USER', 'root');
  define('SS_DB_PASSWORD', '');
  define('SS_DB_HOST', 'localhost');
 
  $dsn  =   "mysql:dbname=".SS_DB_NAME.";host=".SS_DB_HOST."";
  $pdo  =   "";
  try {
    $pdo = new PDO($dsn, SS_DB_USER, SS_DB_PASSWORD);
  }catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  $db   =   new Database($pdo);
?>